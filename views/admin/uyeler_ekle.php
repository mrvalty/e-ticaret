<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>



<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Üye Ekleme Formu

        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Üyeler</a></li>
            <li class="active">Üyelerin Eklendiği Bölüm</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">Üye Bilgilerini Gir</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" method="post" action="<?=base_url()?>admin/uyeler/ekle_kaydet">  <!-- kaydet butonuna basıldığı zaman başka sayfaya gideriz.-->
                <div class="box-body">

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Ad Soyad</label>

                        <div class="col-sm-10">
                            <input type="text" name="adsoy" class="form-control" id="inputEmail3" placeholder="Ad Soyad">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>

                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-2 control-label">Sifre</label>

                        <div class="col-sm-10">
                            <input type="password" name="sifre"  class="form-control" id="inputPassword3" placeholder="sifre">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Telefon</label>

                        <div class="col-sm-10">
                            <input type="text" name="tel" class="form-control" id="inputEmail3" placeholder="Telefon">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Adres</label>

                        <div class="col-sm-10">
                            <input type="text" name="adres" class="form-control" id="inputEmail3" placeholder="Adres">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Şehir</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="sehir">
                                <option>Ankara</option>
                                <option>İstanbul</option>
                                <option>Bursa</option>
                                <option>İzmir</option>
                                <option>Kocaeli</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Durum</label>
                        <div class="col-sm-10">

                            <select class="form-control" name="durum">
                                <option>Aktif</option>
                                <option>Pasif</option>

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
                    <button type="submit" class="btn btn-default">İPTAL</button>
                    <button type="submit" class="btn btn-info pull-right">KAYDET</button>
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