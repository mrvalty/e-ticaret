<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
        $this->load->view('admin\_header');
        $this->load->view('admin\_sidebar');
        $this->load->view('admin\_content');
        $this->load->view('admin\_footer');

    }
    public function ayarlar()
    {
        $query= $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();

        $this->load->view('admin\ayarlar',$data);
    }
    public function ayarlar_guncelle($id)
    {
        $data=array(
            'adi' => $this->input->post('adi'),
            'description' => $this->input->post('description'),
			'keywords' => $this->input->post('keywords'),
			'tel'   => $this->input->post('tel'),
            'sehir' => $this->input->post('sehir'),
            'smtpserver' => $this->input->post('smtpserver'),
            'smtpemail' => $this->input->post('smtpemail'),
            'smtpport' => $this->input->post('smtpport'),
			'password'   => $this->input->post('password'),
			'facebook'   => $this->input->post('facebook'),
			'twitter'   => $this->input->post('twitter'),
			'instagram'   => $this->input->post('instagram'),
			'pinterest'   => $this->input->post('pinterest'),
			'hakkimizda'   => $this->input->post('editor1'),
			'iletisim'   => $this->input->post('editor2')
        );     		                                //AL VE VERİTABANINA KAYDET.

        $this->load->model('Database_model');
        $this->Database_model->update_data("ayarlar",$data,$id);

        redirect(base_url().'admin/home/ayarlar');
    }

}
