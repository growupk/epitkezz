<?php
    get_header();
?>

<section class="single-house">
    <div class="container">
        <div class="row">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="content-box">
                    <p class="post-title"><?php the_title(); ?></p>
                </div>
            <?php endwhile; ?>        
        </div>    
    </div>
</section>

<?php get_footer(); ?>