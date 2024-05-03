<?php

// app/Console/Commands/UpdateDailyVideoRotations.php

namespace App\Console\Commands;

use App\Models\DailyVideoRotation;
use App\Models\Plan;
use App\Models\plans;
use App\Models\VideoModel;
use Illuminate\Console\Command;

class UpdateDailyVideoRotations extends Command
{
    protected $signature = 'videos:update-rotation';

    protected $description = 'Update the daily video rotations';

    public function handle()
    {
        $plans = plans::all();

        foreach ($plans as $plan) {
            $numberOfVideos = $plan->videos;

            $lastRotation = DailyVideoRotation::where('plan_id', $plan->id)
                ->orderBy('rotation_date', 'desc')
                ->first();

            if ($lastRotation) {
                // Get the last video ID in rotation
                $startVideoId = $lastRotation->last_video_id + 1;
            } else {
                // If there's no previous rotation, start from the first video ID
                $startVideoId = VideoModel::min('id') ?? 1;
            }

            // Fetch videos starting from the determined start video ID
            $videos = VideoModel::where('id', '>=', $startVideoId)
                ->take($numberOfVideos)
                ->get();

            // Handle case when videos are not found or not enough videos available
            if ($videos->count() < $numberOfVideos) {
                // Calculate the remaining videos needed
                $remainingVideos = $numberOfVideos - $videos->count();
                // Fetch videos starting from the first video ID
                $additionalVideos = VideoModel::where('id', '>=', VideoModel::min('id'))
                    ->take($remainingVideos)
                    ->get();
                // Concatenate additional videos to the original list
                $videos = $videos->merge($additionalVideos);
            }

            // Determine end video ID
            $endVideoId = $videos->last()->id ?? $startVideoId;

            // Update or create daily video rotation
            DailyVideoRotation::updateOrCreate(
                ['plan_id' => $plan->id, 'rotation_date' => now()->toDateString()],
                ['start_video_id' => $startVideoId, 'last_video_id' => $endVideoId]
            );

            $this->info('Daily video rotations updated successfully for plan ' . $plan->id);
        }

        $this->info('All plans updated successfully.');
    }
}
