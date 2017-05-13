<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class Registerpage extends CI_Controller
	{


		public function index()
		{
			$this->load->view('useregister');
		}


		public function register()
		{
			$this->load->model('User_model');
			$username = $this->input->post('username');
			$pwd = $this->input->post('pwd');

			$tambah = $this->User_model->prosesregistrasi($username, $pwd);
			if ($tambah != null)
			{
				echo "anda berhasil ditambahkan";
			}
			else
			{
				echo "gagal ditambahkan";
			}


		}
	}


 ?>