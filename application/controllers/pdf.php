<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pdf extends CI_Controller {
    
     
        public function index()
	{
            $this->load->helper(array('dompdf', 'file'));
            //$this->output->cache(10);        
            $data['title']="ываыва";
            //$this->load->library("ezpdf");
            
            //$this->ezpdf->selectFont('./fonts/Helvetica.afm');
            //$this->ezpdf->ezText('Hello World!',50);
            //$this->ezpdf->ezStream();
            $data['mainContent'] = $this->load->view('json.php', $data, true);
            $data['homeTitle'] = 'page Title';
            $html = $this->load->view('Template_page', $data, true);
            pdf_create($html, 'filename');
             
	}
    
    
}