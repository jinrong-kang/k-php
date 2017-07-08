<?php
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->model('news_model');
			$this->load->helper('url_helper');
		}

		public function check()
		{
			$username = $_POST['username'];
			$passwd = md5($_POST['passwd']);
		
			$sql = "SELECT text FROM news WHERE title = '".$username."'";

			$passwd_check = $this->db->query($sql);

			if ($passwd == $passwd_check->result_array()[0]['text'])
			{
				echo "Right";
				if ($logged_in == FALSE)
				{
				   redirect('news/index');
				}
			}
			else
			{
				echo "Your passwd is wrong";
			}	
		}
	}
?>