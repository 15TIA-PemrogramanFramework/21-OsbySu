<?php
/**
 * 
 */
 class supplier_model extends CI_Model
 {
 	public $nama_table = 'supplier';
 	public $id = 'id_supplier';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
 			
 	}
 	function Select_Supplier()
 	{
 		$data['supplier'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 	//untuk mengambil data seluruh pegawai
 	
 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	function ambil_data($id)
 	{
 		$data['supplier'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}

 	function tambah_data($data)
 	{
 		return $this->db->insert($this->nama_table, $data);
 	}

	function hapus_data($id){

	$this->db->where($this->id,$id);
	$this->db->delete($this->nama_table);
	}

	function edit_data($id, $data){

	$this->db->where($this->id,$id);
	$this->db->update($this->nama_table,$data);
	}

	function cek_login($username, $password){
	$this->db->where('nama',$username);
	$this->db->where('prodi',$password);
	return $this->db->get($this->nama_table)->row();
	
	}
 	
 } 
 ?>