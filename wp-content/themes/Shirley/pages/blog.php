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
      <main>
    <section class="blog-posts">
        <div class="container">
            <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => -1, // Mostra todos os posts
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
            ?>
                    <article>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <h2><?php the_title(); ?></h2>
                        <p><?php the_excerpt(); ?></p>
                        <a href="<?php the_permalink(); ?>">Leia mais</a>
                    </article>
            <?php
                endwhile;
                wp_reset_postdata();
            else :
                echo "<p>Nenhum post encontrado.</p>";
            endif;
            ?>
        </div>
    </section>
</main>

      <?php get_footer(); ?>