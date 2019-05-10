<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Ürünler Düzenleme Formu

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Üyeler</a></li>
            <li class="active">Ürünlerin Düzenlendiği Bölüm</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Ürün Bilgilerini Gir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?=base_url()?>admin/urunler/guncelle/<?=$veri[0]->Id?>">  <!-- kaydet butonuna basıldığı zaman başka sayfaya gideriz.-->
                <div class="box-body">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Adi</label>

                        <div class="col-sm-10">
                            <input type="text" name="adi" value ="<?=$veri[0]->adi?>" class="form-control" id="inputEmail3" placeholder="Ad Soyad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Açıklama</label>

                        <div class="col-sm-10">
                           <textarea name="aciklama" rows="10" cols="100"><?=$veri[0]->aciklama?></textarea>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Kategori</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sehir">
                                <option value="<?=$veri[0]->kategori?>"><?=$veri[0]->katadi?></option>
                                 <?php foreach ($veriler as $rs) { ?>
                                     <option value="<?=$rs->Id?>"><?=$rs->adi?></option>
                               <?php } ?>

                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Yetki</label>
                        <div class="col-sm-10">

                            <select class="form-control" name="yetki">

                                <option>Admin</option>
                                <option>Misafir</option>

                            </select>
                        </div>
                    </div>



                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-info pull-right">GÜNCELLE</button>
                </div>
                <!-- /.box-footer -->
            </form>
        </div>

    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<?php
$this->load->view('admin\_footer');
?>
<script src="<?=base_url()?>assets/admin/bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?=base_url()?>assets/admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('aciklama')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>
