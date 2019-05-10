<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?=base_url()?>uploads/<?=$this->session->admin_session["resim"]?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?=$this->session->admin_session["adsoy"]?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">ANA MENU</li>

            <li><a href="<?=base_url()?>admin"><i class="fa fa-dashboard"></i> <span>Anasayfa</span></a></li>

            <li><a href="<?=base_url()?>admin/uyeler"><i class="fa fa-dashboard"></i> <span>Üyeler</span></a></li>

            <li><a href="<?=base_url()?>admin/urunler"><i class="fa fa-dashboard"></i> <span>Ürünler</span></a></li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-files-o"></i>
                    <span>Siparişler</span>
                    <span class="pull-right-container">
              <span class="label label-primary pull-right">4</span>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="../layout/top-nav.html"><i class="fa fa-circle-o"></i> Yeni</a></li>
                    <li><a href="../layout/boxed.html"><i class="fa fa-circle-o"></i> Onaylananlar</a></li>
                    <li><a href="../layout/fixed.html"><i class="fa fa-circle-o"></i> Kargodakiler</a></li>
                    <li><a href="../layout/collapsed-sidebar.html"><i class="fa fa-circle-o"></i> Tamamlananlar</a></li>
                </ul>
            </li>
            <li>

            <li><a href="<?=base_url()?>admin/mesajlar"><i class="fa fa-dashboard"></i> <span>Müşteri Mesajları</span></a></li>

            <li class="header">GENEL</li>
            <li><a href="<?=base_url()?>admin/home/ayarlar"><i class="fa fa-circle-o text-red"></i> <span>Ayarlar</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Admin</span></a></li>
            <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>