<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends TW_Controller {

	# The registration form
	public function register () {

		# first: load the form helper
		$this->load->helper ('form');

		# the page info goes into an array
		$data = array (
			'form'		=> array (
				'name'		=> array (
					'type'			=> 'text',
					'name'			=> 'input-name',
					'placeholder'	=> 'Herman',
					'required'		=> TRUE
				),


					'surname'		=> array (
						'type'			=> 'text',
						'name'			=> 'input-surname',
						'placeholder'	=> 'Borg Bonaci',
						'required'		=> TRUE
					),

				'email'			=> array (
					'type'			=> 'email',
					'name'			=> 'input-email',
					'placeholder'	=> 'me@example.com',
					'required'		=> TRUE
				),

				'username'		=> array (
					'type'			=> 'text',
					'name'			=> 'input-username',
					'placeholder'	=> 'username',
					'required'		=> TRUE
				),

				'password'		=> array (
					'type'			=> 'password',
					'name'			=> 'input-password',
					'placeholder'	=> 'password',
					'required'		=> TRUE
				),

				'DOB'			=> array (
					'type'			=> 'int',
					'name'			=> 'input-DOB',
					'placeholder'	=> '01/01/2017',
					'required'		=> TRUE
				),

				'password'		=> array (
					'type'			=> 'password',
					'name'			=> 'input-password',
					'placeholder'	=> 'password',
					'required'		=> TRUE
				),

				'CourseID'		=> array (
					'type'			=> 'int',
					'name'			=> 'input-courseID',
					'placeholder'	=> 'CourseID',
					'required'		=> TRUE
				),

			)
		);

		# load the registration page
		$this->load->view ('register', $data);

	}

	# The registration process
	public function do_register () {

		# load the form validator
		$this->load->library ('form_validation');

		# set the form rules
		$rules = array (
			array (
				'field'	=> 'input-name',
				'label' => 'Name',
				'rules' => 'required|alpha'
			),

			array (
				'field'	=> 'input-surname',
				'label' => 'Surname',
				'rules' => 'required|alpha'
			),

			array (
				'field'	=> 'input-email',
				'label' => 'Email',
				'rules' => 'required|valid_email'
			),

			array (
				'field'	=> 'input-username',
				'label' => 'Username',
				'rules' => 'required|alpha'
			),

			array (
				'field'	=> 'input-password',
				'label' => 'Password',
				'rules' => 'required|min_length[8]|max_length[20]'
			),
			array (
				'field'	=> 'input-DOB',
				'label' => 'DOB',
				'rules' => 'required|alpha'
			),

			array (
				'field'	=> 'input-courseID',
				'label' => 'CourseID',
				'rules' => 'required|alpha'
			)

		);

		# set the rules in the library
		$this->form_validation->set_rules ($rules);

		# check for validation errors on the page, if there are any, stop here
		if ($this->form_validation->run () === FALSE) {
			echo validation_errors ();
			return;
		}

		$name 	= $this->input->post ('input-name');
		$surname 	= $this->input->post ('input-surname');
		$email 		= $this->input->post ('input-email');
		$username 		= $this->input->post ('input-username');
		$password 	= $this->input->post ('input-password');
  	$DOB 	= $this->input->post ('input-DOB');
		$CourseID 		= $this->input->post ('input-courseID');

		if ($this->users_model->register ($name, $surname, $email, $username, $password, $DOB, $CourseID)) {
			echo "The user was registered.";
		} else {
			echo "The user could not be registered.";
		}

	}

	# The login form
	public function login () {

		# first: load the form helper
		$this->load->helper ('form');

		# the page info goes into an array
		$data = array (
			'form'		=> array (
				'email'			=> array (
					'type'			=> 'email',
					'name'			=> 'input-email',
					'placeholder'	=> 'me@example.com',
					'required'		=> TRUE
				),
				'password'		=> array (
					'type'			=> 'password',
					'name'			=> 'input-password',
					'placeholder'	=> 'password',
					'required'		=> TRUE
				)
			)
		);

		# load the login page
		$this->load->view ('login', $data);

	}

	# The login process
	public function do_login () {

		# load the form validator
		$this->load->library ('form_validation');

		# set the form rules
		$rules = array (
			array (
				'field'	=> 'input-email',
				'label' => 'Email',
				'rules' => 'required|valid_email'
			),
			array (
				'field'	=> 'input-password',
				'label' => 'Password',
				'rules' => 'required'
			)
		);

		# set the rules in the library
		$this->form_validation->set_rules ($rules);

		# check for validation errors on the page, if there are any, stop here
		if ($this->form_validation->run () === FALSE) {
			echo validation_errors ();
			return;
		}

		$email 		= $this->input->post ('input-email');
		$password 	= $this->input->post ('input-password');

		# Set the result of this query in a variable
		$login_id = $this->users_model->email_id ($email);

		# If the email doesn't exist, stop here
		if (!$login_id) {
			echo "The email does not exist.";
			return;
		}

		# The email is OK, so now we should check the password
		if (!$this->users_model->check_password ($login_id, $password)) {
			echo "The password is incorrect";
			return;
		}

		# Get the user information and set it in a session
		$userdata = $this->users_model->get_userdata ($login_id);

		# We set the userdata, however we need to set an encryption key
		$this->session->set_userdata ($userdata);

	}

	#the logout function
	public function logout () {

		$keys = array ('user_id', 'user_name', 'user_surname');
		$this->session->unset_userdata ($keys);
		redirect('users/login');
	}
}
