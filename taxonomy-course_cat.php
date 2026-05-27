<?php get_header(); ?>

<div class="container">
    <header class="page-header">
        <h1>Category: <?php single_term_title(); ?></h1>
    </header>

    <div class="row">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                
                <div class="col-md-4">
                    <div class="course-card">
                        <?php the_post_thumbnail('medium'); ?>
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>

            <?php endwhile; ?>
        <?php else : ?>
            <p>No courses found in this category.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>