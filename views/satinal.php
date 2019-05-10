<?php
$this->load->view('_header');
?>

<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
        <li class="active">Ödemeler</li>
    </ul>
    <div class="well well-small">


        <form class="form-horizontal" method="post" action="<?=base_url()?>uye/siparis_tamamla">

            <?php if($this->session->flashdata("mesaj")){ ?>
                <div class="callout callout-info">
                    <p><?=$this->session->flashdata("mesaj")?></p>
                </div>
            <?php } ?>
			
            <div class="control-group">
			<h3> TESLİMAT BİLGİLERİ </h3>
                <label class="control-label" for="inputFname" class="col-sm-2 control-label">Ad Soyad <sup>*</sup></label>
                  <div class="controls">
                    <input type="text" name="adsoy" value ="<?=$uye[0]->adsoy?>" placeholder="Ad Soyad">
                </div>
            </div>

            <div class="control-group">
                <label class="control-label" for="inputLname" class="col-sm-2 control-label">Telefon Numarası <sup>*</sup></label>
                    <div class="controls">
                    <input type="text" name="tel" value ="<?=$uye[0]->tel?>" placeholder="Telefon Numarası">
                </div>
            </div>


            <div class="control-group">
                <label class="control-label" >Adres <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="adres" value ="<?=$uye[0]->adres?>" placeholder="Adres">
                </div>
            </div>
			<div class="control-group">
                <label class="control-label" >Şehir <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="sehir" value ="<?=$uye[0]->sehir?>" placeholder="Şehir">
                </div>
            </div>
			<div class="control-group">
                <label class="control-label" >Toplam Tutar</label>
                <div class="controls">
                    <input type="text" name="toplam" readonly value ="<?=$toplam?>">
                </div>
            </div>
			<h3>KART BİLGİLERİ </h3>			
			<div class="card-head"><label>Kart Numarası</label></div>
			<div class="control-group">
                
                <input type="text" id="card-number" maxlength="19" class="error">
                <div class="tooltip"><i class="icon-help-circle"></i>
                    <div class="text">Lütfen kredi kartı numaranızı giriniz</div>
                </div>
          
            </div>
			<div class="card-head"><label>Son Kullanma Tarihi</label></div>
			     
			<div class="last-usage-date">
			    <div>
                    <div class="select-wrapper"><select id="card-date-month" class="error" width="20">
                            <option disabled="disabled" value="" selected="selected">Ay</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        
                    </div>
				</div>
					<div class="card-head"> </div>
                    <div class="select-wrapper">
					    <select id="card-date-year" class="error">
                            <option disabled="disabled" value="" selected="selected">Yıl</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                            <option value="2026">2026</option>
                            <option value="2027">2027</option>
                            <option value="2028">2028</option>
                            <option value="2029">2029</option>
                            <option value="2030">2030</option>
                            <option value="2031">2031</option>
                            <option value="2032">2032</option>
                            <option value="2033">2033</option>
                            <option value="2034">2034</option>
                            <option value="2035">2035</option>
                            <option value="2036">2036</option>
                            <option value="2037">2037</option>
                            <option value="2038">2038</option>
                            <option value="2039">2039</option>
                        </select>
                    </div>
                   
					
			<div>
                <div class="card-head"><label>CVV</label></div>
			<div class="control-group">
                
                <input type="tel" id="card-number" maxlength="3" class="error">
                <div class="tooltip"><i class="icon-help-circle"></i>
                    <div class="text">Lütfen cvv numaranızı giriniz</div>
                </div>
          
            </div>
        </div>			
</div>
				
			<div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value ="Siparişi Tamamla" class="exclusive shopBtn">
                </div>
            </div>
		</div>
    </form>
</div>

<?php
$this->load->view('_footer');
?>