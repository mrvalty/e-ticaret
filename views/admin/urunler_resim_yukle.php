<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
           Ürün Ekleme Formu

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Ürünler</a></li>
            <li class="active">Ürün Resim Ekleme Bölümü</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Eklenecek Resmi Seçiniz...</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->

            *Yüklenecek resim dosyası tüleri (gif|jpg|png) max boyut: 1024x1024, boyut: 1000kb

            <?php if($this->session->flashdata("mesaj")){ ?>
                <div class="callout callout-warning">
                    <h4>HATA!</h4>

                    <p><?=$this->session->flashdata("mesaj")?></p>
                </div>
            <?php } ?>

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="<?=base_url()?>admin/urunler/resim_kaydet/<?=$id?>">  <!-- kaydet butonuna basıldığı zaman başka sayfaya gideriz.-->
                <div class="box-body">

                    <div class="form-group">
                        <div class="col-sm-10">

                            <input type="file" name="resim" class="form-control" id="inputEmail3" placeholder="Yükleme İçin Gözat..">

                        </div>
                    </div>

                </div>
                <!-- /.box-body -->
                <div class="box-footer">

                    <button type="submit" class="btn btn-info pull-right">YÜKLE</button>
                </div>
            </form>

            <img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>"height="150">

        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
$this->load->view('admin\_footer');
?>