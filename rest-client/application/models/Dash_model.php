<?php
defined('BASEPATH') or exit('No direct script access allowed');

use GuzzleHttp\Client;

class Dash_model extends CI_Model
{

    private $_client;

    public function __construct()
    {
        parent::__construct();

        $this->app_key = 'admin';

        $this->_client = new Client([
            'base_uri' => 'http://localhost/Rest/api/',
            'verify'   => false,
        ]);
    }

    public function getAllMhs()
    {
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'app-key' => 'key123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function getMhsById($id)
    {
        $response = $this->_client->request('GET', 'mahasiswa', [
            'query' => [
                'app-key' => 'key123',
                'id'      =>  $id
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function tambahData()
    {
        $data = [
            "nim"       => $this->input->post('nim', true),
            "nama"      => $this->input->post('nama', true),
            "telepon"   => $this->input->post('telepon', true),
            "alamat"    => $this->input->post('alamat', true),
            'app-key'   => 'key123'
        ];
        $response = $this->_client->request('POST', 'mahasiswa', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function editDataMhs($id)
    {
        $data = [
            "nim"       => $this->input->post('nim', true),
            "nama"      => $this->input->post('nama', true),
            "telepon"   => $this->input->post('telepon', true),
            "alamat"    => $this->input->post('alamat', true),
            "id"        => $this->input->post('id', true),
            'app-key'   => 'key123'
        ];
        $response = $this->_client->request('PUT', 'mahasiswa', [
            'form_params' => $data
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function hapusDataObat($id)
    {
        $response = $this->_client->request('DELETE', 'mahasiswa', [
            'form_params' => [
                'id'      =>  $id,
                'app-key' => 'key123'
            ]
        ]);

        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }
}
