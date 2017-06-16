<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends SL_Controller {

	function _construct ()
	{
		parent::_construct ();
	}
	# This is the index page: http://localhost/ci/index.php?home
	public function index ()
	{

		# To use a model, load it
		$this->load->model ('course_model');

		# Put the language (from the database) in a variable
		$lang = $this->course_model->get_all ();

		# Print the language
		echo form_dropdown ('course', $lang);

	}
}
