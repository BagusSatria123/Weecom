<?php
class Dashboard extends CI_Controller
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
        $data['title'] = "Dashboard";

        $this->load->view('template/header', $data);
        $this->load->view('pages/dashboard', $data);
        $this->load->view('template/footer', $data);
    }
}
