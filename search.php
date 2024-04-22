<?php

require 'vendor/autoload.php';
use EpornerApi\Model\Request\Video\SearchRequestModel;

$searchModel = new SearchRequestModel();
$searchResults = $searchModel->search($query = 'gay', $per_page = 30, $page = 1, $thumbsize = 'medium', $order = 'latest', $gay = 0, $lq = 1, $format = 'json');

if ($searchResults) {
    foreach ($searchResults->videos as $video) {
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
    echo "No search results found.";
}
