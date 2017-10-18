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
                    <div class="col-sm-4">
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
                <div class="col-sm-4 opportunitie">
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
                <div class="col-sm-8 left-box">
                    <h3><?= the_field('kivitelezes_cim');?></h3>
                    <?= the_field('kivitelezes_szoveges_tartalom');?>
                    <?php if( have_rows('kivitelezes_felsorolasok') ): ?>
                        <?php
                            $counter = 1;
                            ?>
                        <?php while( have_rows('kivitelezes_felsorolasok') ): the_row(); ?>
                            <div class="col-sm-6 counter">
                                <span class="number"><?= $counter++;?></span><span><?php the_sub_field('kivitelezes_felsorolas');?></span>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4 right-box">
                    <img src="<?php the_field('kivitelezes_jobb_oldali_kep');?>" alt="icon" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>