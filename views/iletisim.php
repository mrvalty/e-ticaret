<?php
$this->load->view('_header');
$this->load->view('_sidebar');
?>

    <div class="span9">
    <ul class="breadcrumb">
        <li><a href="<?=base_url()?>">AnaSayfa</a> <span class="divider">/</span></li>
        <li class="active">İletişim</li>
    </ul>
    <div class="well well-small">

        <h3>İletişim</h3><br/>
        <!-- Body Section -->
        <hr class="soften">
        <div class="well well-small">
            <h2>Bizi Ziyaret Et </h2>
            <hr class="soften"/>
            <div class="row-fluid">
                <div class="span8 relative">
                    <iframe style="width:100%; height:350px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="http://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;aq=1&amp;oq=NewBoston,+MA,+United+States&amp;sll=42.347238,-71.084011&amp;sspn=0.014099,0.033023&amp;ie=UTF8&amp;hq=Newbury+Street,+Boston,+MA,+United+States&amp;t=m&amp;ll=42.348994,-71.088248&amp;spn=0.001388,0.006276&amp;z=18&amp;iwloc=A&amp;output=embed"></iframe>


                </div>

                <div class="span4">
                    <h4>Bizimle İletişim Kur</h4>

                    <?=$veri[0]->iletisim?>
                </div>
            </div>
        </div>
</div>
</div>

<?php
$this->load->view('_footer');
?>