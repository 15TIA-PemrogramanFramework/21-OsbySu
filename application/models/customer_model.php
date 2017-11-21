<?php
/**
 * 
 */
 class customer_model extends CI_Model
 {
 	public $nama_table = 'customer';
 	public $id = 'id_customer';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Customer()
 	{
 		$data['customer'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}


 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	//untuk mengambil data seluruh customer
 	function ambil_data()
 	{
 		$data['customer'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

 	function hapus_data($id)
 	{
 		$this->db->where($this->id, $id);
 		$this->db->delete($this->nama_table);
 	}
 	 	function edit_data($id_customer,$data)
 	{
 		$this->db->where($this->id, $id_customer);
 		$this->db->update($this->nama_table,$data);
 	}

 } 
 ?>