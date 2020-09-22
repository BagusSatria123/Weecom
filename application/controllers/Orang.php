<?php
class Orang extends CI_Controller{
    public function __construct(){
		parent::__construct();
	$this->load->database();

		$this->load->model('Karyawan_model');

	}
    public function nyasar(){

        $data['heading'] = "ini adalah halaman 404";
        $data['message'] = "kamu kesasar";

        $this->load->view('errors/html/error_404',$data);
    }

    public function tes()
	{
		
		$data['dataKaryawan'] = $this->Karyawan_model->semua()
													->row();

		$this->load->view('tampilanSaya',$data);
	}
}
?>