<?php 
	/**
	* 
	*/
	class pengerjaan extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();

			$this->load->model('pengerjaan_model');

			if(!$this->session->userdata('logined') || $this->session->userdata('logined') != true)
			{
			redirect('/');
			}
		}

		function index()
		{
			//print_r($this->mahasiswa_model->ambil_data());
			$data['data_pengerjaan']=$this->pengerjaan_model->ambil_data();
			$this->load->view('pengerjaan/pengerjaan_list',$data);
		}

		public function tambah()
		{
			
			$data=array(
				'action' 	=> site_url('pengerjaan/tambah_aksi'),
				'merk'	=> set_value('merk'),
				'tipe'		=> set_value('tipe'),
				'nopol'		=> set_value('nopol'),
				'id_pengerjaan'	=> set_value('id_pengerjaan'),
				'id_perbaikan'	=> set_value('id_perbaikan'),
				'id_perbaikann'	=> set_value('id_perbaikan'),
				'username'	=> set_value('username'),
				'usernamee'	=> set_value('username'),
				'customer'	=> $this->pengerjaan_model->ambil_data_customer(),
				'perbaikan'	=> $this->pengerjaan_model->ambil_data_perbaikan(),
				'button'	=>'Tambah',
				);

			$this->load->view('pengerjaan/pengerjaan_form',$data);
		}

		function tambah_aksi()
		{
			$data=array(
			'id_pengerjaan'	=> $this->input->post('id_pengerjaan'),
			'merk'	=> $this->input->post('merk'),
			'tipe'	=> $this->input->post('tipe'),
			'nopol'	=> $this->input->post('nopol'),
			'id_perbaikan'	=> $this->input->post('id_perbaikan'),
			'username'		=> $this->input->post('username')
			);
			$dataa=array(
			'action' 	=> site_url('status_pengerjaan/tambah_aksi'),
			'tgl_pengerjaan'	=> set_value('tgl_pengerjaan'),	
			'status'	=> set_value('status'),	
			'id_pengerjaann'	=> set_value('id_pengerjaan'),
			'button'	=>'Tambah'
			);
			$this->pengerjaan_model->tambah_data($data);
			$this->load->view('status_pengerjaan/status_pengerjaan_form',$dataa);
			//redirect(site_url('status_pengerjaan_form'));
		}

		function tambah_aksi_stat_pengerjaan()
		{
			$id_pengerjaan = set_value('id_pengerjaan');
			$data=array(
			'id_pengerjaan'	=> $this->input->post('id_pengerjaan'),
			'tgl_pengerjaan'	=> $this->input->post('tgl_pengerjaan'),
			'status'	=> $this->input->post('status_pengerjaan')
			);

			$this->pengerjaan_model->tambah_data_stat_pengerjaan($data);
			redirect(site_url('pengerjaan/edit_riwayat/'.$id_pengerjaan));
		}

		public function delete($id)
		{
			$this->pengerjaan_model->hapus_data($id);
			redirect(site_url('pengerjaan'));
		}

		public function delete_status($id,$id_pengerjaan)
		{
			$this->pengerjaan_model->hapus_data_status($id);
			redirect(site_url('pengerjaan/edit_riwayat/'.$id_pengerjaan));
		}

		function edit($id)
		{
			$mhs=$this->pengerjaan_model->ambil_data_id($id);
			$data=array(
			'merk'	=> set_value('merk',$mhs->merk),
			'tipe'		=> set_value('tipe',$mhs->tipe),
			'nopol'		=> set_value('nopol',$mhs->nopol),
			'id_pengerjaan'	=> set_value('id_pengerjaan',$mhs->id_pengerjaan),
			'usernamee'	=> set_value('username',$mhs->username),
			'id_perbaikann'	=> set_value('id_perbaikan',$mhs->id_perbaikan),
			'tgl_masuk'	=> set_value('tgl_masuk',$mhs->tgl_masuk),
			'customer'	=> $this->pengerjaan_model->ambil_data_customer(),
			'perbaikan'	=> $this->pengerjaan_model->ambil_data_perbaikan(),
			'action' 	=> site_url('pengerjaan/edit_aksi'),
			'button'	=>'Edit'
			);
			$this->load->view('pengerjaan/pengerjaan_form',$data);
		}

		function edit_riwayat($id)
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
			$this->load->view('pengerjaan/pengerjaan_status',$data);
		}

		function edit_aksi()
		{
			$data=array(
			'merk'	=> $this->input->post('merk'),
			'tipe'	=> $this->input->post('tipe'),
			'nopol'	=> $this->input->post('nopol'),
			'id_perbaikan'	=> $this->input->post('id_perbaikan'),
			'tgl_masuk'	=> $this->input->post('tgl_masuk'),
			'username'		=> $this->input->post('username')
			);
			$id=$this->input->post('id');
			$this->pengerjaan_model->edit_data($id,$data);
			redirect(site_url('pengerjaan'));
		}
	}
	?>