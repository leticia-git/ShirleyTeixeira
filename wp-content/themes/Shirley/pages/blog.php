<?php
/*
Template Name:Blog 
*/?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Blog Page</title>
    
    <?php wp_head(); ?>
    
    <link rel="stylesheet" href="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/css/app.css">
</head>
<body>
    <header>
    <div class="grid">
			<div class="menu-blog">
				<div class="logo">
					<img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/logo.png" alt="Logo">
				</div>
				<div class="conteudo-menu">
					<div class="links">
						<a href="">HOME</a>
						<i class="fa-solid fa-star" style="color: #DD90AE;"></i>
						<a href="#projetos">PROJETOS</a>
						<i class="fa-solid fa-star" style="color: #DD90AE;"></i>
						<a href="#sobre">SOBRE</a>
						<i class="fa-solid fa-star" style="color: #DD90AE;"></i>
						<a href="#contato">CONTATO</a>
					</div>
					<div class="redes">
						<div class="rede">
							<a href=""><i class="fa-brands fa-linkedin"></i></a>
						</div>
						<div class="rede">
							<a href=""><i class="fa-brands fa-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </header>

    <section class="t-blog-listing" >
    <div class="t-blog-listing__grid" >
        <div class="t-blog-listing__posts" >
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
