<?php

	defined('BASEPATH') OR exit ('No direct script access allowed');

	Class Guru extends CI_Controller
	{

		public function indexx()
		{
			$data['tampilguru'] = $this->user_model->displayguru();

			$this->load->view('guru', $data);

		}

		public function index()
		{

		if (isset($_POST['q'])) {
			$data['ringkasan'] = $this->input->post('cari');
			// se session userdata untuk pencarian, untuk paging pencarian
			$this->session->set_userdata('sess_ringkasan', $data['ringkasan']);
		}
		else {
			$data['ringkasan'] = $this->session->userdata('sess_ringkasan');
		
		}


		// load model
		$this->load->model('User_model');

		$this->db->like('nama_guru', $data['ringkasan']);
        $this->db->from('guru');

		// pagination limit
		$pagination['base_url'] = base_url().'guru/index/page/ ';
		$pagination['total_rows'] = $this->db->count_all_results();
		$pagination['full_tag_open'] = "<p><div class=\"pagination\" style='letter-spacing:2px;'>";
		$pagination['full_tag_close'] = "</div></p>";
		$pagination['cur_tag_open'] = "<span class=>";
		$pagination['cur_tag_close'] = "</span>";
		$pagination['num_tag_open'] = "<span class=\"disabled\">";
		$pagination['num_tag_close'] = "</span>";
		$pagination['per_page'] = "3";
		$pagination['uri_segment'] = 4;
		$pagination['num_links'] = 5;

		$this->pagination->initialize($pagination);

		$data['ListBerita'] = $this->user_model->ambildata($pagination['per_page'],$this->uri->segment(4,0),$data['ringkasan']);

		$this->load->vars($data);
		$this->load->view('index');
		}

		public function tambahguru()
		{
			$nama_guru = $this->input->post('nama_guru');
			$alamat = $this->input->post('alamat');
			$mata_ajar = $this->input->post('mata_ajar');

		$simpan = $this->user_model1->prosestambahguru($nama_guru, $alamat, $mata_ajar);
		if (!$simpan)
		 {
			echo "gagal ditambah";
		 }

		 else
		 {
		 	redirect(base_url()."guru/indexx");
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


		public function hapusguru($NIK)
		{
			$hapus = $this->user_model1->proseshapusguru($NIK);
			if (!$hapus)
			 {
				echo "Gagal dihapus";
			}
			else
			{

				redirect(base_url()."guru/indexx");
			}
		}

		public function editguru($NIK)
		{
			$data['tampilgurubyId'] = $this->user_model1->editguru($NIK);
			$this->load->view('formeditguru', $data);
		}

		public function proseseditguru()
		{
			$NIK = $this->input->post('NIK_edit');
			$nama_guru = $this->input->post('nama_guruedit');
			$alamat = $this->input->post('alamatedit');
			$mata_ajar = $this->input->post('mata_ajaredit');

			$simpan = $this->user_model1->editguruproses($NIK, $nama_guru, $alamat, $mata_ajar);
			if (!$simpan)
			{
				echo "gagal di ubah";
			}
			else
			{
				redirect(base_url()."guru/indexx");
			}
		}

	}
