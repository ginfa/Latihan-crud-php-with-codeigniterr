<?php 

	class Login extends CI_Controller
	{

		public function index()                                     
		{
			$this->load->view('login');
		}

		public function checklogin()
		{

			$this->load->model('User_model');
			$username = $this->input->post('username');
			$pwd = $this->input->post('pwd');

			$query = $this->User_model->ceklogin($username, $pwd);

			if ($query!=null)
			{
				echo "Success login";
			}
			else
			{
				echo "Failed";
			}

		}
	}



 ?>