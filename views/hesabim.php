<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
        <li class="active">Üye Hesap</li>
    </ul>
    <div class="well well-small">


        <form class="form-horizontal" method="post" action="<?=base_url()?>uye/uye_guncelle">
            <h3>Üye Hesap Bilgileri</h3><br/>

            <?php if($this->session->flashdata("mesaj")){ ?>
                <div class="callout callout-info">
                    <p><?=$this->session->flashdata("mesaj")?></p>
                </div>
            <?php } ?>
			
            <div class="control-group">
                <label class="control-label" for="inputEmail3" class="col-sm-2 control-label">Ad Soyad <sup>*</sup></label>
                  <div class="controls">
                    <input type="text" name="adsoy" value ="<?=$uye[0]->adsoy?>" class="form-control" id="inputEmail3" placeholder="Ad Soyad">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail3" class="col-sm-2 control-label">Email <sup>*</sup></label>
                    <div class="controls">
                    <input type="email" name="email" value ="<?=$uye[0]->email?>" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
			
            <div class="control-group">
                <label class="control-label" for="inputPassword3" class="col-sm-2 control-label">Sifre <sup>*</sup></label>
                    <div class="controls">
                    <input type="password" name="sifre" value ="<?=$uye[0]->sifre?>"  class="form-control" id="inputPassword3" placeholder="sifre">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail3" class="col-sm-2 control-label">Telefon <sup>*</sup></label>
                    <div class="controls">
                    <input type="text" name="tel" value ="<?=$uye[0]->tel?>" class="form-control" id="inputEmail3" placeholder="Telefon">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" >Adres <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="adres" value ="<?=$uye[0]->adres?>" class="form-control" id="inputEmail3" placeholder="Adres">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputEmail3" class="col-sm-2 control-label">Şehir <sup>*</sup></label>
                <div class="controls">
                    <select class="form-control" name="sehir">
                        <option><?=$uye[0]->sehir?></option>
                        <option>Ankara</option>
                        <option>İstanbul</option>
                        <option>Bursa</option>
                        <option>İzmir</option>
                        <option>Kocaeli</option>
                    </select>
                </div>
            </div>
        </form>





    </div>
</div>

<?php
$this->load->view('_footer');
?>