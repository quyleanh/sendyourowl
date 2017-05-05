<!DOCTYPE html>

<html lang="en">
<head>
	<title>Get All Youtube Video Title</title>
</head>
<body>
	<pre>
		<?php
		//print_r($_POST);
		?>

		<?php 
		function get_youtube_title($video_id){
			//https://www.googleapis.com/youtube/v3/videos?id=BDAgRHRAeQI&key=AIzaSyBm-RS6DPknbNh1xtGqs0n4bkBlxyRMDpM&part=snippet
			$html = 'https://www.googleapis.com/youtube/v3/videos?id='.$video_id.'&key=AIzaSyBm-RS6DPknbNh1xtGqs0n4bkBlxyRMDpM&part=snippet';
			$response = file_get_contents($html);
			$decoded = json_decode($response, true);
			foreach ($decoded['items'] as $items) {
				$title= $items['snippet']['title'];
				return $title;
			}
		}

		function get_youtube_id($chanel_name) {
			$html = 'https://www.googleapis.com/youtube/v3/channels?key=AIzaSyBm-RS6DPknbNh1xtGqs0n4bkBlxyRMDpM&forUsername=' . $chanel_name . '&part=id';
			$response = file_get_contents($html);
			$decoded = json_decode($response, true);
			foreach ($decoded['items'] as $items) {
				$channel_id = $items['id'];
				return $channel_id;
			}	
		}
		//echo $title = get_youtube_title('BV06Sp2J82s');

		//echo $channel_id = get_youtube_id('magicofmessi');
		?>

		<?php 
		$baseUrl = 'https://www.googleapis.com/youtube/v3/';
    	// https://developers.google.com/youtube/v3/getting-started
		$apiKey = 'AIzaSyBm-RS6DPknbNh1xtGqs0n4bkBlxyRMDpM';
    	// If you don't know the channel ID see below
		$channelId = 'UCw8ZhLPdQ0u_Y-TLKd61hGA';

		$params = [
		'id'=> $channelId,
		'part'=> 'contentDetails',
		'key'=> $apiKey
		];
		$url = $baseUrl . 'channels?' . http_build_query($params);
		$json = json_decode(file_get_contents($url), true);

		$playlist = $json['items'][0]['contentDetails']['relatedPlaylists']['uploads'];

		$params = [
		'part'=> 'snippet',
		'playlistId' => $playlist,
		'maxResults'=> '50',
		'key'=> $apiKey
		];
		$url = $baseUrl . 'playlistItems?' . http_build_query($params);
		$json = json_decode(file_get_contents($url), true);

		$videos = [];
		foreach($json['items'] as $video)
			$videos[] = $video['snippet']['resourceId']['videoId'];

		while(isset($json['nextPageToken'])){
			$nextUrl = $url . '&pageToken=' . $json['nextPageToken'];
			$json = json_decode(file_get_contents($nextUrl), true);
			foreach($json['items'] as $video)
				$videos[] = $video['snippet']['resourceId']['videoId'];
		}
		//print_r($videos);
		foreach ($videos as $video_id) {
			echo get_youtube_title($video_id) . "\n";
		}
		?>
	</pre>
</body>
</html>
