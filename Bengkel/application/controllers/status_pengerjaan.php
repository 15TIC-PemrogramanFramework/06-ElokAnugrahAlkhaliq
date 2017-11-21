<?php 
	/**
	* 
	*/
	class status_pengerjaan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->model('status_pengerjaan_model');

			if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
			{
			redirect('/');
			}
		}

		function index()
		{
			//print_r($this->mahasiswa_model->ambil_data());
			$data['data_status_pengerjaan']=$this->status_pengerjaan_model->ambil_data();
			$this->load->view('status_pengerjaan/status_pengerjaan_list',$data);
		}

		function tambah_aksi()
		{
			$data=array(
			'id_statpengerjaan'	=> $this->input->post('id'),
			'id_pengerjaan'	=> $this->input->post('id_pengerjaan'),
			'tgl_pengerjaan'	=> $this->input->post('tgl_pengerjaan'),
			'status'	=> $this->input->post('status')
			);
			$dataa=array(
			'tgl_masuk'	=>  $this->input->post('tgl_pengerjaan')
			);
			$id=$this->input->post('id_pengerjaan');
			$this->status_pengerjaan_model->tgl_masuk($id,$dataa);
			$this->status_pengerjaan_model->tambah_data($data);
			redirect(site_url('pengerjaan'));
		}

		public function delete($id)
		{
			$this->status_pengerjaan_model->hapus_data($id);
			redirect(site_url('status_pengerjaan'));
		}

		function edit($id)
		{
			$mhs=$this->status_pengerjaan_model->ambil_data_id($id);
			$data=array(
			'merk'	=> set_value('merk',$mhs->merk),
			'tipe'		=> set_value('tipe',$mhs->tipe),
			'nopol'		=> set_value('nopol',$mhs->nopol),
			'id_status_pengerjaan'	=> set_value('id_status_pengerjaan',$mhs->id_pengerjaan),
			'usernamee'	=> set_value('username',$mhs->username),
			'id_perbaikann'	=> set_value('id_perbaikan',$mhs->id_perbaikan),
			'customer'	=> $this->status_pengerjaan_model->ambil_data_customer(),
			'perbaikan'	=> $this->status_pengerjaan_model->ambil_data_perbaikan(),
			'action' 	=> site_url('status_pengerjaan/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('status_pengerjaan/status_pengerjaan_form',$data);
		}

		function edit_aksi()
		{
			$data=array(
			'tgl_status_pengerjaan'	=> $this->input->post('tgl_status_pengerjaan'),
			'status_status_pengerjaan'	=> $this->input->post('status_status_pengerjaan'),
			'merk'	=> $this->input->post('merk'),
			'tipe'	=> $this->input->post('tipe'),
			'nopol'	=> $this->input->post('nopol'),
			'id_perbaikan'	=> $this->input->post('id_perbaikan'),
			'username'		=> $this->input->post('username')
			);
			$id=$this->input->post('id');
			$this->status_pengerjaan_model->edit_data($id,$data);
			redirect(site_url('status_pengerjaan'));
		}
	}
	?>