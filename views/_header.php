<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title><?=$sayfa?> <?=$veri[0]->adi?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?=$veri[0]->description?>">
      <meta name="keywords" content="<?=$veri[0]->keywords?>">
    <meta name="author" content="">
    <!-- Bootstrap styles -->
    <link href="<?=base_url()?>assets/css/bootstrap.css" rel="stylesheet"/>
    <!-- Customize styles -->
    <link href="<?=base_url()?>assets/style.css" rel="stylesheet"/>
    <!-- font awesome styles -->
	<link href="<?=base_url()?>assets/font-awesome/css/font-awesome.css" rel="stylesheet">
		<!--[if IE 7]>
			<link href="css/font-awesome-ie7.min.css" rel="stylesheet">
		<![endif]-->

		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	<!-- Favicons -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/ico/favicon.ico">
  </head>
<body>
<!-- 
	Upper Header Section 
-->
<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="topNav">
		<div class="container">
			<div class="alignR">
				<div class="pull-left socialNw">
					<a href="#"><span class="icon-twitter"></span></a>
					<a href="#"><span class="icon-facebook"></span></a>
					<a href="#"><span class="icon-youtube"></span></a>
					<a href="#"><span class="icon-tumblr"></span></a>
				</div>
				<a class="active" href="<?=base_url()?>"> <span class="icon-home"></span>Anasayfa</a> 
				<a href="#"><span class="icon-user"></span>Hesabım</a> 
				<a href="register.html"><span class="icon-edit"></span> Free Register </a> 
				<a href="contact.html"><span class="icon-envelope"></span>İletişim</a>
				<a href="<?=base_url()?>uye/sepetim"><span class="icon-shopping-cart"></span>Sepet <span class="badge badge-warning"></span></a>
			</div>
		</div>
	</div>
</div>

<!--
Lower Header Section 
-->
<div class="container">
<div id="gototop"> </div>
<header id="header">
<div class="row">
	<div class="span4">
	<h1>
	<a class="logo" href="<?=base_url()?>"><span>Twitter Bootstrap ecommerce template</span> 
		<img src="<?=base_url()?>assets/img/logo.jpg" alt="bootstrap sexy shop">
	</a>
	</h1>
	</div>
	<div class="span4">
	</div>
	<div class="span4 alignR">

	</div>
</div>
</header>

<!--Navigation Bar Section -->
<div class="navbar">
	  <div class="navbar-inner">
		<div class="container">
		  <a data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar">
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </a>
		  <div class="nav-collapse">
			<ul class="nav">
			<?php
			$anasayfa=null;
			$hakkimizda=null;
			$iletisim=null;
			$bize_yazin=null;
			$uye=null;
			
			if ($menu=="anasayfa")
				$anasayfa="active";
			if ($menu=="hakkimizda")
				$hakkimizda="active";
			if ($menu=="iletisim")
				$iletisim="active";
			if ($menu=="bize_yazin")
				$bize_yazin="active";
			if ($menu=="uye")
				$uye="active";
			
			?>
                <li class="<?=$anasayfa?>"><a href="<?=base_url()?>">AnaSayfa</a></li>
			    <li class="<?=$hakkimizda?>"><a href="<?=base_url()?>home/hakkimizda">Hakkımızda</a></li>

			    <li class=""><a href="<?=base_url()?>home/kampanyalar">Kampanyalar</a></li>
                <li class="<?=$bize_yazin?>"><a href="<?=base_url()?>home/bize_yazin">Bize Yazın</a></li>
                <li class="<?=$iletisim?>"><a href="<?=base_url()?>home/iletisim">İletişim</a></li>
			</ul>
			<form action="#" class="navbar-search pull-left">
			  <input type="text" placeholder="Search" class="search-query span2">
			</form>
			<ul class="nav pull-right">

                <?php
                if ($this->session->userdata("uye_session"))
                { ?>
                <li class="dropdown <?=$uye?>"> <a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-user"></span>
				<?=$this->session->uye_session["adsoy"]?> <b class="caret"></b></a>
                <div class="dropdown-menu">
                    <a href="<?=base_url()?>uye/hesabim">Hesap Bilgileri</a><br>
                    <a href="<?=base_url()?>uye/sepetim">Sepetim</a><br>
                    <a href="<?=base_url()?>uye/siparisler">Siparişler</a><br>
                    <a href="<?=base_url()?>uye/cikis">Çıkış</a><br>
                </div>
                </li>
                <?php } else

                { ?>

             <li class="dropdown">
				<a data-toggle="dropdown" class="dropdown-toggle" href="#"><span class="icon-user"></span> Login <b class="caret"></b></a>
				<div class="dropdown-menu">
				<form class="form-horizontal loginFrm" method="post" action="<?=base_url()?>home/login">
				  <div class="control-group">
					<input type="email" name="eposta" class="span2" id="inputEmail" placeholder="Email">
				  </div>
				  <div class="control-group">
					<input type="password" name="sifre" class="span2" id="inputPassword" placeholder="Password">
				  </div>
				  <div class="control-group">
					<label class="checkbox">
					<input type="checkbox"> Beni Hatırla
					</label>
					<button type="submit" class="shopBtn btn-block">Giriş</button>
					<a href="<?=base_url()?>uye/yeni_uye"><label class="checkbox">Yeni Üye Kaydı</label></a>
					<a href="<?=base_url()?>uye/sifremi_unuttum"><label class="checkbox">Şifremi Unuttum</label></a>
				  </div>
				</form>
				</div>
			</li>
                <?php } ?>
			</ul>
			</div>
		</div>
	  </div>
	</div>