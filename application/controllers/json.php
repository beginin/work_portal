<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Json extends CI_Controller {
    
     
        public function index()
	{
            //$this->output->cache(10);    
            $data['title']="Телефонный справочник";
		
                //$this->load->model('Jsonmodel');
                //$data['result_entries'] = $this->Jsonmodel->get_all_contact();
                
                $data['mainContent'] = $this->load->view('json', $data, true);
                $data['homeTitle'] = 'page Title';
                $this->load->view('Template_page', $data);     

                //$this->load->view('header',$data);
                //$this->load->view('phonebook',$data);
                //$this->load->view('footer',$data);
                //print_r ($this);
	}
        public function loadjson()
        {
            $this->load->model('Jsonmodel');
            echo $this->Jsonmodel->get_json();
            
        }
        public function  convjson()
        {
            $this->load->model('Jsonmodel');
            echo $this->Jsonmodel->convert();
        }
        
    
    
}