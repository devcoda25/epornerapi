<?php

namespace EpornerApi\Model\Request\Video;

use EpornerApi\EpornerApi;

class GetCategoriesModel extends EpornerApi
{
    public function __construct()
    {
      
    }

    public function getCategories($query = 'teen',$per_page = 10, $page = 1, $thumbsize = 'medium', $order = 'top-weekly', $gay = 1, $lq = 1, $format = 'json')
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
        return $this->request('video/search/', $params);
    }
}
