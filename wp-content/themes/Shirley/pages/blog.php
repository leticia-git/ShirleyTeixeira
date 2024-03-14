<?php
/*
Template Name:Blog 
*/?>




    <?php get_template_part('components/head'); ?>
    <?php wp_head(); ?>
    <body>
        <header>
            <div class="grid">
                <?php get_template_part('templates/blog-menu'); ?>
            </div>
        </header>
      <div class="grid">
      <section class="t-blog-highlights">
            <div class="t-blog-highlights__grid">
                <div class="t-blog-highlights__swiper swiper js-blog-highlights">
                    <div class="t-blog-highlights__wrapper swiper-wrapper">
                        <?php
                $stickies = get_option('sticky_posts');
                $newsArgs = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => -1,
                    'post__in'          => $stickies,
                );
                $newsLoop = new WP_Query($newsArgs);
                while ($newsLoop->have_posts()) : $newsLoop->the_post();
                ?>
                        <?php if (has_post_thumbnail()) { ?>
                        <article
                            class="t-blog-highlights__highlight swiper-slide"
                            style="background-image: url('<?php the_post_thumbnail_url('thumbnail-blog-highlights') ?>')">
                        <?php } else { ?>
                            <article class="t-blog-highlights__highlight swiper-slide">
                                <?php } ?>
                                <div class="t-blog-highlights__titles">
                                    <h1 class="t-blog-highlights__title"><?php the_title(); ?></h1>
                                </div>
                                <div class="t-blog-highlights__excerpt"><?php the_excerpt(); ?></div>
                                <a href="<?php the_permalink(); ?>" class="t-blog-highlights__button">
                                    <span class="t-blog-highlights__button-text">Leia mais</span>
                                    <i class="t-blog-highlights__button-icon fas fa-long-arrow-alt-right"></i>
                                </a>
                            </article>
                            <?php endwhile;
                    wp_reset_query(); ?>
                        </div>
                        <div
                            class="js-blog-highlights__swiper-pagination t-blog-highlights__swiper-pagination"></div>
                        <div class="js-blog-highlights__arrows">
                            <div class="js-blog-highlights__swiper-button-prev">
                                <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="js-blog-highlights__swiper-button-next">
                                <i class="fas fa-chevron-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="t-blog-listing">
            <div class="t-blog-listing__grid">
                <div class="t-blog-listing__posts">
                    <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array(
                    'post_type'         => 'post',
                    'posts_per_page'    => 8,
                    'paged'             => $paged,
                );
                $loop = new WP_Query($args);
                if ($loop->have_posts()) {
                    while ($loop->have_posts()) : $loop->the_post();
                    endwhile;
                    $total_pages = $loop->max_num_pages;
                    if ($total_pages > 1) {
                        $current_page = max(1, get_query_var('paged'));
                        echo '<div class="t-blog-listing__paginate">';
                        echo '<div class="t-blog-listing__paginate__grid">';
                        echo paginate_links(array(
                            'base' => get_pagenum_link(1) . '%_%',
                            'format' => 'page/%#%',
                            'current' => $current_page,
                            'total' => $total_pages,
                            'prev_text'    => (' <i class="t-blog-listing__paginate__prev">Anterior</i>'),
                            'next_text'    => (' <i class="t-blog-listing__paginate__next">Próximo</i>'),
                        ));
                        echo '</div>';
                        echo '</div>';
                    }
                }
                wp_reset_postdata();
                ?>
                </div>
            </div>
        </section>
      </div>

      <?php get_footer(); ?>