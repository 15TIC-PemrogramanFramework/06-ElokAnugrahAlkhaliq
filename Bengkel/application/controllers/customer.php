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

			if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
			{
			redirect('/');
			}
		}

		function index()
		{
			//print_r($this->mahasiswa_model->ambil_data());
			$data['data_customer']=$this->customer_model->ambil_data();
			$this->load->view('customer/customer_list',$data);
		}

		public function tambah()
		{
			$data=array(
				'action' 	=> site_url('customer/tambah_aksi'),
				'nama'		=> set_value('nama'),
				'alamat'	=> set_value('alamat'),
				'tgl_lahir'	=> set_value('tgl_lahir'),
				'no_hp'		=> set_value('no_hp'),
				'username'	=> set_value('username'),
				'button'	=>'Tambah'
				);

			$this->load->view('customer/customer_form',$data);
		}

		function tambah_aksi()
		{
			$data=array(
			'username'	=> $this->input->post('username'),
			'nama'		=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
			'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			'no_hp'	=> $this->input->post('no_hp')
			);
			$this->customer_model->tambah_data($data);
			redirect(site_url('customer'));
		}

		public function delete($id)
		{
			$this->customer_model->hapus_data($id);
			redirect(site_url('customer'));
		}

		function edit($id)
		{
			$mhs=$this->customer_model->ambil_data_id($id);
			$data=array(
			'username'	=> set_value('username',$mhs->username),
			'nama'		=> set_value('nama',$mhs->nama),
			'alamat'	=> set_value('alamat',$mhs->alamat),
			'tgl_lahir'	=> set_value('tgl_lahir',$mhs->tgl_lahir),
			'no_hp'		=> set_value('no_hp',$mhs->no_hp),
			'action' 	=> site_url('customer/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('customer/customer_form',$data);
		}

		function edit_aksi()
		{
			$data=array(
			'nama'		=> $this->input->post('nama'),
			'alamat'	=> $this->input->post('alamat'),
			'tgl_lahir'	=> $this->input->post('tgl_lahir'),
			'no_hp'		=> $this->input->post('no_hp')
			);
			$id=$this->input->post('username');
			$this->customer_model->edit_data($id,$data);
			redirect(site_url('customer'));
		}
	}
	?>