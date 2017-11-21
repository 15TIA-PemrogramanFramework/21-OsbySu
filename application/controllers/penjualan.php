<?php 
/**
* 
*/
class penjualan extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('penjualan_model');
 		$this->load->model('pegawai_model');
 		$this->load->model('customer_model');
		$this->load->model('buku_model');
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
		$data['penjualan'] = $this->penjualan_model->ambil_data();
 		//$data['penjualan2'] = $this->penjualan_model->ambil_data();
		$this->load->view('penjualan/penjualan_list',$data);
	}

	function tambah()
	{
		$data = array(
			'id_buku' => set_value('id_buku'),
			'id_pegawai' => set_value('id_pegawai'),
			'tgl_penjualan' => set_value('tgl_penjualan'),
			'total' => set_value('total'),
			'no_penjualan' => set_value('no_penjualan'),
			'pegawai' => $this->pegawai_model->Select_Pegawai(),
			'customer' => $this->customer_model->Select_Customer(),
			'buku' => $this->buku_model->Select_Buku(),
			'button' => 'Tambah',
			'action' => site_url('penjualan/tambah_aksi')
			);	
		$this->load->view('penjualan/penjualan_form', $data);
	}

	function tambah_aksi()
	{

		$data = array(
			'id_buku' => $this->input->post('id_buku'),
			'id_pegawai' => $this->input->post('id_pegawai'),			
			'no_penjualan' => $this->input->post('no_penjualan'),
			'tgl_penjualan'  => $this->input->post('tgl_penjualan'),
			'total'  => $this->input->post('total'),
			);
		$this->penjualan_model->tambah_data($data);
		redirect(site_url('penjualan'));
	}

	function delete($id)
	{
		$this->penjualan_model->hapus_data($id);
		redirect(site_url('penjualan'));
	}
}
?>