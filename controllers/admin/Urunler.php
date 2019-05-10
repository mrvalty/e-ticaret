<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Urunler extends CI_Controller {

    //Kütüphaneleri Kullanacağımız modelleri tanımlıyoruz.

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Database_model');
        $this->load->helper('url');
        if (!$this->session->userdata("admin_session"))  //Diğer tarayıcılarda online olmayı engellemek.
            redirect(base_url().'admin/login');
    }

    public function index()
    {
        //$query=$this->db->query("SELECT * FROM urunler ORDER BY adi");
        //$data["veriler"]=$query->result();
        $data["veriler"]=$this->Database_model->get_urunler();
        $this->load->view('admin/urunler_liste',$data);
    }

    public function ekle()
    {
        $this->load->view('admin/urunler_ekle');
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
        $this->db->insert("urunler",$data);
        $this->session->set_flashdata("mesaj","Üye kaydı başarılı...");
        redirect(base_url().'admin/urunler');
    }
    public function duzenle($id)
    {
        $query=$this->db->query("SELECT * FROM kategoriler ");
        $data["veriler"]=$query->result();

        $data["veri"]=$this->Database_model->get_urun($id);
        $this->load->view('admin/urunler_duzenle',$data);
    }
    public function guncelle($id)                  //Alınan verileri değiştirip veritabanına güncelleme yapar.
    {
                                                  //Form verilerini alıcaz
        $data=array(
            'adi' => $this->input->post('adi'),
            'aciklama' => $this->input->post('aciklama'),
            'kategori' => $this->input->post('kategori')
			
            );     		                                //AL VE VERİTABANINA KAYDET.


        $this->Database_model->update_data("urunler",$data,$id);

        redirect(base_url().'admin/urunler');
    }
    public function sil($id)
    {
        $this->db->query("DELETE FROM urunler WHERE Id= $id");
        redirect(base_url().'admin/urunler');
    }

    public function resim_yukle($id)
    {
        $query=$this->db->query("SELECT * FROM urunler WHERE Id= $id");
        $data["veri"]=$query->result();
        $data["id"]=$id;
        $this->load->view('admin/urunler_resim_yukle',$data);
    }

    public function resim_kaydet($id)
    {
        $data["id"]=$id;
        //UPLOAD EDİLECEK DOSYAYA AİT AYARLAR VE LİMİTLER

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;

        // AYARLAR İLE KÜTÜPHANEYİ ÇAĞIR

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim'))  //YÜKLE EĞER HATA VARSA
        {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("mesaj","yükleme de hata oluştu".$error);
            $this->load->view('admin/urunler_resim_yukle',$data);
        }
        else  //HATA YOKSA
        {
            $upload_data = $this->upload->data();

            $data=array(
                'resim' => $upload_data ["file_name"]
            );
            $this->load->model('Database_model');
            $this->Database_model->update_data("urunler",$data,$id);

            redirect(base_url().'admin/urunler');

        }
    }
    public function galeri_yukle($id)
    {
        $query=$this->db->query("SELECT * FROM urunler_resim WHERE urun_id= $id");
        $data["veriler"]=$query->result();

        $data["id"]=$id;
        $this->load->view('admin/urunler_galeri_yukle',$data);
    }

    public function galeri_kaydet($id)
    {
        $data["id"]=$id;
        //UPLOAD EDİLECEK DOSYAYA AİT AYARLAR VE LİMİTLER

        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 1000;
        $config['max_width']            = 1024;
        $config['max_height']           = 1024;

        // AYARLAR İLE KÜTÜPHANEYİ ÇAĞIR

        $this->load->library('upload', $config);

        if ( ! $this->upload->do_upload('resim'))  //YÜKLE EĞER HATA VARSA
        {
            $error = $this->upload->display_errors();
            $this->session->set_flashdata("mesaj","yükleme de hata oluştu".$error);
            $this->load->view('admin/urunler_resim_yukle',$data);
        }
        else  //HATA YOKSA
        {
            // <<<< VERİTABANINA KAYIT >>>>
            $upload_data = $this->upload->data();
            $data=array(
                'urun_id' => $id,
                'resim' => $upload_data ["file_name"]
            );


            $this->db->insert("urunler_resim",$data);

            // <<<< VERİTABANINA KAYIT >>>>
            $this->session->set_flashdata("mesaj","Resim Galeriye Yüklendi");
            redirect(base_url().'admin/urunler/galeri_yukle/'.$id);

        }
    }
    public function galeri_sil($urunid,$resimid)
    {
        $this->db->query("DELETE FROM urunler_resim WHERE Id= $resimid");
        $this->session->set_flashdata("mesaj","Resim Galeriden Silindi..");
        redirect(base_url().'admin/urunler/galeri_yukle/'.$urunid);
    }
}
