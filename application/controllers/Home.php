<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function show()
	{
		$query = $this->db->select('Member,Email')
											->order_by('Email')
											->get('Reps');
		$emails = $query->result();

		$i=0;
		echo "
			<table>
			<tr>
				<th>#</th>
				<th>Member</th>
				<th>Email</th>
			</tr>
		";

		foreach ($emails as $email) {

			$i++;

			echo "
			<tr>
			<td>".$i.".</td>
			<td>".$email->Member."</td>
			<td>".$email->Email."</td>
			</tr>";

		}

		echo "</table>";

	}


}
