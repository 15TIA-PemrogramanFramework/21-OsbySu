<?php
/**
 * 
 */
 class buku_model extends CI_Model
 {
 	public $nama_table = 'buku';
 	public $id = 'id_buku';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
		
 	}

 	function Select_Buku()
 	{
 		$data['buku'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}


 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}
 	//untuk mengambil data seluruh buku
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('bk.id_buku, s.nama_supplier, bk.judul, bk.tema, bk.penulis, bk.harga');
 		$this->db->from('buku bk');
 		$this->db->join('supplier s', 's.id_supplier = bk.id_supplier');
 		return $this->db->get($this->nama_table)->result();

 		$data['buku'] = $this->db->order_by($this->id, $this->order);
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