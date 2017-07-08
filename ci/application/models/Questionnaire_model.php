<?php

	class Questionnaire_model extends CI_Model{
		private $fill_time;
		function __construct()
			{
				$this->load->database();
				$this->fill_time = date("Y-m-d H:i:s");
			}
		public function set_userinfo()
		{
			$_name = " ";
			$_email = " ";
			$_address = " ";
			$_tel = " ";

			$_name = $this->input->post('name');
			$_email = $this->input->post('email');
			$_address = $this->input->post('address');
			$_tel = $this->input->post('tel');
			
			$data = array(
				'name' => $_name,
				'email' => $_email,
				'address' => $_address,
				'tel' => $_tel
				);

			$this->db->insert('t_user_info', $data);

			$_id_i = $this->db->insert_id();
			return $_id_i;
		}
		// public function get_userinfo()
		// {

		// }
		public function set_userform()
		{
			$fk_id = $this->set_userinfo();

			$_A1 = 0;
			$_A2 = 0;
			$_A3 = 0;
			$_B1 = 0;
			$_B2a = 0;
			$_B2b = " ";
			$_B3 = 0;
			$_B4 = 0;
			$_B5 = 0;
			$_B6 = 0;
			$_B7 = 0;
			$_C1a = 0;
			$_C1b = 0;
			$_C1c = 0;
			$_C1d = 0;
			$_C2 = 0;
			$_C3 = 0;
			$_C4 = 0;
			$_C5 = 0;
			$_D1 = " ";

			$_A1 = $this->input->post('A1');
			$_A2 = $this->input->post('A2');
			$_A3 = $this->input->post('A3');
			$_B1 = $this->input->post('B1');
			$_B2a = $this->input->post('B2a');
			$_B2b = $this->input->post('B2b');
			$_B3 = $this->input->post('B3');
			$_B4 = $this->input->post('B4');
			$_B5 = $this->input->post('B5');
			$_B6 = $this->input->post('B6');
			$_B7 = $this->input->post('B7');
			$_C1a = $this->input->post('C1a');
			$_C1b = $this->input->post('C1b');
			$_C1c = $this->input->post('C1c');
			$_C1d = $this->input->post('C1d');
			$_C2 = $this->input->post('C2');
			$_C3 = $this->input->post('C3');
			$_C4 = $this->input->post('C4');
			$_C5 = $this->input->post('C5');
			$_D1 = $this->input->post('D1');

			$_id_iu = $fk_id;

			$data = array(
				'A1' => $_A1,
				'A2' => $_A2,
				'A3' => $_A3,
				'B1' => $_B1,
				'B2a' => $_B2a,
				'B2b' => $_B2b,
				'B3' => $_B3,
				'B4' => $_B4,
				'B5' => $_B5,
				'B6' => $_B6,
				'B7' => $_B7,
				'C1a' => $_C1a,
				'C1b' => $_C1b,
				'C1c' => $_C1c,
				'C1d' => $_C1d,
				'C2' => $_C2,
				'C3' => $_C3,
				'C4' => $_C4,
				'C5' => $_C5,
				'D1' => $_D1,
				'fill_time' => $this->fill_time,
				'id_iu' => $_id_iu
				);

			return $this->db->insert('t_user_form', $data);
		}
		public function set_clientform()
		{
			$fk_id = $this->set_userinfo();

			$_A1 = 0;
			$_A2 = 0;
			$_A3 = 0;
			$_B1 = 0;
			$_B2a = 0;
			$_B2b = " ";
			$_B3 = 0;
			$_B4 = 0;
			$_C1 = 0;
			$_C2 = 0;
			$_C3 = 0;
			$_C4 = 0;
			$_C5 = 0;
			$_C6 = 0;
			$_C7 = 0;
			$_D1 = " ";

			$_A1 = $this->input->post('A1');
			$_A2 = $this->input->post('A2');
			$_A3 = $this->input->post('A3');
			$_B1 = $this->input->post('B1');
			$_B2a = $this->input->post('B2a');
			$_B2b = $this->input->post('B2b');
			$_B3 = $this->input->post('B3');
			$_B4 = $this->input->post('B4');
			$_C1 = $this->input->post('C1');
			$_C2 = $this->input->post('C2');
			$_C3 = $this->input->post('C3');
			$_C4 = $this->input->post('C4');
			$_C5 = $this->input->post('C5');
			$_C6 = $this->input->post('C6');
			$_C7 = $this->input->post('C7');
			$_D1 = $this->input->post('D1');

			$_id_ic = $fk_id;

			$data = array(
				'A1' => $_A1,
				'A2' => $_A2,
				'A3' => $_A3,
				'B1' => $_B1,
				'B2a' => $_B2a,
				'B2b' => $_B2b,
				'B3' => $_B3,
				'B4' => $_B4,
				'C1' => $_C1,
				'C2' => $_C2,
				'C3' => $_C3,
				'C4' => $_C4,
				'C5' => $_C5,
				'C6' => $_C6,
				'C7' => $_C7,
				'D1' => $_D1,
				'fill_time' => $this->fill_time,
				'id_ic' => $_id_ic
				);

			return $this->db->insert('t_client_form', $data);
		}
	}
?>