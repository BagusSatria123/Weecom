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

        $this->load->view('template/dashboard/body', $data);
    }

    public function read()
    {
        $data['title'] = "Karyawan - read";

        $this->load->view('template/dashboard/body', $data);
    }
}
