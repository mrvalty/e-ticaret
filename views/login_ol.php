<?php
$this->load->view('_header');
?>


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">Anasayfa</a> <span class="divider">/</span></li>
        <li class="active">Üye Hesap</li>
    </ul>
    <div class="well well-small">


        <form class="form-horizontal" method="post" action="<?=base_url()?>home/login">
            <h3>Üye Login</h3><br/>

            <?php if($this->session->flashdata("mesaj")){ ?>
                <div class="callout callout-info">
                    <p><?=$this->session->flashdata("mesaj")?></p>
                </div>
            <?php } ?>

          
            
            <div class="control-group">
                <label class="control-label" for="inputEmail">Email <sup>*</sup></label>
                <div class="controls">
                    <input type="email" name="eposta" placeholder="Email">
                </div>
            </div>
              <div class="control-group">
                <label class="control-label" for="inputFname">Şifre<sup>*</sup></label>
                <div class="controls">
                    <input type="password" name="sifre" placeholder="Password">
                </div>
            </div>
            <div class="control-group">

            </div>
            <div class="control-group">
                <div class="controls">
                    <input type="submit" name="submitAccount" value="GİRİŞ" class="exclusive shopBtn">
                </div>
            </div>
        </form>





    </div>
</div>

<?php
$this->load->view('_footer');
?>