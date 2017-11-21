<?php 
	/**
	* 
	*/
	class customer_login_model extends CI_Model
	{
		public $nama_table	='customer';
		public $nama_table2	='pengerjaan';
		public $nama_table3	='perbaikan';
		public $id			='username';
		public $id2			='pengerjaan.username';
		public $order		='DESC';

		function __construct()
		{
			parent::__construct();
		}
//Untuk login
		function cek_login_customer($username, $password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get($this->nama_table)->row();
		}

		function ambil_data($username)
		{
			$this->db->select("pengerjaan.id_pengerjaan, pengerjaan.username, perbaikan.nama_perbaikan, pengerjaan.merk, pengerjaan.tipe, pengerjaan.nopol, pengerjaan.tgl_masuk");
			$this->db->from($this->nama_table2);
			$this->db->join($this->nama_table3, 'perbaikan.id_perbaikan=pengerjaan.id_perbaikan');
			$this->db->where($this->id2,$username);
			return $this->db->get()->result();
		}
		}
?>