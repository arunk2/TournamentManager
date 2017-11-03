<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Club extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/club
	 *	- or -
	 * 		http://example.com/index.php/club/index
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
		$this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('abbv', 'Abbv', 'required');
		$this->form_validation->set_rules('addr_line_1', 'addr_line_1', 'required');
		$this->form_validation->set_rules('addr_line_2', 'addr_line_2', 'required');
		$this->form_validation->set_rules('city', 'City', 'required');
		$this->form_validation->set_rules('state', 'State', 'required');
		$this->form_validation->set_rules('country', 'Country', 'required');
		$this->form_validation->set_rules('pincode', 'Pincode', 'required');
		$this->form_validation->set_rules('contactPerson', 'ContactPerson', 'required');
		$this->form_validation->set_rules('phoneNumber', 'PhoneNumber', 'required');

		$this->form_validation->set_error_delimiters('<p class="text-danger">', '</p>');

        if ($this->form_validation->run()){
            $name = set_value('name');
            $abbv = set_value('abbv');
            $name = set_value('addr_line_1');
            $abbv = set_value('addr_line_2');
            $name = set_value('city');
            $abbv = set_value('state');
            $name = set_value('country');
            $abbv = set_value('pincode');
            $name = set_value('contactPerson');
            $abbv = set_value('phoneNumber');

            redirect('/home/index');
        }
        $layout_data['name_error'] = form_error('name');
        $layout_data['abbv_error'] = form_error('abbv');
        $layout_data['addr_line_1_error'] = form_error('addr_line_1');
        $layout_data['addr_line_2_error'] = form_error('addr_line_2'); 
        $layout_data['city_error'] = form_error('city');
        $layout_data['state_error'] = form_error('state'); 
        $layout_data['country_error'] = form_error('country');
        $layout_data['pincode_error'] = form_error('pincode'); 
        $layout_data['contactPerson_error'] = form_error('contactPerson');
        $layout_data['phoneNumber_error'] = form_error('phoneNumber'); 

		$this->data['page_name'] = 'club/index';
		$this->data['data'] = $layout_data;
		$this->load->view('view_render', $this->data);
		
	}
}
