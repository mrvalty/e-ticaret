<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mesajlar extends CI_Controller {

    //Kütüphaneleri Kullanacağımız modelleri tanımlıyoruz.

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');
        if (!$this->session->userdata("admin_session"))  //Diğer tarayıcılarda online olmayı engellemek.
            redirect(base_url().'admin/login');
    }

        public function index()
    {
        $query=$this->db->query("SELECT * FROM mesajlar ORDER BY adsoy");
        $data["veriler"]=$query->result();

        $this->load->view('admin/mesajlar_liste',$data);
    }


}
