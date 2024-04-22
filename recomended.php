<?php

require 'vendor/autoload.php';
use EpornerApi\Model\Request\Video\GetRecommendedRequestModel;

$getRecommendedModel = new GetRecommendedRequestModel();
$recommendedVideos = $getRecommendedModel->getRecommended('all', 30, 1, 'medium', 'latest', 0, 1, 'json');

if ($recommendedVideos) {
    foreach ($recommendedVideos->videos as $video) {
        echo 'Video ID: ' . $video->id . PHP_EOL;
        echo 'Video title: ' . $video->title . PHP_EOL;
        echo 'Video views: ' . $video->views . PHP_EOL;
        echo 'Video rate: ' . $video->rate . PHP_EOL;
        echo 'Video url: ' . $video->url . PHP_EOL;
        echo 'Video added: ' . $video->added . PHP_EOL;
        echo 'Video length_sec: ' . $video->length_sec . PHP_EOL;
        echo 'Video length_min: ' . $video->length_min . PHP_EOL;
        echo 'Video embed: ' . $video->embed . PHP_EOL;
        echo 'Video default_thumb src: ' . $video->default_thumb->src . PHP_EOL;
        echo PHP_EOL;
    }
} else {
    echo "No recommended videos found.";
}
