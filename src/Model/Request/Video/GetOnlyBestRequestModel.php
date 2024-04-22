<?php

namespace EpornerApi\Model\Request\Video;

use EpornerApi\EpornerApi;

class GetOnlyBestRequestModel extends EpornerApi
{
    public function __construct()
    {
     
    }

    public function getOnlyBest($params = [])
    {
        // Set default parameters for fetching the best videos
        $params['query'] = 'all';
        $params['per_page'] = 1000; // Maximum allowed per page
        $params['order'] = 'most-popular'; // Order by most popular
        $params['thumbsize'] = 'big'; // Large thumbnails

        return $this->request('video/search', $params);
    }
}
