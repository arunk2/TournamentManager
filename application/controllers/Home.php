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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index($id=0)
	{
		$layout_data = array();
		$layout_data['eid'] = $id;

		$this->load->library('form_validation');
		$this->form_validation->set_rules('email', 'Email', 'required|email');
		$this->form_validation->set_rules('password', 'Password', 'required');
		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if ($this->form_validation->run()){
            $email = set_value('email');
            $password = set_value('password');

            redirect('/home/index');
        }
        $layout_data['email_error'] = form_error('email');
        $layout_data['password_error'] = form_error('password');        

		$this->data['page_name'] = 'home/index';
		$this->data['data'] = $layout_data;
		$this->load->view('view_render', $this->data);
	}
}
