<?php

namespace EpornerApi\Model\Request\Video;

use EpornerApi\EpornerApi;

class GetByIdRequestModel extends EpornerApi
{
    public function __construct()
    {
       
    }

    public function getById($id, $thumbsize = 'medium', $format = 'json')
    {
        $params = [
            'id' => $id,
            'thumbsize' => $thumbsize,
            'format' => $format
        ];

        return $this->request('video/id/', $params);
    }
}
