<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">AnaSayfa</a> <span class="divider">/</span></li>
        <li class="active">Bize Yazın</li>
    </ul>
    <div class="well well-small">


        <form class="form-horizontal" method="post" action="<?=base_url()?>home/mesaj_kaydet">
            <h3>Mesajlarınız...</h3><br/>

            <?php if($this->session->flashdata("mesaj")){ ?>
                <div class="callout callout-info">
                    <p><?=$this->session->flashdata("mesaj")?></p>
                </div>
            <?php } ?>

            <div class="control-group">
                <label class="control-label" for="inputFname">Adı Soyadı <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="adsoy" placeholder="AdıSoyadı">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputLname">Telefon <sup>*</sup></label>
                <div class="controls">
                    <input type="text" name="tel" placeholder="Telefon">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
                <div class="controls">
                    <input type="email" name="eposta" placeholder="Email">
                </div>
            </div>
            <div class="control-group">
                <label class="control-label">Mesaj <sup>*</sup></label>
                <div class="controls">
                    <textarea name="mesaj" rows="10" cols="30"></textarea>
                </div>
            </div>
            <div class="control-group">

            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value="GÖNDER" class="exclusive shopBtn">
                </div>
            </div>
        </form>





    </div>
</div>

<?php
$this->load->view('_footer');
?>