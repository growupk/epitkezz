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
                <div class="col-xs-12">
                    <p><?= the_field('kapcsolat_felso_szoveg');?></p>
                </div>
            </div>
            <div class="row">
                <?php if( have_rows('kapcsolatok') ): ?>
                    <?php while( have_rows('kapcsolatok') ): the_row(); ?>
                        <div class="col-xs-12 col-lg-3">
                            <img src="<?php the_sub_field('kapcsolat_kep');?>" alt="kapcsolat" class="img-responsive">
                            <p><?= the_sub_field('kapcsolat_tipusa');?></p>
                            <p><?= the_sub_field('kapcsolat_elerhetoseg');?></p>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>