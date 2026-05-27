<?php get_header(); ?>

<main class="course-single-container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <h1><?php the_title(); ?></h1>
            
            <div class="course-image">
                <?php the_post_thumbnail('full'); ?>
            </div>

            <div class="course-description">
                <?php the_content(); ?>
            </div>
            
            <!-- You can add your ACF fields here later -->
            <div class="course-meta">
                 Price: <?php echo get_field('is_paid') ? 'Paid' : 'Free'; ?>
            </div>
        </article>

    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>