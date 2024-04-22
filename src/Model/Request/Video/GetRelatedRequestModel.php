<?php

namespace EpornerApi\Model\Request\Video;

use EpornerApi\EpornerApi;

class GetRelatedRequestModel extends EpornerApi
{
    public function __construct()
    {
      
    }

    public function getRelated($videoId, $params = [])
    {
        // Assuming the related videos endpoint is 'video/related'
        // and it accepts the video ID as a parameter.
        // Adjust the endpoint and parameters as per the actual API documentation.
        $params['id'] = $videoId;
        return $this->request('video/related', $params);
    }
}
