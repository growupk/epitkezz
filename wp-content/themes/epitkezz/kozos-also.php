<section class="pdf">
    <div class="container">
        <div class="row">
            <h3><?= the_field('mit_tartalmaz_az_ar_cim');?></h3>
        </div>
        <div class="row">
            <div class="col-xs-6 left-btn">
                <div class="plan-btn-box">
                    <a class="plan-btn" target="_blank" href="<?= the_field('teglahaz_pdf');?>"><?php _e('Téglaház','epitkezz')?></a>
                </div>
            </div>
            <div class="col-xs-6 right-btn">
                <div class="plan-btn-box">
                    <a class="plan-btn" target="_blank" href="<?= the_field('thermohaz_pdf');?>"><?php _e('Thermo-ház','epitkezz')?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="house-price">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-lg-4 left-box">
                <img src="<?php the_field('logo_kepe_bal_oldal');?>" alt="logo epitkezz" class="img-responsive">            
            </div>
            <div class="col-xs-12 col-lg-8 right-box">
                <?php the_field('lakas_ara_jobb_oldal');?>
            </div>
        </div>
    </div>
</section>
<section class="everyone-needs-home">
    <div class="container-flid">
        <div class="row">
            <div class="col-xs-6 left-box" style="background-image: url('<?= the_field('mindenkinek_kell_egy_otthon_bal_oldali_hatterkep');?>');">

            </div>
            <div class="col-xs-6 right-box" style="background-image: url('<?= the_field('mindenkinek_kell_egy_otthon_jobb_oldali_hatterkep');?>');">
                <div class="overlay"></div>
                <div class="wrapper">
                    <h3><?php the_field('mindenkinek_kell_egy_otthon_jobb_oldali_cim');?></h3>
                    <h4><?php the_field('mindenkinek_kell_egy_otthon_jobb_oldali_alcim');?></h4>
                    <div class="content">
                        <?php the_field('mindenkinek_kell_egy_otthon_jobb_oldali_szoveges_tartalom');?>
                    </div>    
                </div>    
            </div>
        </div>
    </div>
</section>