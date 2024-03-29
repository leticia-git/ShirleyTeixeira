<?php
/*
Template Name:Blog 
*/?>




<?php get_template_part('components/head'); ?>
<?php wp_head(); ?>

    <div class="blog">
        <div class="grid">
                <?php get_template_part('templates/menu-blog'); ?>
        </div>

        <div class="conteudo-blog">
            <div class="tag-blog">
                <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/blog-tag.png" alt="Blog">
            </div>
            <div class="grid">
                <main>
                    <div class="titulo-posts">
                        <p>POSTS</p>
                        <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/florbranca.png" alt="Flor">
                    </div>
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
                                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                                        </div>
                                        <div class="titulo-post">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                        </div>
                                        <div class="resumo">
                                            <p><?php the_excerpt(); ?></p>
                                        </div>
                                        <div class="leiamais">
                                            <a href="<?php the_permalink(); ?>">Leia mais</a>
                                        </div>
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
            </div>
        </div>
    </div>

<?php get_footer(); ?>