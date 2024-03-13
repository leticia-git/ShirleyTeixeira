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

    <div class="container">
        <h1>Main Blog Page</h1>

        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <article <?php post_class(); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-content">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
    </div>
    <?php wp_footer(); ?>
</body>
</html>