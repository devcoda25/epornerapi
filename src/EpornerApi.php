<?php

namespace EpornerApi;

class EpornerApi
{
    protected $baseUrl = 'https://www.eporner.com/api/v2/';

    protected function request($endpoint, $params = [])
    {
        $url = $this->baseUrl . $endpoint . '?' . http_build_query($params);
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirection
        $response = curl_exec($ch);
        curl_close($ch);
    
        return json_decode($response);
    }
    
    


    public function search($query, $params = [])
    {
        $params['query'] = $query;
        return $this->request('video/search', $params);
    }

    public function getVideoById($id, $params = [])
    {
        $params['id'] = $id;
        return $this->request('video/id', $params);
    }

    public function getRemovedVideos($params = [])
    {
        return $this->request('video/removed', $params);
    }
}
