<?php
$this->load->view('_header');
?>

<div class="well well-small">
	<h3>Masal Kitapları </h3>
		<div class="row-fluid">
		  <ul class="thumbnails">
		  
		    <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[0]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[0]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[0]->adi?></p>
					<p><strong><?=$masal[0]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle">Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[1]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[1]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[1]->adi?></p>
					<p><strong><?=$masal[1]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="<?=base_url()?>uye/sepete_ekle" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a  href="<?=base_url()?>home/urun_detay<?=$masal[2]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[2]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[2]->adi?></p>
					<p><strong><?=$masal[2]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[3]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[3]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[3]->adi?></p>
					<p><strong><?=$masal[3]->sfiyat?></strong><strong>TL</strong></p>
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
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[4]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[4]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[4]->adi?></p>
					<p><strong><?=$masal[4]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[5]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[5]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[5]->adi?></p>
					<p><strong><?=$masal[5]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[6]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[6]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[6]->adi?></p>
					<p><strong><?=$masal[6]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[7]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[7]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[7]->adi?></p>
					<p><strong><?=$masal[7]->sfiyat?></strong><strong>TL</strong></p>
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
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[8]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[8]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[8]->adi?></p>
					<p><strong><?=$masal[8]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[9]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[9]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[9]->adi?></p>
					<p><strong><?=$masal[9]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[10]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[10]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[10]->adi?></p>
					<p><strong><?=$masal[10]->sfiyat?></strong><strong>TL</strong></p>
					<h4><a class="shopBtn" href="#" title="Sepete Ekle"> Sepete Ekle </a></h4>
					<div class="actionList">
						<a class="pull-left" href="#">Add to Wish List </a> 
						<a class="pull-left" href="#">Add to Compare </a>
					</div> 
					<br class="clr">
				</div>
			  </div>
			</li>
			 <li class="span3">
			  <div class="thumbnail">
				<a href="product_details.html" class="overlay"></a>
				<a href="<?=base_url()?>home/urun_detay<?=$masal[11]->Id?>" height=357 ></a>
				<a href="product_details.html"><img src="<?=base_url()?>uploads/<?=$masal[11]->resim?>" alt=""></a>
				<div class="caption cntr">
					<p><?=$masal[7]->adi?></p>
					<p><strong><?=$masal[7]->sfiyat?></strong><strong>TL</strong></p>
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
