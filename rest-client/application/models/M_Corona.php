<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class M_Corona extends CI_Model
{

    private $_client;

    public function __construct()
    {
        parent::__construct();

        $this->app_key = 'admin';

        $this->_client = new Client([
            'base_uri' => 'https://api.kawalcorona.com/'
        ]);
    }

    public function getData()
    {
        $response = $this->_client->request('GET', 'indonesia');

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
        print_r($result);
    }
}
