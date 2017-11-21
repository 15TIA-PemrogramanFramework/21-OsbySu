<?php
/**
 * 
 */
 class pegawai_model extends CI_Model
 {
 	public $nama_table = 'pegawai';
 	public $id = 'id_pegawai';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
 	}

 	function Select_Pegawai()
 	{
 		$data['pegawai'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}


 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}

 	//untuk mengambil data seluruh pegawai
 	function ambil_data()
 	{
 		$data['pegawai'] = $this->db->order_by($this->id, $this->order);
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
 	 	function edit_data($id_pegawai,$data)
 	{
 		$this->db->where($this->id, $id_pegawai);
 		$this->db->update($this->nama_table,$data);
 	}

 } 
 ?>