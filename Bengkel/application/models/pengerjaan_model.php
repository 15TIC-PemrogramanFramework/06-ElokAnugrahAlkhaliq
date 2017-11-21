<?php 
	/**
	* 
	*/
	class pengerjaan_model extends CI_Model
	{
		public $nama_table	='pengerjaan';
		public $nama_table2	='perbaikan';
		public $nama_table3	='customer';
		public $nama_table4	='stat_pengerjaan';
		public $nama_table5	='admin';
		public $id			='id_pengerjaan';
		public $id2			='username';
		public $id3			='id_perbaikan';
		public $id4			='pengerjaan.id_pengerjaan';
		public $id5			='id_statpengerjaan';
		public $order		='DESC';

		function __construct()
		{
			parent::__construct();
		}
		
		//untuk mengambil seluruh data
		function ambil_data()
		{
			$this->db->select("pengerjaan.id_pengerjaan, pengerjaan.username, perbaikan.nama_perbaikan, pengerjaan.merk, pengerjaan.tipe, pengerjaan.nopol, pengerjaan.tgl_masuk");
			$this->db->from($this->nama_table);
			$this->db->join($this->nama_table2, 'perbaikan.id_perbaikan=pengerjaan.id_perbaikan');
			$this->db->order_by("pengerjaan.tgl_masuk",$this->order);
			return $this->db->get()->result();
		}

		function ambil_data_customer()
		{
			$this->db->order_by($this->id2,$this->order);
			return $this->db->get($this->nama_table3)->result();
		}

		function ambil_data_perbaikan()
		{
			$this->db->order_by($this->id3,$this->order);
			return $this->db->get($this->nama_table2)->result();
		}

		function ambil_data_perbaikan_2015()
		{
			$this->db->like('tgl_masuk','2015-');
			return $this->db->get($this->nama_table)->num_rows();
		}

		function ambil_data_perbaikan_2016()
		{
			$this->db->like('tgl_masuk','2016-');
			return $this->db->get($this->nama_table)->num_rows();
		}

		function ambil_data_perbaikan_2017()
		{
			$this->db->like('tgl_masuk','2017-');
			return $this->db->get($this->nama_table)->num_rows();
		}

		function ambil_data_stat_pengerjaan($id)
		{
			$this->db->select("pengerjaan.id_pengerjaan,stat_pengerjaan.id_statpengerjaan, stat_pengerjaan.tgl_pengerjaan, stat_pengerjaan.status");
			$this->db->from($this->nama_table);
			$this->db->join($this->nama_table4, 'pengerjaan.id_pengerjaan=stat_pengerjaan.id_pengerjaan');
			$this->db->order_by("stat_pengerjaan.tgl_pengerjaan",$this->order);
			$this->db->where($this->id4,$id);
			return $this->db->get()->result();
		}

		//untuk mengambil data per id seluruh mahasiwa
		function ambil_data_id($id)
		{
			$this->db->where($this->id,$id);
			return $this->db->get($this->nama_table)->row();
		}

		//Untuk menambahkan data ke table mahasiswa
		function tambah_data($data)
		{
			return $this->db->insert($this->nama_table,$data);
		}

		function tambah_data_stat_pengerjaan($data)
		{
			return $this->db->insert($this->nama_table4,$data);
		}

		//Untuk menghapus data dari table mahasiswa
		function hapus_data($id)
		{
			$this->db->where($this->id,$id);
			$this->db->delete($this->nama_table);
		}

		function hapus_data_status($id)
		{
			$this->db->where($this->id5,$id);
			$this->db->delete($this->nama_table4);
		}

		//Untuk mengedit data table mahasiswa
		function edit_data($id,$data)
		{
			$this->db->where($this->id,$id);
			$this->db->update($this->nama_table,$data);
		}

		//Untuk login
		function cek_login($username, $password)
		{
			$this->db->where('username',$username);
			$this->db->where('password',$password);
			return $this->db->get($this->nama_table5)->row();
		}
	}
	?>