<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    //Kütüphaneleri Kullanacağımız modelleri tanımlıyoruz.

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Database_model');
        $this->load->helper('url');

    }

    public function index()
    {
		$query = $this->db->query("SELECT COUNT(*) FROM sepet");
        $data["sep"] = $query->result();
		
        $query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
        $data["kategoriler"] = $query->result();
		
		$query = $this->db->query("SELECT * FROM ayarlar");
        $data["veri"] = $query->result();
		
        $query = $this->db->query("SELECT * FROM urunler");
		$data["yeni"]=$query->result();
		
        $data["sayfa"] = "";
		$data["menu"] = "anasayfa";


        $this->load->view('_header', $data);
        $this->load->view('_sidebar');
        $this->load->view('_slider');
        $this->load->view('_content');
        $this->load->view('_footer');

    }

    //Sitenin tüm kenar,alt ve üst kısmı duruyor sadece hakkımıza tıkladığımız zaman istediğimiz ekran gelir.

    public function hakkimizda()
    {
        $query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
        $data["kategoriler"] = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["veri"] = $query->result();
        $data["sayfa"] = "Hakkımızda || ";
        $data["menu"] = "hakkimizda";

        $this->load->view('hakkimizda', $data);

    }

    public function iletisim()
    {
        $query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
        $data["kategoriler"] = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["veri"] = $query->result();
        $data["sayfa"] = "İletişim || ";
        $data["menu"] = "iletisim";

        $this->load->view('iletisim', $data);

    }
    public function bize_yazin()
    {
        $query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
        $data["kategoriler"] = $query->result();

        $query = $this->db->query("SELECT * FROM ayarlar");
        $data["veri"] = $query->result();
        $data["sayfa"] = "Bize Yazın || ";
        $data["menu"] = "bize_yazin";

        $this->load->view('bize_yazin', $data);

    }
    public function mesaj_kaydet()
    {
        //Form verilerini alıcaz

        $data=array(
            'adsoy' => $this->input->post('adsoy'),
            'email' => $this->input->post('eposta'),
            'tel'   => $this->input->post('tel'),
            'mesaj' => $this->input->post('mesaj'),
            'ip' => $_SERVER['REMOTE_ADDR']
        );                                                 //AL VE VERİTABANINA KAYDET.
        $this->db->insert("mesajlar",$data);
        $this->session->set_flashdata("mesaj","Mesaj İletildi...");
        redirect(base_url().'home/bize_yazin');

    }
	public function login_ol()
    {
		$query = $this->db->query("SELECT * FROM ayarlar");
		$data["veri"]=$query->result();
		$data["sayfa"] = "Üye Login || ";
		$data["menu"]="uye";

        $this->load->view('login_ol',$data);
	}
	public function login()
    {
        $email=$this->input->post('eposta');
        $sifre=$this->input->post('sifre');

        //zararlı kodlardan temizleme

        echo $email = $this->security->xss_clean($email);
        echo $sifre = $this->security->xss_clean($sifre);
        		//exit();
		
        $this->load->model('Database_model');           //Result değişkeninin içine database'den alınan veriler yüklenir.
        $result = $this->Database_model->login("uyeler",$email,$sifre);
		
        if ($result)
        {

            //Kullanıcı var ise bilgileri diziye aktarıyor.
            $sess_array = array(
                "id"=> $result[0]->Id,
                "yetki"=> $result[0]->yetki,
                "email"=> $result[0]->email,
                "adsoy"=> $result[0]->adsoy,
                "resim"=> $result[0]->resim

            );
            //print_r("$sess_array");
            //echo "Login Oldu";
            //exit();
            //session verilerini atama
            $this->session->set_userdata("uye_session",$sess_array);
            redirect(base_url());
        }
        else
        {
            $this->session->set_flashdata("mesaj","Hatalı şifre ya da kullanıcı adi girdiniz");  //Kullanıcı yanlış girdiyse mesaj verir.
            redirect(base_url().'home/login_ol');
        }
	}
	public function urun_detay($id)
    {
		$query = $this->db->query("SELECT * FROM kategoriler ORDER BY adi");
        $data["kategoriler"] = $query->result();
		$data["menu"]="urun";
		$data["sayfa"] = "Ürün || ";
		
		$query = $this->db->query("SELECT * FROM ayarlar");
        $data["veri"] = $query->result();
		
	    $query = $this->db->query("SELECT * FROM urunler WHERE id=$id");
		$data["yeni"] = $query->result();
		
		$this->load->view('urun_detay',$data);
	}
  public function kitap()
  {
	  $query = $this->db->query("SELECT * FROM kitaplar ORDER BY Id");
	  $data["kitap"]=$query->result();
	  $data["menu"]="kitap";
	  $data["sayfa"]="Kitaplar || ";
	  
	  $query = $this->db->query("SELECT * FROM ayarlar");
      $data["veri"] = $query->result();
	  
	  $this->load->view('kitap_urun',$data);
  }
   public function edebiyat()
  {
	  $query = $this->db->query("SELECT * FROM edebiyat ORDER BY Id");
	  $data["edebiyat"]=$query->result();
	  $data["menu"]="kitap";
	  $data["sayfa"]="Edebiyat || ";
	  
	  $query = $this->db->query("SELECT * FROM ayarlar");
      $data["veri"] = $query->result();
	  
	  $this->load->view('edebiyat_urun',$data);
  }
   public function masal()
  {
	  $query = $this->db->query("SELECT * FROM masal ORDER BY Id");
      $data["masal"]=$query->result();
	  $data["menu"]="kitap";
	  $data["sayfa"]="Masal || ";
	  
	  $query = $this->db->query("SELECT * FROM ayarlar");
      $data["veri"] = $query->result();
	  
	  $this->load->view('masal_urun',$data);
  }
  public function hikaye()
  {
	  $query = $this->db->query("SELECT * FROM hikaye ORDER BY Id");
      $data["hikaye"]=$query->result();
	  $data["menu"]="kitap";
	  $data["sayfa"]="Hikaye || ";
	  
	  $query = $this->db->query("SELECT * FROM ayarlar");
      $data["veri"] = $query->result();
	  
	  $this->load->view('hikaye_urun',$data);
	  
  }
}