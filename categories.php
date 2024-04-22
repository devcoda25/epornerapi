<!DOCTYPE html>
<html>
<head>
    <title>Video Categories</title>
    <style>
        .category-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .category-item {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            width: 200px;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="category-container">
        <?php
        require 'vendor/autoload.php';
        use EpornerApi\Model\Request\Video\GetCategoriesModel;

        $getCategoriesModel = new GetCategoriesModel();
        $categories = $getCategoriesModel->getCategories($query = 'categories', $per_page = 30, $page = 1, $thumbsize = 'medium', $order = 'latest', $gay = 0, $lq = 1, $format = 'json');

        if ($categories) {
            foreach ($categories->videos as $video) {
                echo '<div class="category-item">';
                echo 'Category ID: ' . $video->id . '<br>';
                echo 'Category Name: ' . $video->title . '<br>';
                if (isset($video->default_thumb->src)) {
                    echo '<img src="' . $video->default_thumb->src . '" alt="Category Thumbnail">';
                }
                
                
                echo '</div>';
            }
        } else {
            echo "<div class='category-item'>No categories found.</div>";
        }
        ?>
    </div>
</body>
</html>
