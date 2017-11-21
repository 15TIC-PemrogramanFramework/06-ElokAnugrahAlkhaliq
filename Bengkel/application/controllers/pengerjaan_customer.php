<?php 
	/**
	* 
	*/
	class pengerjaan_customer extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->model('customer_login_model');
			$this->load->model('pengerjaan_model');

			if(!$this->session->userdata('customer_logined') || $this->session->userdata('customer_logined') != true)
			{
			redirect('/');
			}
		}

		function index()
		{
			//print_r($this->mahasiswa_model->ambil_data());
			$username=$this->session->userdata('customer_username');
			$data['data_pengerjaan']=$this->customer_login_model->ambil_data($username);
			$this->load->view('pengerjaan_customer/pengerjaan_list',$data);
		}

		function lihat_riwayat($id)
		{
			$mhs=$this->pengerjaan_model->ambil_data_id($id);
			$data=array(
			'merk'	=> set_value('merk',$mhs->merk),
			'tipe'		=> set_value('tipe',$mhs->tipe),
			'nopol'		=> set_value('nopol',$mhs->nopol),
			'id_pengerjaan'	=> set_value('id_pengerjaan',$mhs->id_pengerjaan),
			'tgl_masuk'	=> set_value('tgl_masuk',$mhs->tgl_masuk),
			'usernamee'	=> set_value('username',$mhs->username),
			'id_perbaikann'	=> set_value('id_perbaikan',$mhs->id_perbaikan),
			'customer'	=> $this->pengerjaan_model->ambil_data_customer(),
			'perbaikan'	=> $this->pengerjaan_model->ambil_data_perbaikan(),
			'status_pengerjaan'	=> $this->pengerjaan_model->ambil_data_stat_pengerjaan($id),
			'action' 	=> site_url('pengerjaan/tambah_aksi_stat_pengerjaan'),
			'button'	=>'Tambah'
			);
			$this->load->view('pengerjaan_customer/pengerjaan_status',$data);
		}
	}
	?>