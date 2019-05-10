<?php
$this->load->view('_header');
$this->load->view('_uyesidebar');
?>


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">AnaSayfa</a> <span class="divider">/</span></li>
        <li class="active">Siparişlerim</li>
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
                    <th>Tarih</th>
					<th>Adı Soyadı</th>
					<th>Tutar</th>
                    <th>Şehir</th>
                    <th>Durum</th>
					<th>Detay</th>
					
					
			</tr>
			<?php 
			$rn=0;
			$toplam=0;
			foreach($veriler as $rs) {
				$rn++;
			?>
			
			<tr>
                  <td style="width: 10px"><?=$rn?></td>
                    <td><?=$rs->tarih?></td>
					<td><?=$rs->adsoy?></td>
                    <td><?=$rs->tutar?></td>
					<td><?=$rs->sehir?></td>
                    <td><?=$rs->siparisdurumu?></td>
					 
					<td><a href="<?=base_url()?>uye/siparisdetay/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove">Detay</a></td>
             </tr>   
				
			<?php } ?>	

          </tbody>
          </table>
           
    </div>
</div>
</div>

<?php
$this->load->view('_footer');
?>