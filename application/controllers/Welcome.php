<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	public function __construct(){
		parent::__construct();
		$this->load->model('bpkd');
	}
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
	public function index()
	{
		$this->load->model('bpkd');
		$data['bpkd'] = $this->bpkd->bpkd();

		$this->load->view('welcome_message', $data);
	}

	public function detail($id)
	{
        $this->load->model('bpkd');
		$data['bpkd'] = $this->bpkd->bpkd();
		$data['get_bpkd'] = $this->bpkd->get_bpkd($id);

		$this->load->view('detail', $data);
	}


	public function ubah($id)
	{
        $this->load->model('bpkd');
		$data['bpkd'] = $this->bpkd->bpkd();
		$data['get_bpkd'] = $this->bpkd->get_bpkd($id);

		$this->load->view('ubah', $data);
	}

	public function submit()
	{
		$id = $this->input->post('id');
		$data = array(
			'JenisKendaraan'		=> $this->input->post('JenisKendaraan'),
			'MerkKendaraan'		=> $this->input->post('MerkKendaraan'),
			'TahunBuatan'		=> $this->input->post('TahunBuatan'),
			'NomorRangka'		=> $this->input->post('NomorRangka'),
		);

		$this->db->where('id', $id);
		$this->db->update('pkb', $data);
		redirect('welcome');
	}

	public function hapus($id) 
    {
        $this->db->delete('pkb', array('id' => $id));
		redirect('welcome');
    }
	
}
