<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tree extends CI_Controller {
    
     
        public function index()
	{
            //$this->output->cache(10);    
            $data['title']="Дерево";
		
                $this->load->model('Treemodel');
                $data['result_entries'] = $this->Treemodel->get_xml();
                $data['mainContent'] = $this->load->view('tree',$data, true);
                $data['homeTitle'] = 'page Title';
                $this->load->view('Template_page', $data);
                //$this->load->view('header',$data);
                //$this->load->view('utils',$data);
                //$this->load->view('footer',$data);
                //print_r ($this);
	}
        public function printxml()
        {
            $this->load->model('Treemodel');
            echo $this->Treemodel->get_xml();
        } 
        public function hypertree()
	{
            //$this->output->cache(10);    
            $data['title']="Дерево";
		
                $this->load->model('Treemodel');
                $data['result_entries'] = $this->Treemodel->get_xml();
                $data['mainContent'] = $this->load->view('hypertree',$data, true);
                $data['homeTitle'] = 'page Title';
                $this->load->view('Template_page', $data);
                //$this->load->view('header',$data);
                //$this->load->view('utils',$data);
                //$this->load->view('footer',$data);
                //print_r ($this);
	}
        public function loadjson()
        {
            $this->load->model('Treemodel');
            print_r ($this->Treemodel->get_json());
        }
        
    
}