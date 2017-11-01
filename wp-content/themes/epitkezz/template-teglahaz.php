<?php
    /* Template Name: Téglaház */
    get_header();
?>

<section class="brick-house-header" style="background-image: url('<?= the_field('teglahaz_fejlec_kep');?>');">
    <div class="img-text">
        <h3><?= the_field('teglahaz_fejlec_szoveg_01');?></h3>
        <h4><?= the_field('teglahaz_fejlec_szoveg_02');?></h4>
    </div>
    <div class="red-bottom-border">
        <div class="logo">
            <img src="<?php the_field('teglahaz_fejlec_logo');?>" alt="logo teglaház" class="img-responsive">
            <a href="<?= the_field('teglahaz_fejlec_jobb_also_link');?>"><?= the_field('teglahaz_fejlec_jobb_also_link');?></a>
        </div>
    </div>
</section>
<section class="brick-type">
    <div class="container">
        <h3><?= the_field('teglahaz_teglatipusok_cim');?></h3>
        <div class="row">
            <?php if( have_rows('teglahaz_tegla_tipusok') ): ?>
                <?php while( have_rows('teglahaz_tegla_tipusok') ): the_row(); ?>
                    <div class="col-xs-12 col-lg-4 brick">
                        <h4><?= the_sub_field('teglahaz_tegla_tipus');?></h4>
                        <img src="<?php the_sub_field('teglahaz_tegla_tipus_kep');?>" alt="tégla típus" class="img-responsive">
                        <p class="sub-title"><?= the_sub_field('teglahaz_tegla_tipus_alcim');?></p>
                        <span class="bottom-content"><?= the_sub_field('teglahaz_tegla_tipus_leiras');?></span>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<section class="heating" style="background-image: url('<?= the_field('teglahaz_futes_rendszer_hatterkep');?>');">
    <div class="overlay"></div>
    <h3><?= the_field('teglahaz_futes_rendszer_cim');?></h3>
    <div class="container">
        <div class="row">
            <?= the_field('teglahaz_futes_rendszer_szoveges_tartalom');?>
            <a target="_blank" href="https://www.bvfheating.hu/futofilm-futofolia/?gclid=Cj0KEQjwuOHHBRDmvsHs8PukyIQBEiQAlEMW0KKc_1X2kjz_UyGB6GjXcC6dupmD_f5bYBfZ18qT6jUaAjwS8P8HAQ"><img src="<?php echo get_bloginfo('stylesheet_directory');?>/assets/img/galeo-color.png" alt="tégla típus" class="img-responsive"></a>
        </div>
    </div>
</section>
<section class="solar-panel">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h3><?= the_field('futeskoltseg_cim');?></h3>
            </div>
            <div class="col-xs-12 top-content">
                <?= the_field('futeskoltseg_szoveges_tartalom');?>
            </div>
            <div class="col-xs-12 sub-title">
                <h4><?= the_field('napelemes_rendszerek_elonyei_cim');?></h4>
            </div>
            <?php if( have_rows('napelemes_rendszerek_elonyei') ): ?>
                <?php
                    $counter = 1;
                ?>
                <div class="col-xs-12 col-lg-7 sub-content-box">
                <?php while( have_rows('napelemes_rendszerek_elonyei') ): the_row(); ?>
                    <div class="col-xs-12 sub-content">
                        <span><?= $counter++;?></span><?= the_sub_field('napelemes_rendszerek_elonyei_felsorolas');?>
                    </div>
                <?php endwhile; ?>
                </div>
            <?php endif; ?>
            <div class="col-xs-12 col-lg-5 img-box">
                <img src="<?php the_field('napelemes_rendszerek_elonyei_jobb_oldali_kep');?>" alt="napelem ház" class="img-responsive">
            </div>
        </div>
    </div>
</section>
<section class="pdf">
    <div class="container">
        <div class="row">
            <h3><?= the_field('mit_tartalmaz_az_ar_cim');?></h3>
        </div>
        <div class="row">
            <div class="col-xs-12 col-lg-6 left-btn">
                <div class="plan-btn-box">
                    <a class="plan-btn" target="_blank" href="<?= the_field('teglahaz_pdf');?>"><?php _e('Téglaház','epitkezz')?></a>
                </div>
            </div>
            <div class="col-xs-12 col-lg-6 right-btn">
                <div class="plan-btn-box">
                    <a class="plan-btn" target="_blank" href="<?php echo $file[the_field('teglahaz_pdf')]; ?>"><?php _e('Thermo-ház','epitkezz')?></a>
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

<?php get_footer(); ?>