<?php
    /* Template Name: Tervkatalógus */
    get_header();
?>

<section class="plan-catalog" style="background-image: url('<?= the_field('tervkatalogus_fejlec_hatterkep');?>');">
    <div class="container">
        <div class="row">
            <h3><?= the_field('tervkatalogus_fo_cim');?></h3>
            <?= the_field('tervkatalogus_cim_alatti_kalkulacio_szovege');?>
        </div>
    </div>
</section>
<section class="cat-name">
    <div class="container">
        <?php
            $args = array(
                'taxonomy' => 'category',
                'orderby' => 'term_id'
            );
            
            $categories = get_categories($args);
            foreach($categories as $cat){
                ?>
                <div class="row cat-title">
                    <h2><?= $cat->name;?></h2>
                </div>
                <?php
                $args = [
                    'post_type' => 'houses',
                    'category__in' => $cat->term_id,
                    
                ];
            
                $posts = new WP_Query($args);

                if ( $posts->have_posts() ) :
                    ?>
                    <div class="row house-row">
                        <?php
                            while ( $posts->have_posts() ) : $posts->the_post();
                                ?>
                                    <div class="col-xs-12 col-md-6 col-lg-4 house">
                                <?php
                                    ?>
                                    <div class="house-title">
                                        <h3><?php echo $posts->post->post_title;?></h3>
                                    </div>
                                    <a class="house-img-link" href="<?php echo get_permalink( $post->ID ); ?>">
                                        <div class="type-img">
                                            <div class="overlay"></div>
                                            <?php the_post_thumbnail();?>
                                        </div>
                                    </a>
                                    <?php
                                    if( have_rows('epitoelem_tipusok') ): ?>
                                        <div class="bottom-content">
                                        <?php
                                            while( have_rows('epitoelem_tipusok') ): the_row(); ?>
                                                <div class="row prices">
                                                    <div class="col-xs-7 building-block-box">
                                                        <p class="building-block"><?= the_sub_field('epito_elem');?></p>
                                                    </div>
                                                    <div class="col-xs-5">
                                                        <p class="building-block-price"><?= the_sub_field('epito_elem_ara');?></p>
                                                    </div>
                                                </div>
                                        <?php 
                                            endwhile;
                                    endif;
                                    if( have_rows('haz_felszereltsegei') ): ?>
                                        <div class="row house-info-row">
                                        <?php
                                            while( have_rows('haz_felszereltsegei') ): the_row(); ?>
                                                    <div class="col-xs-4 house-info">
                                                        <img class="house-info-img" src="<?php the_sub_field('haz_felszereltsege_bal_oldali_kep');?>" alt="lakás felszereltség" class="img-responsive">
                                                        <span class="house-info-text"><?= the_sub_field('haz_felszereltsege_jobb_oldali_adat');?></span>
                                                    </div>
                                                    <?php 
                                            endwhile;
                                            ?></div>
                                        <?php
                                        endif;
                                ?>
                                        </div>
                                    </div>
                                <?php
                            endwhile;
                        ?>
                    </div>
                    <?php
                endif;
            }
        ?>
    </div>
</section>

<?php get_footer(); ?>