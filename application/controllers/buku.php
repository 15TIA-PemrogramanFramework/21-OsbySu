<?php 
/**
* 
*/
class buku extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('buku_model');
 		$this->load->model('supplier_model');
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
			$session_data = $this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['buku'] = $this->buku_model->ambil_data();
			$this->load->view('buku/buku_list', $data);
			
 	}

	function tambah()
	{
		$data = array(
			'judul' => set_value('judul'),
			'tema' => set_value('tema'),
			'harga' => set_value('harga'),
			'penulis' => set_value('penulis'),
			'id_buku' => set_value('id_buku'),
			'supplier' => $this->supplier_model->Select_Supplier(),
			'button' => 'Tambah',
			'action' => site_url('buku/tambah_aksi')
			);	
		$this->load->view('buku/buku_form', $data);
	}

	function tambah_aksi()
	{

		$data = array(
			'judul' => $this->input->post('judul'),
			'tema' => $this->input->post('tema'),
			'harga' => $this->input->post('harga'),
			'penulis' => $this->input->post('penulis'),
			'id_supplier' => $this->input->post('id_supplier')
			);
		$this->buku_model->tambah_data($data);
		redirect(site_url('buku'));
	}

	function delete($id)
	{
		$this->buku_model->hapus_data($id);
		redirect(site_url('buku'));
	}


	function edit($id)
	{
		$buku=($this->buku_model->ambil_data_id($id));
		$data = array(
			'judul' => set_value('judul',$buku->judul),
			'tema' => set_value('tema',$buku->tema),
			'harga' => set_value('harga',$buku->harga),
			'penulis' => set_value('penulis',$buku->penulis),
			'id_buku' => set_value('id_buku',$buku->id_buku),
			'supplier' => $this->supplier_model->Select_Supplier(),
			'button' => 'Edit',
			'action' => site_url('buku/edit_aksi')
			);
		$this->load->view('buku/buku_form', $data);
	}

	function edit_aksi()
	{
	
		$data = array(
			'judul' => $this->input->post('judul'),
			'tema' => $this->input->post('tema'),
			'harga' => $this->input->post('harga'),
			'penulis' => $this->input->post('penulis'),
			'id_supplier' => $this->input->post('id_supplier')
			);
		$id_buku = $this->input->post('id_buku');
		$this->buku_model->edit_data($id_buku,$data);
		redirect(site_url('buku'));
	}

}
?>