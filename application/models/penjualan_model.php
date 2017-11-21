<?php
/**
 * 
 */
 class penjualan_model extends CI_Model
 {
 	public $nama_table = 'penjualan';
 	public $id = 'no_penjualan';
 	public $order = 'DESC';

 	function __construct()
 	{
 		parent::__construct();
		
 	}

 	function Select_penjualan()
 	{
 		$data['penjualan'] = $this->db->order_by($this->id, $this->order);
 		return $this->db->get($this->nama_table)->result();
 	}


 	function ambil_data_id($id)
 	{
 		$this->db->where($this->id,$id);
 		return $this->db->get($this->nama_table)->row();
 	}
 	//untuk mengambil data seluruh penjualan
 	function ambil_data()
 	{
 		$this->db->distinct();
 		$this->db->select('p.no_penjualan, peg.nama, bk.judul, bk.tema, bk.penulis, bk.harga, p.tgl_penjualan, p.total');
 		$this->db->from('penjualan p');
 		$this->db->join('buku bk', 'bk.id_buku = p.id_buku');
 		$this->db->join('pegawai peg', 'peg.id_pegawai = p.id_pegawai');
 		return $this->db->get($this->nama_table)->result();

 		$data['penjualan'] = $this->db->order_by($this->id, $this->order);
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