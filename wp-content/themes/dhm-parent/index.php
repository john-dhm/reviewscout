<?php get_template_part( 'template-parts/header' ); ?>
<?php the_breadcrumb(); ?>
<main>
    <div class="container">
        <?php 
        if ( have_posts() ) : 
            while ( have_posts() ) : the_post();
            ?>
                <h1><?php the_title(); ?></h1>
                <?php the_content(); ?>
            <?php
            endwhile; 
        endif; 
        ?>
    </div>
</main>
<?php get_template_part( 'template-parts/footer' ); ?>