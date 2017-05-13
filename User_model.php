<?php

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class User_model extends CI_Model
	{
		public function displaysiswa()
		{
			$query = "select * from siswa";
			return $this->db->query($query);
		}

		public function displayguru()
		{
			$query = "select * from guru";
			return $this->db->query($query);
		}

		public function prosestambahsiswa($nama_siswa, $alamat, $nomor_hp)
		{
			$data = array (

				'nama_siswa' => $nama_siswa,
				'alamat' => $alamat,
				'nomor_hp' => $nomor_hp
				);

			$query = $this->db->insert('siswa', $data);
			return $query;
		}


		function ambildata($perPage, $uri, $ringkasan) {
		$this->db->select('*');
		$this->db->from('guru');
		if (!empty($ringkasan)) {
			$this->db->like('nama_guru', $ringkasan);
		}
		$this->db->order_by('NIK','asc');
		$getData = $this->db->get('', $perPage, $uri);

		if ($getData->num_rows() > 0)
			return $getData->result_array();
		else
			return null;
	}


		public function proseshapussiswa($NIS)
		{
			$data = array (

				'NIS' => $NIS

				);

			$query = $this->db->delete('siswa',$data);
			return $query;
		}

		public function editsiswa($NIS)
		{
			$query = "select * from siswa where NIS = $NIS";
			return $this->db->query($query);
		}


		public function editsiswaproses($NIS ,$nama_siswa, $alamat, $nomor_hp)
		{
			$data = array (

				'nama_siswa' => $nama_siswa,
				'alamat' => $alamat,
				'nomor_hp' => $nomor_hp
				);

			return $this->db->update('siswa', $data,array('NIS' => $NIS));
		}

		public function ceklogin($username, $pwd)
		{
			$query= "select * from login where username = '$username' and pwd = '$pwd'";
			return $this->db->query($query)->row();
		}

		public function prosesregistrasi($username, $pwd)
		{
			// $data = array (

			// 	'username' => $username,
			// 	'pwd' => $pwd

			// 	);

			$query = "insert into login values ('$username', '$pwd')";

			//$query = $this->db->insert('login', $data);
			return $this->db->query($query);

		}

	}

 ?>
