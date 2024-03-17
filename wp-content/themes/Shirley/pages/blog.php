<?php
/*
Template Name:Blog 
*/?>




    <?php get_template_part('components/head'); ?>
    <?php wp_head(); ?>

 <div class="blog">
 <div class="grid">
            <?php get_template_part('templates/blog-menu'); ?>
    </div>

    <div class="conteudo-blog">
        <div class="tag-blog">
        <img
            src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/blog-tag.png"
            alt="Blog">
        </div>
        <div class="grid">
        <div id="category-filter">
    <ul>
        <?php
        // Get all categories
        $categories = get_categories();

        // Display each category as a link
        foreach ($categories as $category) {
            echo '<li><a href="#" data-category="' . $category->slug . '">' . $category->name . '</a></li>';
        }
        ?>
    </ul>
</div>
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
                                    <div class="titulo-post">
                                        <h2><?php the_title(); ?></h2>
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
<script>
    $(document).ready(function($) {
    $('#category-filter a').on('click', function(e) {
        e.preventDefault();

        var category = $(this).data('category');

        // Hide all posts
        $('.post').hide();

        // Show only the posts in the selected category
        if (category === 'all') {
            $('.post').show();
        } else {
            $('.' + category).show();
        }
    });
});
</script>
<?php get_footer(); ?>