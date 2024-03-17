<?php 
get_template_part('components/head'); ?>

<?php get_template_part('components/head'); ?>
<?php wp_head(); ?>

    <div class="single">
        <div class="grid">
                <?php get_template_part('templates/blog-menu'); ?>
        </div>
        <div class="tag-blog">
                <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/blog-tag.png" alt="Blog">
        </div>
        <main class="p-single">
            <div class="grid" >
                <?php if (has_post_thumbnail()) { ?>
                    <div class="p-single__thumbnail" >
                        <div class="p-single__titles" >
                            <h1 class="p-single__title" ><?php the_title(); ?></h1>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="p-single__thumbnail" >
                        <div class="p-single__titles" >
                            <h1 class="p-single__title" ><?php the_title(); ?></h1>
                            <span class="p-single__subtitle" ></span>
                        </div>
                    </div>
                <?php } ?>
                <div class="post-thumbnail">
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                </div>
                <div class="p-single__content-latest" >
                    <div class="p-single__content" ><?php the_content() ?></div>
                </div>
            </div>
        </main>
    </div>

<?php get_footer(); ?>