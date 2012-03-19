<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends CI_Controller {
    
     
        public function index()
	{
            $this->output->cache(10);        
            $data['title']="ываыва";
		
                $this->load->model('Logsmodel');
                $data['row'] = $this->Logsmodel->get_current_users_with_comp();
                $data['comps'] = $this->Logsmodel->get_current_comps_with_user();
                
                $data['mainContent'] = $this->load->view('logs', $data, true);
                $data['homeTitle'] = 'page Title';
                $this->load->view('Template_page', $data);
                //$this->load->view('header',$data);
                //$this->load->view('logs',$data);
                //$this->load->view('footer',$data);
                //print_r ($this);
	}
    
    
}