<?php


require 'vendor/autoload.php';
use EpornerApi\Model\Request\Video\GetByIdRequestModel;

$getByIdModel = new GetByIdRequestModel();
$videoId = 'IsabYDAiqXa'; // Example video ID
$videoDetails = $getByIdModel->getById($videoId, 'medium', 'json');

if ($videoDetails) {
    echo 'Video ID: ' . $videoDetails->id . PHP_EOL;
    echo 'Video title: ' . $videoDetails->title . PHP_EOL;
    echo 'Video views: ' . $videoDetails->views . PHP_EOL;
    echo 'Video rate: ' . $videoDetails->rate . PHP_EOL;
    echo 'Video url: ' . $videoDetails->url . PHP_EOL;
    echo 'Video added: ' . $videoDetails->added . PHP_EOL;
    echo 'Video length_sec: ' . $videoDetails->length_sec . PHP_EOL;
    echo 'Video length_min: ' . $videoDetails->length_min . PHP_EOL;
    echo 'Video embed: ' . $videoDetails->embed . PHP_EOL;
    echo 'Video default_thumb src: ' . $videoDetails->default_thumb->src . PHP_EOL;
} else {
    echo "No video found with the given ID.";
}
