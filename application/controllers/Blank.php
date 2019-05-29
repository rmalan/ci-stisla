<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Blank extends CI_Controller 
{    
    public function index()
    {
        $data['pageTitle'] = 'Blank';                
        $data['pageContent'] = $this->load->view('blank', $data, TRUE);

        $this->load->view('template/layout', $data);
    }
}