<?php
class Karyawan extends CI_Controller
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
        $data['title'] = "Karyawan";

        $this->load->view('template/dashboard/header', $data);
        $this->load->view('template/dashboard/body', $data);
        $this->load->view('template/dashboard/footer', $data);
    }
}
