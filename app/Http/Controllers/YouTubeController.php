<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\VideoModel;
use Carbon\Carbon;
use Google\Service\Docs\Request;
use Google_Client;
use Google_Service_YouTube;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request as Req;

class YouTubeController extends Controller
{
    public function show_form()
    {
        $id = Auth::id();
        $user = User::with(['usermeta', 'usermeta.plan'])->find($id);
        $videos = VideoModel::latest()->get();
        return  view('dashboard.video', compact('user','videos'));
    }
    public function destroy($id){
        $video=VideoModel::find($id);
        if($video->delete()){
            return redirect()->route('video.url')->with('success','Video deleted successfully');
        }else{
            return redirect()->route('video.url')->with('error','Something went wrong');
        }

    }
    public function index()
    {
        $client = new Google_Client();
        $client->setApplicationName('YouTube API');
        $client->setDeveloperKey(config('services.youtube.api_key'));

        $youtube = new Google_Service_YouTube($client);

        // Retrieve videos from the YouTube channel
        $videos = $youtube->search->listSearch('snippet', [
            'channelId' => 'UCsJ4IGFws_Aor4gGgwRRj3w',
            'maxResults' => 100,
            'type' => 'video', // Specify type as 'video' to fetch only videos
        ]);

        $videoList = [];
        foreach ($videos as $video) {
            // Get video details
            $videoDetails = $youtube->videos->listVideos('contentDetails', ['id' => $video['id']['videoId']]);
            // Get video duration in ISO 8601 format
            $duration = $videoDetails[0]['contentDetails']['duration'];
            // Convert duration to seconds
            $durationSeconds = $this->convertDurationToSeconds($duration);

            // Check if the duration is more than 2 minutes (120 seconds)
            if ($durationSeconds > 120) {
                // Convert duration to a readable format
                $durationFormatted = $this->convertDurationToReadableFormat($duration);

                // Add video details to the list
                $videoList[] = [
                    'title' => $video['snippet']['title'],
                    'videoId' => $video['id']['videoId'],
                    'thumbnail' => $video['snippet']['thumbnails']['default']['url'],
                    'publishedAt' => $video['snippet']['publishedAt'],
                    'channelTitle' => $video['snippet']['channelTitle'],
                    'url' => 'https://www.youtube.com/watch?v=' . $video['id']['videoId'],
                    'duration' => $durationFormatted,

                ];
            }
        }

        return response()->json($videoList);
    }
    private function convertDurationToSeconds($duration)
    {
        $duration = str_replace('PT', '', $duration);
        $durationComponents = [];
        preg_match_all('/(\d+)([A-Z])/', $duration, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $durationComponents[$match[2]] = $match[1];
        }

        $durationSeconds = 0;
        if (isset($durationComponents['H'])) {
            $durationSeconds += $durationComponents['H'] * 3600;
        }
        if (isset($durationComponents['M'])) {
            $durationSeconds += $durationComponents['M'] * 60;
        }
        if (isset($durationComponents['S'])) {
            $durationSeconds += $durationComponents['S'];
        }
        return $durationSeconds;
    }

    private function convertDurationToReadableFormat($duration)
    {
        $duration = str_replace('PT', '', $duration);
        $durationComponents = [];
        preg_match_all('/(\d+)([A-Z])/', $duration, $matches, PREG_SET_ORDER);
        foreach ($matches as $match) {
            $durationComponents[$match[2]] = $match[1];
        }

        $readableDuration = '';
        if (isset($durationComponents['H'])) {
            $readableDuration .= $durationComponents['H'] . 'h ';
        }
        if (isset($durationComponents['M'])) {
            $readableDuration .= $durationComponents['M'] . 'm ';
        }
        if (isset($durationComponents['S'])) {
            $readableDuration .= $durationComponents['S'] . 's';
        }
        return $readableDuration;
    }
    public function getVideoDetails($id)
    {
        $client = new Google_Client();
        $client->setApplicationName('YouTube API');
        $client->setDeveloperKey(config('services.youtube.api_key'));

        $youtube = new Google_Service_YouTube($client);

        try {
            // Retrieve video details using video ID
            $video = $youtube->videos->listVideos('snippet,contentDetails', ['id' => $id]);

            // Extract video details
            $snippet = $video[0]['snippet'];
            $contentDetails = $video[0]['contentDetails'];
            $publisheddate = $this->extractDate($snippet['publishedAt']);
            $videoDetails = [
                'title' => $snippet['title'],
                'publishedAt' => $publisheddate,
                'channelTitle' => $snippet['channelTitle'],
                'thumbnail' => $snippet['thumbnails']['default']['url'],
                'original_duration'=>$contentDetails['duration'],
                'url' => 'https://www.youtube.com/watch?v=' . $id,
                'duration' => $this->convertDurationToSeconds($contentDetails['duration']),
            ];

            return $videoDetails;
        } catch (\Google_Service_Exception $e) {
            // Handle API errors
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
    public function extractDate($iso8601Timestamp)
    {
        $date = Carbon::parse($iso8601Timestamp)->toDateString();

        return $date;
    }
    public function chnage_vide(Req $request)
    {
        $videourl = $request->url;
        $videoi=$request->id;
        $videoid = $this->extractVideoId($videourl);
        if ($videoid != null) {
            $video=$this->getVideoDetails($videoid);

            $videodb=VideoModel::find($videoi);
            $videodb->title=$video['title'];
            $videodb->duration=$video['duration'];
            $videodb->url=$video['url'];
            $videodb->videoid=$videoid;
            $videodb->original_duration=$video['original_duration'];
            $videodb->publishedAt=$video['publishedAt'];

            if($videodb->save()){
              return redirect()->route('video.url')->with('success','Video Changed successfully');
            }else{
                return redirect()->route('video.url')->with('error','Failed to change video');
            }
        }
    }
    public function video_url(Req $request)
    {
        $videourl = $request->videurl;
        echo $request->videourl;
        $videoid = $this->extractVideoId($videourl);
        if ($videoid != null) {
            $video=$this->getVideoDetails($videoid);

            $videodb=new VideoModel();
            $videodb->title=$video['title'];
            $videodb->duration=$video['duration'];
            $videodb->url=$video['url'];
            $videodb->videoid=$videoid;
            $videodb->original_duration=$video['original_duration'];
            $videodb->publishedAt=$video['publishedAt'];

            if($videodb->save()){
              return redirect()->route('video.url')->with('success','Video added successfully');
            }else{
                return redirect()->route('video.url')->with('error','Failed to add video');
            }
        }
    }
    function extractVideoId($url)
    {
        // Check if the URL matches the standard YouTube URL format
        $parsedUrl = parse_url($url);
        if ($parsedUrl && isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $query);
            if (isset($query['v'])) {
                return $query['v'];
            }
        }

        // Regular expression pattern to match YouTube video ID
        $pattern = '/(?:https?:\/\/)?(?:www\.)?(?:youtube\.com\/(?:[^\/\n\s]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*?[?&]v=)|youtu\.be\/)([a-zA-Z0-9_-]{11})/';

        // Match the pattern against the URL
        preg_match($pattern, $url, $matches);

        // Extract the video ID from the matched result
        if (isset($matches[1])) {
            return $matches[1];
        }

        // Return null if no match found
        return null;
    }
}
