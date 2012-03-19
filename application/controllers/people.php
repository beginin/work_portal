<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class People extends CI_Controller {
    
     
        public function index()
	{
            //$this->output->cache(10);    
            $data['title']="Телефонный справочник";
		
                $this->load->model('Peoplemodel');
                $data['result_entries'] = $this->Peoplemodel->get_all_contact();
                //print_r ($data['result_entries']);
                $data['mainContent'] = $this->load->view('people', $data, true);
                $data['homeTitle'] = 'page Title';
                //$this->load->view('Template_page', $data);     

                $this->load->view('header1.php',$data);
                $this->load->view('people',$data);
                //$this->load->view('footer',$data);
                //print_r ($this);
	}
    
    
}