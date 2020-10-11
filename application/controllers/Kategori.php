<?php
class Kategori extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();

        // $this->load->database();

        // $this->load->model('Karyawan_model');
        // $this->load->helper('url');

    }

    public function index()
    {
        $data['title'] = "Kategori";
        $data['kontenDinamis'] = "pages/kategori/list";

        $this->load->view('template/dashboard/body', $data);

        // $this->load->view('template/dashboard/header2', $data);
        // $this->load->view('pages/kategori/list', $data);
        // $this->load->view('template/dashboard/footer2', $data);
    }

    public function create()
    {
        $data['title'] = "Kategori";
        $data['kontenDinamis'] = "pages/kategori/form";
        $this->load->view('template/dashboard/body', $data);

        // $this->load->view('template/dashboard/header2', $data);
        // $this->load->view('pages/kategori/form', $data);
        // $this->load->view('template/dashboard/footer2', $data);
    }
}
