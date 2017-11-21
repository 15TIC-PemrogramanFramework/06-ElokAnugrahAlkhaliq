<?php 
	/**
	* 
	*/
	class perbaikan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->model('perbaikan_model');

			if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
			{
			redirect('/');
			}
		}

		function index()
		{
			//print_r($this->mahasiswa_model->ambil_data());
			$data['data_perbaikan']=$this->perbaikan_model->ambil_data();
			$this->load->view('perbaikan/perbaikan_list',$data);
		}

		public function tambah()
		{
			$data=array(
				'action' 				=> site_url('perbaikan/tambah_aksi'),
				'nama_perbaikan'		=> set_value('nama_perbaikan'),
				'deskripsi_perbaikan'	=> set_value('deskripsi_perbaikan'),
				'id_perbaikan'			=> set_value('id_perbaikan'),
				'button'				=>'Tambah'
				);

			$this->load->view('perbaikan/perbaikan_form',$data);
		}

		function tambah_aksi()
		{
			$data=array(
			'nama_perbaikan'		=> $this->input->post('nama_perbaikan'),
			'deskripsi_perbaikan'	=> $this->input->post('deskripsi_perbaikan')
			);
			$this->perbaikan_model->tambah_data($data);
			redirect(site_url('perbaikan'));
		}

		public function delete($id)
		{
			$this->perbaikan_model->hapus_data($id);
			redirect(site_url('perbaikan'));
		}

		function edit($id)
		{
			$mhs=$this->perbaikan_model->ambil_data_id($id);
			$data=array(
			'id_perbaikan'		=> set_value('id_perbaikan',$mhs->id_perbaikan),
			'nama_perbaikan'		=> set_value('nama_perbaikan',$mhs->nama_perbaikan),
			'deskripsi_perbaikan'	=> set_value('deskripsi_perbaikan',$mhs->deskripsi_perbaikan),
			'action' 	=> site_url('perbaikan/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('perbaikan/perbaikan_form',$data);
		}

		function edit_aksi()
		{
			$data=array(
			'nama_perbaikan'		=> $this->input->post('nama_perbaikan'),
			'deskripsi_perbaikan'		=> $this->input->post('deskripsi_perbaikan')
			);
			$id=$this->input->post('id');
			$this->perbaikan_model->edit_data($id,$data);
			redirect(site_url('perbaikan'));
		}
	}
	?>