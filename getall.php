<!DOCTYPE html>
<html>
<head>
    <title>All Videos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .video-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            margin-top: 20px;
        }
        .video-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 300px;
            text-align: center;
        }
        .video-item img {
            width: 100%;
            height: auto;
        }
        .video-item h3 {
            margin: 0;
            padding: 0;
        }
        .video-item p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="video-container">
        <?php
        require 'vendor/autoload.php';
        use EpornerApi\Model\Request\Video\GetAllRequestModel;

        $getAllModel = new GetAllRequestModel();
        $allVideos = $getAllModel->getAll('all', 30, 1, 'medium', 'latest', 0, 1, 'json');

        if ($allVideos) {
            foreach ($allVideos->videos as $video) {
                echo '<div class="video-item">';
                echo '<img src="' . $video->default_thumb->src . '" alt="Video Thumbnail">';
                echo '<h3>' . $video->title . '</h3>';
                echo '<p>Views: ' . $video->views . '</p>';
                echo '<p>Rate: ' . $video->rate . '</p>';
                echo '<p>Added: ' . $video->added . '</p>';
                echo '<p>Length: ' . $video->length_min . ' minutes</p>';
                echo '<a href="' . $video->url . '>Watch Video</a>';
                echo '</div>';
            }
        } else {
            echo "<div class='video-item'>No videos found.</div>";
        }
        ?>
    </div>
</body>
</html>
