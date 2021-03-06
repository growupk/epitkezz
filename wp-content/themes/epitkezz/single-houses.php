<?php
    get_header();
?>

<section class="single-house-top" style="background-image: url('<?= the_field('haz_tipus_aloldal_felso_fejlec_kep');?>');">
    <div class="container-fluid">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-title">
                    <h1 class="post-title"><?php the_title(); ?> <?php _e('TIPUSTERV','epitkezz');?></h1>
                </div>
            <?php endwhile; ?>        
        </div>    
    </div>
</section>
<section class="house-datas">
    <div class="container">
        <div class="row">
            <div class="datas-title">
                <h2><?= the_field('haz_tipus_aloldal_adatok_cim');?></h2>
            </div>
            <div class="house-parameters">
                <?php if( have_rows('haz_tipus_aloldal_alap_adatok') ): ?>
                    <?php while( have_rows('haz_tipus_aloldal_alap_adatok') ): the_row(); ?>
                        <div class="col-xs-12 param">
                            <div class="img-container">
                                <img src="<?php the_sub_field('haz_tipus_aloldal_alap_adat_kep');?>" alt="icon" class="img-responsive">
                            </div>
                            <p class="text-01"><?= the_sub_field('haz_tipus_aloldal_alap_adat_kep_leiras');?></p>
                            <p class="text-02"><?= the_sub_field('haz_tipus_aloldal_alap_adat_haz_felszereltsege');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="slider">
    <div class="container">
        <div class="row">
            <?php if( have_rows('haz_tipus_aloldal_slider_kepek') ): ?>
                <div id="pictures" class="owl-slider owl-carousel owl-theme">
                    <?php while( have_rows('haz_tipus_aloldal_slider_kepek') ): the_row(); ?>
                        <img src="<?php the_sub_field('haz_tipus_aloldal_slider_kep');?>" alt="slider" class="img-responsive">
                    <?php endwhile; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- <section class="modal-window">
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="img01">
        <div id="caption"></div>
    </div>
</section> -->
<section class="layout">
    <div class="title">
        <h2><?= the_field('haz_tipus_aloldal_alaprajz_cim');?></h2>
    </div>
    <img src="<?php the_field('haz_tipus_aloldal_alaprajz_kep');?>" alt="slider" class="img-responsive">
</section>

<?php include 'kozos-also.php'; ?>

<section class="key-price">
    <h3><?php _e('Kulcsrakész kivitelezési költség:');?></h3>
    <h4><?php the_field('kulcsrakesz_kivitelezesi_koltseg_ara');?></h4>
</section>

<?php get_footer(); ?>