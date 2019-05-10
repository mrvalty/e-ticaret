<?php
$this->load->view('_header');
?>

<div class="well well-small">
	<h3>Hikaye Kitapları </h3>
		<div class="row-fluid">
		  <ul class="thumbnails">
		  
		    <li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$hikaye[0]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$hikaye[0]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$hikaye[0]->adi?></p>
					<p><strong><?=$hikaye[0]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle">Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			 <li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$hikaye[1]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$hikaye[1]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$hikaye[1]->adi?></p>
					<p><strong><?=$hikaye[1]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="<?=base_url()?>uye/sepete_ekle" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			 <li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a  href="<?=base_url()?>home/urun_detay<?=$hikaye[2]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$hikaye[2]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$hikaye[2]->adi?></p>
					<p><strong><?=$hikaye[2]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			
		</ul>
	</div>
		
		<div class="row-fluid">
		  <ul class="thumbnails">
			 <li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$hikaye[3]->Id?>" ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$hikaye[3]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$hikaye[3]->adi?></p>
					<p><strong><?=$hikaye[3]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$hikaye[4]->Id?>"></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$hikaye[4]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$hikaye[4]->adi?></p>
					<p><strong><?=$hikaye[4]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span4">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$hikaye[5]->Id?>" ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$hikaye[5]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$hikaye[5]->adi?></p>
					<p><strong><?=$hikaye[5]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
		  </ul>
		</div>
		
</div>

<?php
$this->load->view('_footer');
?>
