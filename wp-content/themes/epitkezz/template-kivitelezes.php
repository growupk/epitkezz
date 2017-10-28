<?php
    /* Template Name: Kivitelezés */
    get_header();
?>

<section class="implementation">
    <div class="conteiner-fluid">
        <h3><?= the_field('kivitelezes_cim');?></h3>
        <div class="row">
            <div class="col-lg-6 left-box" style="background-image: url('<?= the_field('kivitelezes_bal_oldali_doboz_kep');?>');">
                <a href="<?= get_permalink( get_page_by_title( 'téglaház' ) );?>"><?= the_field('kivitelezes_bal_oldali_doboz_gomb_szovege');?></a>
            </div>
            <div class="col-lg-6 right-box" style="background-image: url('<?= the_field('kivitelezes_jobb_oldali_doboz_kep');?>');">
                <a href="#"><?= the_field('kivitelezes_jobb_oldali_doboz_gomb_szovege');?></a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>