<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_mhs extends CI_Controller
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

        $this->load->model('Dash_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['judul'] = 'Daftar Mahasiswa';
        $data['mahasiswa'] = $this->Dash_model->getAllMhs();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('Daftar_mhs/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['judul'] = 'Tambah';
        $data['mahasiswa'] = $this->Dash_model->getAllMhs();

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('Daftar_mhs/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dash_model->tambahData();
            $this->session->set_flashdata('pesan', 'Ditambahkan');
            redirect('Daftar_mhs/index');
        }
    }

    public function editData($id)
    {
        $data['judul'] = 'Edit Data';
        $data['mhsw'] = $this->Dash_model->getMhsById($id);

        $this->form_validation->set_rules('nim', 'NIM', 'required');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('telepon', 'Telepon', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');

        if ($this->form_validation->run() == FALSE) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar');
            $this->load->view('templates/topbar');
            $this->load->view('Daftar_mhs/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $this->Dash_model->editDataMhs($id);
            $this->session->set_flashdata('pesan', 'Diubah');
            redirect('Daftar_mhs/index');
        }
    }

    public function hapusData($id_obat)
    {
        $this->Dash_model->hapusDataObat($id_obat);
        $this->session->set_flashdata('pesan', 'Dihapus');
        redirect('Daftar_mhs');
    }
}
