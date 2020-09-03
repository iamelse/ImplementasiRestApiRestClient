<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Corona extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->model('M_Corona');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $readApi = file_get_contents('https://api.kawalcorona.com/indonesia/');
        $data['indonesia'] = json_decode($readApi, true);

        $readApi = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi/');
        $data['provinsi'] = json_decode($readApi, true);

        $data['judul'] = 'Kawal Corona';

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('Kawal_corona/index', $data);
        $this->load->view('templates/footer');
    }
}
