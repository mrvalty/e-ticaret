<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uyeler extends CI_Controller {

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
        $query=$this->db->query("SELECT * FROM uyeler ORDER BY adsoy");
        $data["veriler"]=$query->result();

        $this->load->view('admin/uyeler_liste',$data);
    }

    public function ekle()
    {
        $this->load->view('admin/uyeler_ekle');
    }

    public function ekle_kaydet() //Kaydetmek için fonksiyon oluşturduk.
    {
        //Form verilerini alıcaz

        $data=array(
            'adsoy' => $this->input->post('adsoy'),
            'email' => $this->input->post('email'),
            'sehir' => $this->input->post('sehir'),
            'tel'   => $this->input->post('tel'),
            'durum' => $this->input->post('durum'),
            'yetki' => $this->input->post('yetki'),
            'adres' => $this->input->post('adres'),
            'sifre' => $this->input->post('sifre')
        );                                                 //AL VE VERİTABANINA KAYDET.
        $this->db->insert("uyeler",$data);
        $this->session->set_flashdata("mesaj","Üye kaydı başarılı...");
        redirect(base_url().'admin/uyeler');
    }
    public function duzenle($id)
    {
        $query=$this->db->query("SELECT * FROM uyeler WHERE Id= $id");
        $data["veri"]=$query->result();

        $this->load->view('admin/uyeler_duzenle',$data);
    }
    public function guncelle($id)                  //Alınan verileri değiştirip veritabanına güncelleme yapar.
    {
//Form verilerini alıcaz
        $data=array(
            'adsoy' => $this->input->post('adsoy'),
            'email' => $this->input->post('email'),
            'sehir' => $this->input->post('sehir'),
            'tel'   => $this->input->post('tel'),
            'durum' => $this->input->post('durum'),
            'yetki' => $this->input->post('yetki'),
            'adres' => $this->input->post('adres'),
            'sifre' => $this->input->post('sifre')
        );     		                                //AL VE VERİTABANINA KAYDET.

        $this->load->model('Database_model');
        $this->Database_model->update_data("uyeler",$data,$id);

        redirect(base_url().'admin/uyeler');
    }
    public function sil($id)
    {
        $this->db->query("DELETE FROM uyeler WHERE Id= $id");
        redirect(base_url().'admin/uyeler');

    }
}
