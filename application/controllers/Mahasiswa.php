<?php 
/**
* 
*/
class Mahasiswa extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
	}
	function index()
	{
		$data['mahasiswa'] = $this->Mahasiswa_model->ambil_data();
 		//$data['mahasiswa2'] = $this->Mahasiswa_model->ambil_data();
		$this->load->view('Mahasiswa/mahasiswa_list',$data);
	}

	function tambah()
	{
		$data = array(
			'nama' => set_value('nama'),
			'prodi' => set_value('prodi'),
			'daerah' => set_value('daerah'),
			'id' => set_value('id'),
			'button' => 'Tambah',
			'action' => site_url('mahasiswa/tambah_aksi')
			);
		$this->load->view('mahasiswa/mahasiswa_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'prodi' => $this->input->post('prodi'),
			'daerah' => $this->input->post('daerah'),
			);
		$this->Mahasiswa_model->tambah_data($data);
		redirect(site_url('mahasiswa'));
	}

	function delete($id)
	{
		$this->Mahasiswa_model->hapus_data($id);
		redirect(site_url('mahasiswa'));
	}
}
?>