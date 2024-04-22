<?php

namespace EpornerApi\Model\Request\Video;

use EpornerApi\EpornerApi;

class GetAllRequestModel extends EpornerApi
{
    public function __construct()
    {
       
    }

    public function getAll($query = 'all', $per_page = 30, $page = 1, $thumbsize = 'medium', $order = 'latest', $gay = 0, $lq = 1, $format = 'json')
    {
        $params = [
            'query' => $query,
            'per_page' => $per_page,
            'page' => $page,
            'thumbsize' => $thumbsize,
            'order' => $order,
            'gay' => $gay,
            'lq' => $lq,
            'format' => $format
        ];

        return $this->request('video/search', $params);
    }
}
