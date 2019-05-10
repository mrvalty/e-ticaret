<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uye extends CI_Controller
{

    //Kütüphaneleri Kullanacağımız modelleri tanımlıyoruz.

    public function __construct()
    {
        parent::__construct();

        $this->load->model('Database_model');
        $this->load->helper('url');

        if (!$this->session->userdata("uye_session"))
            redirect(base_url().'home/login_ol');

    }

    public function index()
    {


        $query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();

        $query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
        $data["uye"]=$query->result();

        $data["sayfa"]="Üye Paneli";
        $this->load->view('hesabim',$data);
    }

    //Sitenin tüm kenar,alt ve üst kısmı duruyor sadece hakkımıza tıkladığımız zaman istediğimiz ekran gelir.
    public function hesabim()
    {
        $query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();

        $data["sayfa"]="Üye Hesabı";
        $data["menu"]="uye";

        $query=$this->db->query("SELECT * FROM uyeler WHERE Id=".$this->session->uye_session["id"]);
        $data["uye"]=$query->result();

        $this->load->view('hesabim',$data);
    }
	    public function cikis()
    {
		$this->session->unset_userdata("uye_session");
		redirect(base_url());
	}
	 public function sepetim()
    {
		$query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();
		
	    $data["sayfa"]="Sepetim || ";
        $data["menu"]="sepetim";
		
		$id=$this->session->uye_session["id"];
		$data["veriler"]=$this->Database_model->sepet_urunler($id);
		
        $this->load->view('sepet',$data);
	}
	public function sepete_ekle()
    {
		$data = array(
		    'urun_id' => $this->input->post('urunid'),
			
			'adet' => $this->input->post('miktar'),
			'musteri_id' => $this->session->uye_session["id"]
		
		);
		//print_r($data);
		//exit();
		$this->db->insert("sepet",$data);
		redirect(base_url().'home/urun_detay/'.$this->input->post('urunid'));
	}
	public function sepetsil($id)
    {
		$this->db->query("DELETE FROM sepet WHERE Id=$id");
		$this->session->set_flashdata("mesaj","<p align='center'>Ürün Sepetten Silindi</p>");
		redirect(base_url().'uye/sepetim');
	}
	
	public function satinal()
    {
		$query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();
		$data["sayfa"]="Ödemeler || ";
        $data["menu"]="uye";
		
		$data["toplam"]=$this->input->post('toplam');
		$id=$this->session->uye_session["id"];
		
		$query=$this->db->query("SELECT * FROM uyeler WHERE Id=$id");
		$data["uye"]=$query->result();
		
		$this->load->view('satinal',$data);
	}
	public function siparis_tamamla()
	{
	    $query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();
		$data["sayfa"]="Ödemeler || ";
        $data["menu"]="uye";
    
		//KREDİ KARTI BİLGİLERİNİ AL
		//BANKAYA GÖNDER ONAY GELİRSE İŞLEME DEVAM ET
		
		//Onay geldikten sonra form verilerini alcaz...
		
		
		$data = array(
		    'adsoy' => $this->input->post('adsoy'),
			'musteri_id' => $this->session->uye_session["id"]
			
			
			
		);
		
		//VERİLERİ SİPARİŞ TABLOSUNA EKLE
		$this->db->insert('siparis',$data);
		$siparis_id = $this->db->insert_id();
		
		//SEPETTEKİ ÜRÜNLERİ SİPARİŞ ÜRÜNLERİNE EKLE
		$id=$this->session->uye_session["id"];
		
		//SEPETTEKİ ÜRÜNLERİ SİPARİŞ ÜRÜNLER TABLOSUNA AKTARMA
		$veriler=$this->Database_model->sepet_urunler($id);
		
		foreach ($veriler as $rs){
			$data = array(
		    'adi' => $rs->urunadi,
			'fiyat' => $rs->satfiyat,
			'musteri_id' => $id,
			'urun_id' => $rs->urun_id,
			'siparis_id' => $rs->siparis_id,
			'adet' => $rs->adet,
			'tutar' => $rs->adet * $rs->satfiyat
			
		);
		$this->db->insert("siparis_urunler",$data);
		
		//MÜŞTERİ SEPETİNİ BOŞALT
		$this->db->query("DELETE FROM sepet WHERE musteri_id=$id");
		
		//SİPARİŞ ALINDIĞINA DAİR MÜŞTERİYE MAİL GÖNDER
		redirect(base_url().'uye/islemson');
		
		}
	}
	public function islemson()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();
		$data["sayfa"]="İşlem Tamam || ";
        $data["menu"]="satinalma";
		
		$this->load->view('islemson',$data);
		
	}
	public function siparis()
	{
		$query=$this->db->query("SELECT * FROM ayarlar");
        $data["veri"]=$query->result();
		$data["sayfa"]="Siparislerim || ";
        $data["menu"]="uye";
		
		$query=$this->db->query("SELECT * FROM siparis WHERE musteri_id=".$this->session->uye_session["id"]);
		$data["veriler"]=$query->result();
		
		$this->load->view('siparislerim',$data);
	}
	
	
	
	
	
}