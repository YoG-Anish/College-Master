<?php get_header(); ?>
<div class="articles-items">
            <div class="row">
                <?php
                $args = array(
                    'post_type'      => 'article', 
                    'posts_per_page' => -1,        
                    'orderby'        => 'date',    
                    'order'          => 'DESC',
                );

                $article_query = new WP_Query($args);

                if ($article_query->have_posts()) :
                    while ($article_query->have_posts()) : $article_query->the_post();
                        $custom_author = get_field('author_name');
                        $custom_date   = get_field('posted_date');
                ?>
                        <div class="col-md-4">
                            <div class="item">
                                <div class="img-holder">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail('medium_large', ['class' => 'img-cover']); ?>
                                        <?php else : ?>
                                            <img src="<?php echo get_template_directory_uri(); ?>/images/blog-default.jpg" alt="" class="img-cover">
                                        <?php endif; ?>
                                    </a>
                                </div>
                                <div class="content">
                                    <ul class="articles-info d-flex">
                                        <li class="arther">
                                            <i class="fas fa-user"></i>
                                            <span><?php echo $custom_author ? esc_html($custom_author) : get_the_author(); ?></span>
                                        </li>
                                        <li class="date">
                                            <i class="far fa-calendar-alt"></i>
                                            <span><?php echo $custom_date ? esc_html($custom_date) : get_the_date(); ?></span>
                                        </li>
                                    </ul>
                                    <h3 class="title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h3>
                                    <p>
                                        <?php echo wp_trim_words(get_the_excerpt(), 15, '...'); ?>
                                    </p>
                                    <div class="read-more">
                                        <a href="<?php the_permalink(); ?>" class="btn-sty-1">
                                            Read more <i class="fas fa-chevron-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    endwhile;
                    wp_reset_postdata(); 
                else :
                    echo '<p>No articles found.</p>';
                endif;
                ?>
            </div>
        </div>

        <?php get_footer(); ?>