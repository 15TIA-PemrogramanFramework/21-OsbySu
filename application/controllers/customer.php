<?php 
/**
* 
*/
class customer extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('customer_model');
	}
	function index()
	{
		$data['customer'] = $this->customer_model->ambil_data();
 		//$data['customer2'] = $this->customer_model->ambil_data();
		$this->load->view('customer/customer_list',$data);
	}

	function tambah()
	{
		$data = array(
			'nama' => set_value('nama'),
			'jk' => set_value('jk'),
			'no_telp' => set_value('no_telp'),
			'id_customer' => set_value('id_customer'),
			'button' => 'Tambah',
			'action' => site_url('customer/tambah_aksi')
			);
		$this->load->view('customer/customer_form', $data);
	}

	function tambah_aksi()
	{
		$data = array(
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			);
		$this->customer_model->tambah_data($data);
		redirect(site_url('customer'));
	}

	function delete($id)
	{
		$this->customer_model->hapus_data($id);
		redirect(site_url('customer'));
	}

	function edit($id)
	{
		$customer=($this->customer_model->ambil_data_id($id));
		$data = array(
			'nama' => set_value('nama',$customer->nama),
			'jk' => set_value('jk',$customer->jk),
			'no_telp' => set_value('no_telp',$customer->no_telp),
			'id_customer' => set_value('id_customer',$customer->id_customer),
			'button' => 'Edit',
			'action' => site_url('customer/edit_aksi')
			);
		$this->load->view('customer/customer_form', $data);
	}

	function edit_aksi()
	{
	
		$data = array(
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'no_telp' => $this->input->post('no_telp'),
			);
		$id_customer = $this->input->post('id');
		$this->customer_model->edit_data($id_customer,$data);
		redirect(site_url('customer'));
	}

}
?>