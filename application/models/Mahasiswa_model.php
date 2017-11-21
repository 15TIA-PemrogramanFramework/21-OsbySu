<?php
/**
 * 
 */
 class Mahasiswa_model extends CI_Model
 {
 	public $nama_table = 'mahasiswa';
 	public $id = 'id';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	//untuk mengambil data seluruh mahasiswa
 	function ambil_data()
 	{
 		$data['mahasiswa'] = $this->db->order_by($this->id, $this->order);
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
 } 
 ?>