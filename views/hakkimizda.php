<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>


<div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">AnaSayfa</a> <span class="divider">/</span></li>
        <li class="active">Hakkımızda</li>
    </ul>
    <div class="well well-small">

        <h3>Hakkımızda</h3><br/>




        <p>
            <?=$veri[0]->hakkimizda?>

        </p>


    </div>
</div>
</div>

<?php
$this->load->view('_footer');
?>