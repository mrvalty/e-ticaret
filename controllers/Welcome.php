<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    	public function index()
	{
		$this->load->view('_header');
		$this->load->view('_sidebar');
		$this->load->view('_slider');
		$this->load->view('_content');
		$this->load->view('_footer');

	}
    public function test()
    {
        echo "Test Fonksiyonu Açıldı" ;

    }
}
