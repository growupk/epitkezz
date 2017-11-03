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
    <?php
    /*$catArr = array(
        'taxonomy' => 'category',
        'orderby' => 'slug',
        'order'   => 'ASC'
    );

    $args = array(
        'post_type' => array('houses'),
        'posts_per_page'   => -1 ,
    );*/
    $categories = get_categories('houses');
    foreach($categories as $cat){
        echo $cat->name;
        $args = [
            'post_type' => 'houses',
            'category__in' => $cat->term_id,
            // Rest of your arguments
        ];
    
        //$cats = get_categories($catArr);
        $posts = new WP_Query($args);
        //var_dump($posts);
        if ( $posts->have_posts() ) :
            while ( $posts->have_posts() ) : $posts->the_post();
    
             var_dump($posts);
            endwhile;
        endif;
        
    }
    

    //foreach($cats as $cat) {
    ?>
        <h2><?php //echo $cat->name; ?></h2>

    <?php
    //}
    ?>
</section>

<?php get_footer(); ?>