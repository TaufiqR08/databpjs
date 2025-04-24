<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaksi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->ion_auth->logged_in()) {
			redirect('login');
		} 
		$this->load->library(['datatables', 'form_validation']); // Load Library Ignited-Datatables
		$this->load->model('Master_model', 'master');
		$this->form_validation->set_error_delimiters('', '');
		
	}

	public function output_json($data, $encode = true)
	{
		if ($encode) $data = json_encode($data);
		$this->output->set_content_type('application/json')->set_output($data);
	}

	public function index()
	{
		$data = [
			'user' => $this->ion_auth->user()->row(),
			'judul'	=> 'Data Transaksi Samsat ',
            'subjudul' => 'Samsat Siondel',
            'm_transaksi' => true,
            
		];
		$this->load->view('_templates/dashboard_admin/_header.php', $data);
		$this->load->view('operator/transaksi/list');
		$this->load->view('_templates/dashboard_admin/_footer.php');
	}

	
	
	public function data()
	{
		$this->output_json($this->master->getListTransaksi(), false);
	}

	

	
}
