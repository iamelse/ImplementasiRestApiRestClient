<?php

use Restserver\Libraries\REST_Controller;

defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . '/libraries/REST_Controller.php';
require APPPATH . '/libraries/Format.php';

class Mahasiswa extends REST_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_mahasiswa', 'mhs');
    }

    public function index_get()
    {
        $id = $this->get('id');
        if ($id === NULL) {
            $mahasiswa = $this->mhs->getMhs();
        } else {
            $mahasiswa = $this->mhs->getMhs($id);
        }

        if ($mahasiswa) {
            $this->response([
                'status' => TRUE,
                'data'   => $mahasiswa
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'  => FALSE,
                'message' => 'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === NULL) {
            $this->response([
                'status'  => FALSE,
                'message' => 'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->mhs->deleteMhs($id) > 0) {
                $this->response([
                    'status'  => TRUE,
                    'id'     => $id,
                    'message' => 'deleted'
                ], REST_Controller::HTTP_OK);
            } else {
                $this->response([
                    'status'  => FALSE,
                    'message' => 'id not found'
                ], REST_Controller::HTTP_NOT_FOUND);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nim'     => $this->post('nim'),
            'nama'    => $this->post('nama'),
            'telepon' => $this->post('telepon'),
            'alamat'  => $this->post('alamat')
        ];

        if ($this->mhs->addMhs($data) > 0) {
            $this->response([
                'status'  => TRUE,
                'message' => 'new data success added.'
            ], REST_Controller::HTTP_CREATED);
        } else {
            $this->response([
                'status'  => FALSE,
                'message' => 'add data failed'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'nim'     => $this->put('nim'),
            'nama'    => $this->put('nama'),
            'telepon' => $this->put('telepon'),
            'alamat'  => $this->put('alamat')
        ];

        if ($this->mhs->updateMhs($data, $id) > 0) {
            $this->response([
                'status'  => TRUE,
                'message' => 'new data success updated.'
            ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status'  => FALSE,
                'message' => 'update data failed'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
