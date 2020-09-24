<?php
class Halaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
		// $this->load->database();

		// $this->load->model('Karyawan_model');
		// $this->load->helper('url');

	}

	public function tampil()
	{
		$data['title'] = "Ini title yang dinamis";
		$data['dataKaryawan'] = $this->Karyawan_model->semua()
													->row();
		$this->load->view('template/header',$data);
		$this->load->view('tampilanSaya',$data);
		$this->load->view('template/footer',$data);
	}

	public function aku_kamu($anak = ""){

		$data['title'] = "Ini halaman aku kamu";
		$data['namaOrang'] = "Haidar";
		$this->load->view('template/header',$data);
		$this->load->view('tes',$data);
		$this->load->view('template/footer',$data);

	}
}
