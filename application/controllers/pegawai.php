<?php 
/**
* 
*/
class pegawai extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pegawai_model');
		if($this->session->userdata('logged_in'))
		{
			}
		else
		{
			redirect('login', 'refresh');
		}
	}
	function index()
	{
		$data['pegawai'] = $this->pegawai_model->ambil_data();
 		//$data['pegawai2'] = $this->pegawai_model->ambil_data();
		$this->load->view('pegawai/pegawai_list',$data);
	}

	function tambah()
	{
		$data = array(
			'nama' => set_value('nama'),
			'username' => set_value('username'),
			'password' => set_value('password'),
			'status' => set_value('status'),
			'id_pegawai' => set_value('id_pegawai'),
			'button' => 'Tambah',
			'action' => site_url('pegawai/tambah_aksi')
			);
		$this->load->view('pegawai/pegawai_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			'status' => $this->input->post('status'),
			);
		$this->pegawai_model->tambah_data($data);
		redirect(site_url('pegawai'));
	}

	function delete($id)
	{
		$this->pegawai_model->hapus_data($id);
		redirect(site_url('pegawai'));
	}

	function edit($id)
	{
		$pegawai=($this->pegawai_model->ambil_data_id($id));
		$data = array(
			'nama' => set_value('nama',$pegawai->nama),
			'username' => set_value('username',$pegawai->username),
			'password' => set_value('password',$pegawai->password),
			'id_pegawai' => set_value('id_pegawai',$pegawai->id_pegawai),
			'button' => 'Edit',
			'action' => site_url('pegawai/edit_aksi')
			);
		$this->load->view('pegawai/pegawai_form', $data);
	}

	function edit_aksi()
	{
	
		$data = array(
			'nama' => $this->input->post('nama'),
			'username' => $this->input->post('username'),
			'password' => $this->input->post('password'),
			);
		$id_pegawai = $this->input->post('id');
		$this->pegawai_model->edit_data($id_pegawai,$data);
		redirect(site_url('pegawai'));
	}

}
?>