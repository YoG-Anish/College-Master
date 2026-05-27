<!------------------------------  Header section  ------------------------------>
<?php
/*
Template Name: Course page
*/
get_header(); ?>
<!------------------------------ End  header section  ------------------------------>

<!--  banner section  -->
<div class="inner-banner ">
    <div class="content">
        <h1>COURSES</h1>
    </div>
</div>

<!--  Course page section  -->
<div class="course-page-section top-section-gaps section-gaps">
    <div class="container">
        <div class="course-info-items d-flex flex-wrap">
            <?php
            $course_args = array(
                'post_type' => 'course',
                'posts_per_page' => -1
            );
            $course_query = new WP_Query($course_args);
            while ($course_query->have_posts()): $course_query->the_post(); ?>

                <div class="item">
                    <div class="box">
                        <div class="img-holder">
                            <?php if (has_post_thumbnail()): ?>
                                <a href="<?php the_permalink(); ?>" title="">
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="" class="img-cover">
                                </a>
                            <?php endif; ?>
                        </div>
                        <div class="content">
                            <h3 class="title sm">
                                <a href="<?php the_permalink(); ?>" title="">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="tags-student d-flex flex-wrap align-items-center justify-content-between">
                                <div class="tags d-flex flex-wrap">
                                    <span class="free-tag"><?php echo get_field('cost') ? 'Paid' : 'Free'; ?></span>
                                    <?php
                                    $terms = get_the_terms(get_the_ID(), 'course_cat');
                                    if ($terms && !is_wp_error($terms)) {
                                        foreach ($terms as $term) {
                                            $term_link = get_term_link($term);
                                            echo '<ul><li><a href="' . esc_url($term_link) . '">' . esc_html($term->name) . '</a></li></ul>';
                                        }
                                    }
                                    ?>
                                </div>
                                <span class="students">
                                    <span><i class="fas fa-users"></i><?php echo $numb_of_students = get_field('number_of_students') ? get_field('number_of_students') : '0'; ?></span>
                                </span>
                            </div>
                            <p>
                                <?php the_content(); ?>
                            </p>
                        </div>
                    </div>
                </div>

            <?php endwhile;
            wp_reset_postdata(); ?>

        </div>
    </div>

</div>


<!------------------------------  Footer section  ------------------------------>
<?php get_footer(); ?>
<!------------------------------ End  Footer section  ------------------------------>