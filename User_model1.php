<?php 

	defined('BASEPATH') OR exit ('No direct script access allowed');

	class User_model1 extends CI_Model
	{
		public function prosestambahguru($nama_guru, $alamat, $mata_ajar)
		{
			$data = array (

				'nama_guru' => $nama_guru,
				'alamat' => $alamat,
				'mata_ajar' => $mata_ajar
				);

			$query = $this->db->insert('guru', $data);
			return $query;
		}

		public function proseshapusguru($NIK)
		{
			$data = array (

				'NIK' => $NIK

				);

			$query = $this->db->delete('guru',$data);
			return $query;
		}

		public function editguru($NIK)
		{
			$query = "select * from guru where NIK = $NIK";
			return $this->db->query($query);
		}


		public function editguruproses($NIK ,$nama_guru, $alamat, $mata_ajar)
		{
			$data = array (
				
				'nama_guru' => $nama_guru,
				'alamat' => $alamat,
				'mata_ajar' => $mata_ajar
				);

			return $this->db->update('guru', $data,array('NIK' => $NIK));
		}

	}

 ?>