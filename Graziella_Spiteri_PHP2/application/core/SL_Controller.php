<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SL_Controller extends CI_Controller {

    #this is the class constructor
    #used to get the data from its parent

    function _construct ()
    {

        parent::_construct ();

    }

    #builds a standard page
    #this function should only be available to this class and its children
    protected function build ($page, $param = NULL)
    {
        $this->load->view ('struct/start');

        $this->load->view ($page, $param);

        $this->load->view ('struct/end');
    }

    #check if the user is logged in
    protected function check_login () {

        #if the user is logged in
        if ($this->session->userdata ('idUser') !=NULL) {

            #if the user is on the login/register pages
            if ($this->router->fetch_class() == 'users') {
                #only rediret if the user is not on the logout page
                if ($this->router->fetch_method () != 'logout') {
                rediret ("home");
            }
        }
        #if the user is logged out
        } else {
            #if the user is not on the login/register pages
            if ($this->router->fetch_class () != 'users') {
                redirect ("users/login");
            }
        }
    }
}
