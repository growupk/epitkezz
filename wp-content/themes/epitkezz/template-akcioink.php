<?php
    /* Template Name: Akcióink */
    get_header();
?>

<section class="action">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 main-title">
                <h3><?= the_field('akcioink_cim');?></h3>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="backgorund"></div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 period">
                    <p><?= the_field('akcioink_kedvezmenyes_idoszak');?></p>
                </div>
            </div>
            <div class="row left-right-container" style="background-image: url('<?= the_field('akcioink_hatterkep');?>');">
                <div class="overlay"></div>
                <div class="col-lg-4 left-box">
                    <h4><?= the_field('akcioink_bal_oldali_szoveg_01');?></h4>
                    <p class="phone-number"><?= the_field('akcioink_bal_oldali_telefonszam');?></p>
                    <p class="web-page"><?= the_field('akcioink_bal_oldali_web_cim');?></p>
                </div>
                <div class="col-lg-4 center-img-box">
                    <img src="<?= the_field('akcioink_kozepso_kiemelt_kep');?>" alt="action" class="img-responsive">
                </div>
                <div class="col-lg-4 right-box">
                    <h4><?= the_field('akcioink_jobb_oldali_cim');?></h4>
                    <p class="first-content"><?= the_field('akcioink_jobb_oldali_szoveg_01');?></p>
                    <div class="second-content">
                        <?= the_field('akcioink_jobb_oldali_szoveg_02');?>
                    </div>
                </div>
            </div>
            <div class="row bottom-images-container">
                <?php if( have_rows('akcioink_also_kepek') ): ?>
                    <?php while( have_rows('akcioink_also_kepek') ): the_row(); ?>
                        <div class="col-xs-12 col-lg-2 image-box">
                            <img src="<?php the_sub_field('akcioink_also_kep');?>" alt="houses" class="img-responsive">
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
                <div class="col-xs-12 col-lg-2 logo-box">
                    <img src="<?= the_field('akcioink_jobb_also_logo');?>" alt="action-logo" class="img-responsive">
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>