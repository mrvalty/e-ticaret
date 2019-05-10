<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Üyelerin Listesi
            <?=$this->session->flashdata("mesaj")?>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Üyeler</a></li>
            <li class="active">Üyelerin Listesi</li>
        </ol>
    </section>

    <!-- Main content -->

    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">
                <a href="<?=base_url()?>admin/uyeler/ekle" class="btn btn-block btn-info" ><i class="fa   fa-plus-square"></i>Üye Ekle</a></h3>

        </div>

        <!-- /.box-header -->

        <div class="box-body">
            <table class="table table-bordered">
                <tr>
                    <th style="width: 10px">S.No</th>
                    <th>Adı Soyadı</th>
                    <th>Email</th>
                    <th>Telefon</th>
                    <th>Şehir</th>
                    <th>Adres</th>
                    <th>Yetki</th>
                    <th>Durum</th>
                    <th>Düzenle</th>
                    <th>Sil</th>
                </tr>

               <?php
				$sno=0;
			    foreach ($veriler as $rs)  //Döngü oluşturuyoruz birden fazla verimiz için.
			    {   $sno++;

			?>
				<tr>
                  <td style="width: 10px"><?=$sno?></td>
                  <td><?=$rs->adsoy?></td>
                  <td><?=$rs->email?></td>
                  <td><?=$rs->tel?></td>
				  <td><?=$rs->sehir?></td>
				  <td><?=$rs->adres?></td>
				  <td><?=$rs->yetki?></td>
				  <td><?=$rs->durum?></td>
                    <td><a href="<?=base_url()?>admin/uyeler/duzenle/<?=$rs->Id?>" class="btn btn-block btn-danger btn-xs"><i class="fa fa-edit"></i> Düzenle</a></td>
                    <td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" onclick="return confirm('Emin misiniz?')" class="btn btn-block btn-danger btn-xs"><i class="fa fa-remove">Sil</a></td>
                </tr>

                    <?php
                }
               ?>

            </table>
        </div>
        <!-- /.box-body -->
        <div class="box-footer clearfix">
            <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">&laquo;</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">&raquo;</a></li>
            </ul>
        </div>
</div>
<!-- /.box -->

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
$this->load->view('admin\_footer');
?>