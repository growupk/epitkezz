<?php
    /* Template Name: Kapcsolat */
    get_header();
?>

<section class="contact">
    <div class="container-fluid" style="background-image: url('<?= the_field('kapcsolat_hatterkep');?>');">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 main-title">
                    <h3><?= the_field('kapcsolat_cim');?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 top-content">
                    <p><?= the_field('kapcsolat_felso_szoveg');?></p>
                </div>
            </div>
            <div class="row contact-bottom-row">
                <?php if( have_rows('kapcsolatok') ): ?>
                    <?php while( have_rows('kapcsolatok') ): the_row(); ?>
                        <div class="col-xs-12 col-md-6 col-lg-3 contact-image-wrapper">
                            <img src="<?php the_sub_field('kapcsolat_kep');?>" alt="kapcsolat" class="img-responsive">
                            <p class="first-title"><?= the_sub_field('kapcsolat_tipusa');?></p>
                            <p class="second-title"><?= the_sub_field('kapcsolat_elerhetoseg');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<section class="contact-form">
    <div class="container">
        <h3><?php _e('Kérdés esetén forduljon hozzánk bizalommal','epitkezz');?></h3>
        <div class="form-container">
            <?php echo do_shortcode( '[contact-form-7 id="4" title="Kapcsolat"]' );?>
        </div>
    </div>
</section>

<?php get_footer(); ?>