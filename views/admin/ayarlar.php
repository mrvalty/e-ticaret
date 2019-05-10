<?php
$this->load->view('admin/_header');
$this->load->view('admin/_sidebar');
?>
<!-- Ckeditor -->
<script src="https://cdn.ckeditor.com/4.11.4/standard/ckeditor.js"></script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Site Ayarları
           
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Examples</a></li>
            <li class="active">Blank page</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="col-md-9">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#genel" data-toggle="tab" aria-expanded="true">Genel</a></li>
                    <li class=""><a href="#email" data-toggle="tab" aria-expanded="false">Email</a></li>
                    <li class=""><a href="#sosyal" data-toggle="tab" aria-expanded="false">Sosyal</a></li>
                    <li class=""><a href="#hakkimizda" data-toggle="tab" aria-expanded="false">Hakkımızda</a></li>
                    <li class=""><a href="#iletisim" data-toggle="tab" aria-expanded="false">İletişim</a></li>
                </ul>
                <form method="post" action="<?=base_url()?>admin/home/ayarlar_guncelle/<?=$veri[0]->Id?>"class="form-horizontal">

            <div class="tab-content">
                    <div class="tab-pane active" id="genel">
                        <h4>Genel Ayarlar</h4>
                        <!-- /.post -->
                         <div class="form-group">
                           <label for="inputName" class="col-sm-2 control-label">Adı</label>
                              <div class="col-sm-10">
                                <input type="text" name="adi" value ="<?=$veri[0]->adi?>" class="form-control" id="inputName" placeholder="Name">
                              </div>
                         </div>

                    <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                            <input type="text" name="description" value="<?=$veri[0]->description?>" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>

                     <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Keywords</label>
                        <div class="col-sm-10">
                            <input type="text" name="keywords" value="<?=$veri[0]->keywords?>" class="form-control" id="inputName" placeholder="Name">
                         </div>
                     </div>

                    <div class="form-group">
                             <label for="inputName" class="col-sm-2 control-label">Telefon</label>
                         <div class="col-sm-10">
                            <input type="text" name="tel" value="<?=$veri[0]->tel?>" class="form-control" id="inputName" placeholder="Name">
                         </div>
                     </div>

                    <div class="form-group">
                           <label for="inputName" class="col-sm-2 control-label">Şehir</label>
                        <div class="col-sm-10">
                           <input type="text" name="sehir" value="<?=$veri[0]->sehir?>" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>
                 </div>

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="email">
                        <!-- The timeline -->
                        <h4>EMAİL AYARLARI</h4>
                        <div class="form-group">
                         <label for="inputName" class="col-sm-2 control-label">Smtp Server</label>
                        <div class="col-sm-10">
                            <input type="text" name="smtpserver" value="<?=$veri[0]->smtpserver?>" class="form-control" id="inputName" placeholder="Name">
                        </div>
                    </div>

                     <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Smtp Email</label>
                      <div class="col-sm-10">
                          <input type="text" name="smtpemail" value="<?=$veri[0]->smtpemail?>" class="form-control" id="inputName" placeholder="Name">
                         </div>
                     </div>

                    <div class="form-group">
                      <label for="inputName" class="col-sm-2 control-label">Port</label>
                     <div class="col-sm-10">
                            <input type="text" name="smtpport" value="<?=$veri[0]->smtpport?>" class="form-control" id="inputName" placeholder="Name">
                      </div>
                     </div>

                    <div class="form-group">
                              <label for="inputName" class="col-sm-2 control-label">Şifre</label>
                      <div class="col-sm-10">
                             <input type="password" name="password" value="<?=$veri[0]->password?>" class="form-control" id="inputName" placeholder="Name">
                     </div>
                    </div>

                 </div>

                    <div class="tab-pane" id="sosyal">
                        <h4>SOSYAL MEDYA AYARLARI</h4>
                        <form class="form-horizontal">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Facebook</label>

                                <div class="col-sm-10">
                                    <input type="text" name="facebook" value="<?=$veri[0]->facebook?>"class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Twitter</label>

                                <div class="col-sm-10">
                                    <input type="text"  name="twitter" value="<?=$veri[0]->twitter?>"class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">İnstagram</label>

                                <div class="col-sm-10">
                                    <input type="text"  name="instagram" value="<?=$veri[0]->instagram?>" class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Pinterest</label>

                                <div class="col-sm-10">
                                    <input type="text"  name="pinterest" value="<?=$veri[0]->pinterest?>"class="form-control" id="inputName" placeholder="Name">
                                </div>
                            </div>
                           
						</div>
						</form>
                            <div class="tab-pane" id="hakkimizda">
                                <h4>HAKKIMIZDA BİLGİLERİ</h4>

                                <textarea name="editor1" id="editor1"rows="10" cols="80"><?=$veri[0]->hakkimizda?></textarea>

                                <script>
                                // Replace the <textarea id="editor1"> with a CKEditor
                                 // instance, using default configuration.
                                  CKEDITOR.replace('editor1');
                                </script>
                             </div>
                                <div class="tab-pane" id="iletisim">
                                    <h4>İLETİŞİM BİLGİLERİ</h4>

                                    <textarea name="editor2" id="editor2"rows="10" cols="80"><?=$veri[0]->iletisim?></textarea>

                                    <script>
                                        // Replace the <textarea id="editor1"> with a CKEditor
                                        // instance, using default configuration.
                                        CKEDITOR.replace('editor2');
                                    </script>

                                 </div>
                            
                        
                    
					 <div class="row">
                                 <div class="form-group">
                                   <div class="col-sm-offset-2 col-sm-10">
                                       <button type="submit" class="btn btn-danger">Guncelle</button>
                                   </div>
                                 </div>
                            </div>
                    <!-- /.tab-pane -->
                </div>
			 
                <!-- /.tab-content -->

			</form>
        </div>
		    </div>
        <!-- /.nav-tabs-custom -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php
$this->load->view('admin\_footer');
?>

















