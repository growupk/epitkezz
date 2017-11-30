<?php
    /* Template Name: Főoldal */
    get_header();
?>

<section class="home-top-img" style="background-image: url('<?= the_field('fooldali_felso_kep');?>');">
    <div class="overlay"></div>
    <div class="home-top-img-content">
        <h1><?= the_field('fooldali_felso_kep_szoveg_01');?></h1>
        <p class="second-title"><?= the_field('fooldali_felso_kep_szoveg_02');?></p>
        <a href="<?= get_permalink( get_page_by_title( 'tervkatalogus' ) );?>" class="main-top-img-btn"><?= the_field('fooldali_felso_kep_szoveg_03');?></a>
    </div>
</section>
<section class="planning">
    <div class="conainer-fluid main-title">
        <h2><?= the_field('tervezze_velunk_a_jovojet');?></h2>
    </div>
    <div class="container planning-type">
        <div class="row">
            <h3><?= the_field('miert_valassz_tipustervet');?></h3>
        </div>
        <div class="row">
            <?php if( have_rows('tipustervek') ): ?>
                <?php while( have_rows('tipustervek') ): the_row(); ?>
                    <div class="col-xs-12 col-lg-4">
                        <img src="<?php the_sub_field('tipusterv_logo');?>" alt="icon" class="img-responsive">
                        <p class="planning-sub-title"><?= the_sub_field('tipusterv_cim');?></p>
                        <div class="planning-sub-content">
                            <?= the_sub_field('tipusterv_tartalom');?>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
    <div class="container-fluid opportunities">
        <div class="container">
            <div class="row">
                <?php if( have_rows('lehetosegek') ): ?>
                <?php
                    $counter = 1;
                    ?>
                <?php while( have_rows('lehetosegek') ): the_row(); ?>
                <div class="col-xs-12 col-md-4 opportunitie">
                    <span><?= $counter++;?></span><?php the_sub_field('lehetoseg');?>
                </div>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="implementation">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8 left-box">
                    <h3><?= the_field('kivitelezes_cim');?></h3>
                    <?= the_field('kivitelezes_szoveges_tartalom');?>
                    <?php if( have_rows('kivitelezes_felsorolasok') ): ?>
                        <?php
                            $counter = 1;
                            ?>
                        <?php while( have_rows('kivitelezes_felsorolasok') ): the_row(); ?>
                            <div class="col-xs-12 col-lg-6 counter">
                                <span class="number"><?= $counter++;?></span><span><?php the_sub_field('kivitelezes_felsorolas');?></span>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="hidden-md-down col-sm-4 right-box">
                    <img src="<?php the_field('kivitelezes_jobb_oldali_kep');?>" alt="icon" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="type-of-plan" style="background-image: url('<?= the_field('tipusterv_katalogus_hatter');?>');">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 grey-box">
                <h3><?= the_field('tipusterv_katalogus_cim');?></h3>
                <?= the_field('tipusterv_katalogus_tartalom');?>
                <div class="plan-btn-box">
                    <a href="<?= get_permalink( get_page_by_title( 'tervkatalogus' ) );?>" class="plan-btn"><?= the_field('tipusterv_katalogus_gomb');?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="home-design" style="background-image: url('<?= the_field('tervezes_alapkovei_hatter_kep');?>');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-box">
                <h3><?= the_field('tervezes_alapkovei_cim');?></h3>
                <p><?= the_field('tervezes_alapkovei_szoveg');?></p>
                <a href="#" class="main-top-img-btn"><?= the_field('tervezes_alapkovei_gomb');?></a>
            </div>
        </div>
    </div>
</section> -->
<section class="about-us">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h3><?= the_field('fooldal_rolunk_cim');?></h3>
            </div>
        </div>
        <div class="row background-box" style="background-image: url('<?= the_field('fooldal_rolunk_hatter_kep');?>');">
            <div class="col-xs-12 col-lg-6 left-box">
                <?= the_field('fooldal_rolunk_szoveg_01');?>
            </div>
            <div class="col-xs-12 col-lg-6 right-box">
                <?= the_field('fooldal_rolunk_szoveg_02');?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>