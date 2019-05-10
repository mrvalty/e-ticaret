<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    //Kütüphaneleri Kullanacağımız modelleri tanımlıyoruz.

    public function __construct()
    {
        parent::__construct();

        $this->load->helper('url');

    }

    public function index()
    {
        $this->load->view('admin\login_form');

    }
    public function login_ol()
    {
        $email=$this->input->post('email');
        $sifre=$this->input->post('sifre');

        //zararlı kodlardan temizleme

        $email = $this->security->xss_clean($email);
        $sifre = $this->security->xss_clean($sifre);
        $this->load->model('Database_model');

        //Result değişkeninin içine database'den alınan veriler yüklenir.

        $result = $this->Database_model->login("admin",$email,$sifre);
        if ($result)
        {

            //Kullanıcı(admin) var ise bilgileri diziye aktarıyor.
            $sess_array = array(
                "id"=> $result[0]->Id,
                "yetki"=> $result[0]->yetki,
                "email"=> $result[0]->email,
                "adsoy"=> $result[0]->adsoy,
                "resim"=> $result[0]->resim

            );

            //session verilerini atama
            $this->session->set_userdata("admin_session",$sess_array);
            redirect(base_url().'admin');
        }
        else
        {
            $this->session->set_flashdata("mesaj","Hatalı şifre ya da kullanıcı adi girdiniz");  //Kullanıcı yanlış girdiyse mesaj verir.
            redirect(base_url().'admin/login');
        }
    }
    public function login_cik()    //Oturumu kapatmak için.
    {
        $this->session->unset_userdata("admin_session");
        redirect(base_url().'admin/login');
    }

}