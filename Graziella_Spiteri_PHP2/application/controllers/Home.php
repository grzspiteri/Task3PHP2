<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends TW_Controller {

	function _construct ()
	{
		parent::_construct ();
	}
	# This is the index page: http://localhost/ci/index.php?home
	public function index ()
	{
		# This command loads a view from the application/views folder
		$this->build ('home');
	}


	# This is just to test the database connection
	public function language () {

		# To use a model, load it
		$this->load->model ('users_model');

		# Put the language (from the database) in a variable
		$lang = $this->users_model->get_language ();

		# Print the language
		var_dump ($lang);

	}
}
