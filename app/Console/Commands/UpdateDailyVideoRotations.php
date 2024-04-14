<?php

// app/Console/Commands/UpdateDailyVideoRotations.php

namespace App\Console\Commands;


use App\Models\DailyVideoRotation;
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
                $startVideoId = $lastRotation->last_video_id + 1;
            } else {
                $startVideoId = 1;
            }

            $videos = VideoModel::where('id', '>=', $startVideoId)
                ->take($numberOfVideos)
                ->get();
            if ($videos->isEmpty()) {
                $this->error('No videos found for plan ' . $plan->id);
                continue;
            }
            $startVideoId = $videos->first()->id;
            // $endVideoId = $startVideoId + $videos->count() - 1;
            $endVideoId = $videos->last()->id;

            DailyVideoRotation::updateOrCreate(
                ['plan_id' => $plan->id, 'rotation_date' => now()->toDateString()],
                ['start_video_id' => $startVideoId, 'last_video_id' => $endVideoId]
            );

            $this->info('Daily video rotations updated successfully for plan ' . $plan->id);
        }

        $this->info('All plans updated successfully.');
    }
}
