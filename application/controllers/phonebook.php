<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Phonebook extends CI_Controller {
    
     
        public function index()
	{
            $this->output->cache(10);    
            $data['title']="Телефонный справочник";
		
                $this->load->model('Phonebookmodel');
                $data['result_entries'] = $this->Phonebookmodel->get_all_contact();
                
                $data['mainContent'] = $this->load->view('phonebook', $data, true);
                $data['homeTitle'] = 'page Title';
                $this->load->view('Template_page', $data);     

                //$this->load->view('header',$data);
                //$this->load->view('phonebook',$data);
                //$this->load->view('footer',$data);
                //print_r ($this);
	}
    
    
}