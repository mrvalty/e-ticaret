<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">AnaSayfa</a> <span class="divider">/</span></li>
        <li class="active">Sepetim</li>
    </ul>
    <div class="well well-small">
	
	            <?php if($this->session->flashdata("mesaj")){ ?>
                <div class="callout callout-info">
                    <p><?=$this->session->flashdata("mesaj")?></p>
                </div>
                <?php } ?>

        <table class="table table-bordered">
		<tbody>
		    <tr>
                    <th style="width: 10px">No</th>
                    <th>Adı</th>
					<th>Foto</th>
                    <th>Fiyat</th>
                    <th>Miktar</th>
                    <th>Tutar</th>
                    <th>Sil</th>
			</tr>
			<?php 
			$rn=0;
			$toplam=0;
			foreach($veriler as $rs) {
				$rn++;
				$tutar=$rs->satfiyat * $rs->adet;
				$toplam+=$tutar;
			?>
			
			<tr>
                  <td style="width: 10px"><?=$rn?></td>
                    <td><?=$rs->urunadi?></td>
					<td>
					<a href="<?=base_url()?>home/urun_detay/<?=$rs->urun_id?>">
					<img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" width="50">
					</a>
					</td>
                    <td><?=$rs->satfiyat?></td>
                    <td><?=$rs->adet?></td>
					
                    <td><?=($rs->satfiyat * $rs->adet)?> TL</td>
					<td><a href="<?=base_url()?>uye/sepetsil/<?=$rs->Id?>" 
					onclick="return confirm('Emin misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove">Sil</a></td>
             </tr>   
				
			<?php } ?>	

          </tbody>
          </table>
              Toplam : <?=$toplam?>
			  <form method="post" action="<?=base_url()?>uye/satinal">
			  <input type ="hidden" name="toplam" value="<?=$toplam?>">
			  <button type ="submit" class="shopBtn" value="Sepete Ekle">Satın Al</button>
			  </form>
    </div>
</div>
</div>

<?php
$this->load->view('_footer');
?>