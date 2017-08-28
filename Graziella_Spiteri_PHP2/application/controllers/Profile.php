<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends SL_Controller {

	# This is the index page: http://localhost/ci/index.php?profile
	public function user($username = NULL)
	{

		if ($username == NULL) {
			show_404 ();
			return;
		}

		# Set up the page variables
		$data = array (
			'username'	=> $username
		);

		# This command loads a view from the application/views folder
		$this->build('profile/home', $data);
	}


	# The send message page: http://localhost/ci/index.php?/profile/message
	public function message () {

		$this->load->view ('struct/start');
		$this->load->view ('profile/home');
		$this->load->view ('struct/end');

	}
}
