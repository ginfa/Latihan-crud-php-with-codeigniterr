<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	Class Siswa extends CI_Controller
	{
		public function index()
		{
			$data['tampilsiswa'] = $this->user_model->displaysiswa();
			$this->load->view('guru', $data);
		}

		public function tambahsiswa()
		{
			$nama_siswa = $this->input->post('nama_siswa');
			$alamat = $this->input->post('alamat');
			$nomor_hp = $this->input->post('nomor_hp');

			$simpan = $this->user_model->prosestambahsiswa($nama_siswa, $alamat, $nomor_hp);
			if (!$simpan)
			{
				echo "Gagal menyimpan";
			}
			else
			{
				echo "berhasil disimpan";

		echo  date("d-m-Y") ; 
				redirect(base_url()."siswa");
			}
		}


        public  function uploadFile()
        {
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|png|jpg|txt|xlsx';
            $this->load->library('upload', $config);

            $upload = $this->upload->do_upload('filename');

            if ($upload!=null)
            {
                echo "Success Upload";
            }
            else
            {
                echo "Failed";
            }

        }
		 
		public function hapussiswa($NIS)
		{
			$hapus = $this->user_model->proseshapussiswa($NIS);
			if (!$hapus)
			 {
				echo "Gagal dihapus";
			}
			else
			{
				
				redirect(base_url()."siswa");
			}
		}

		public function editsiswa($NIS)
		{
			$data['tampilsiswabyId'] = $this->user_model->editsiswa($NIS);
			$this->load->view('formeditsiswa', $data);
		}

		public function proseseditsiswa()
		{
			$NIS = $this->input->post('NIS_edit');
			$nama_siswa = $this->input->post('nama_siswaedit');
			$alamat = $this->input->post('alamatedit');
			$nomor_hp = $this->input->post('nomor_hpedit');
			 
			$simpan = $this->user_model->editsiswaproses($NIS, $nama_siswa, $alamat, $nomor_hp);
			if (!$simpan)
			{
				echo "gagal di ubah";
			}
			else
			{
				redirect(base_url()."siswa");
			}
		}
	}

