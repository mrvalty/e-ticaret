<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>



<!-- Body Section -->
	<div class="row">

	<div class="span9">
    <ul class="breadcrumb">
    <li><a href="index.html">Home</a> <span class="divider">/</span></li>
    <li><a href="products.html">Ürün</a> <span class="divider">/</span></li>
    <li class="active">Detay</li>
    </ul>	
	<div class="well well-small">
	<div class="row-fluid">
		<div class="span5">
			
                <div class="carousel-inner">
				 <div class="item active">
				  <a href="#"> <img src="<?=base_url()?>uploads/kitap6.jpg" alt="" style="width:100%"></a>
                  </div> 
                </div>
                
		</div>
			<div class="span7">
				<h3><?=$yeni[0]->adi?></h3>
				<hr class="soft"/>
				
				<form class="form-horizontal qtyFrm" method="post" action="<?=base_url()?>uye/sepete_ekle">
				  <div class="control-group">
					<label class="control-label"><span><?=$yeni[0]->sfiyat?></span><span>TL</span></label>
					<div class="controls">
					<input type="hidden" name="urunid" value="<?=$yeni[0]->Id?>" class="span6" placeholder="Adet">
					<label class="control-label"><span>Stok Miktarı :<?=$yeni[0]->stok?> Adet</span></label>
					<input type="number" name="miktar" value="1" class="span6" placeholder="Qty." min="1" max="<?=$yeni[0]->stok?>">Adet
					</div>
				  </div>
				
				
				  <div class="control-group">
					<label class="control-label"><span>Materials</span></label>
					<div class="controls">
					  <select class="span11">
						  <option>Material 1</option>
						  <option>Material 2</option>
						  <option>Material 3</option>
						  <option>Material 4</option>
						</select>
					</div>
				  </div>
				  <h4>100 items in stock</h4>
				  <p>Nowadays the lingerie industry is one of the most successful business spheres.
				  Nowadays the lingerie industry is one of ...
				  <p>
				  <button type="submit" class="shopBtn" value="Sepete Ekle"><span class=" icon-shopping-cart"></span>Sepete Ekle</button>
				</form>
			</div>
			</div>
				<hr class="softn clr"/>


            <ul id="productDetail" class="nav nav-tabs">
              <li class="active"><a href="#home" data-toggle="tab">Ürün Detayları</a></li>
              <li class=""><a href="#profile" data-toggle="tab">İlgili Ürünler</a></li>
             
            </ul>
            <div id="myTabContent" class="tab-content tabWrapper">
            <div class="tab-pane fade active in" id="home">
			  <h4>Product Information</h4>
                <table class="table table-striped">
				<tbody>
				<tr class="techSpecRow"><td class="techSpecTD1"><?=$yeni[0]->aciklama?></td><td class="techSpecTD2">Black</td></tr>
				
				</tbody>
				</table>
				<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
			</div>
			
			</div>
            </div>
    </div>
  </div>
</div> <!-- Body wrapper -->

<?php
$this->load->view('_footer');
?>



