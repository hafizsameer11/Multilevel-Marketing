<?php

namespace App\Http\Controllers;

use App\Models\DailyVideoRotation;
use App\Models\plans;
use App\Models\Transaction;
use App\Models\User;
use App\Models\UserEarning;
use App\Models\UserMeta;
use App\Models\VideoModel;
use App\Models\VideoWorkDone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;

class VideoWorkController extends Controller
{
    public function index()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $userPlanVideos = $user->userMeta->plan->videos;

        $user = auth()->user();
        $plan = plans::find($user->usermeta->plan_id);
        $latestRotation = DailyVideoRotation::where('plan_id', $plan->id)
            ->latest()
            ->first();
        $startVideoId = $latestRotation ? $latestRotation->last_video_id + 1 : 1;
        $endVideoId = $startVideoId + $plan->videos - 1;
        $videos = VideoModel::whereBetween('id', [$startVideoId, $endVideoId])->get();
        $watchedvideos = VideoWorkDone::where('user_id', Auth::id())->pluck('videdo_id')->toArray();
        return view('dashboard.video-work', compact('user', 'videos', 'watchedvideos'));
    }
    public function single_video($id)
    {
        $video = VideoModel::find($id);
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);

        $response = view('dashboard.video-single', compact('user', 'video'));
        return Response::make($response)->header('Cache-Control', 'no-cache, no-store, must-revalidate')
            ->header('Pragma', 'no-cache')
            ->header('Expires', '0');
    }
    public function completedvideo(Request  $request)
    {
        $userid = $request->userid;
        $videoid = $request->videoId;
        $videdone = new VideoWorkDone();
        $videdone->user_id = AUth::id();
        $videdone->videdo_id = $videoid;
        $earningarray = [0.01, 0.02, 0.03];
        $randomIndex = array_rand($earningarray);
        $randomEarning = $earningarray[$randomIndex];
        if ($videdone->save()) {
            $usermeta = UserMeta::where('user_id', Auth::id())->latest()->first();
            $usermeta->work_earning += $randomEarning;
            $usermeta->user_balance+=$randomEarning;
            $usermeta->save();
            $earning = new UserEarning();
            $earning->user_id = Auth::id();
            $earning->status = "Pending";
            $earning->video_id=$videoid;
            $earning->source = "Video Work";
            $earning->amount = $randomEarning;
            $earning->save();
            return response()->json(['success' => 'Video completed']);
        } else {
            return response()->json(['error' => 'Something went wrong']);
        }
    }
    public function previouswork()
    {
        $id = Auth::id();
        $data = VideoWorkDone::with('videoModel')->where('user_id', $id)
            ->latest()
            ->get();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        return view('dashboard.work-done', compact('user', 'data'));
    }
}
