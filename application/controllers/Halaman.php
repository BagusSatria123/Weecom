<?php
class Halaman extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();

		$this->load->model('Karyawan_model');

	}

	public function tampil()
	{
		
		$data['dataKaryawan'] = $this->Karyawan_model->semua()
													->row();

		$this->load->view('tampilanSaya',$data);
	}

	public function aku_kamu($anak){

		$data['dataKaryawan'] = $this->Karyawan_model->semua()
													->row();

		$this->load->view('tampilanSaya',$data);
	}
}
