<?php get_header(); ?>

<section class="um" style="background-image:url('<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/fundo-projetos.png');background-repeat:no-repeat; background-size:cover;background-position:center;">
    <div class="grid">
        <div class="projetos" id="projetos">
            <div class="textos-projeto">
                <div class="projetos-titulo">
                    <p>PROJETOS</p>
                </div>
                <div class="projetos-texto">
                    <p>Escrever é uma paixão de longa data. Aqui você encontra textos pessoais, criativos e projetos de social media.</p>
                </div>
            </div>
            <div class="topicos-projetos">
                <div class="topico">
                <a href="">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/blog.png" alt="">
                </a>
                </div>
                <div class="topico">
                <a href="">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/newss.png" alt="">
                </a>
                </div>
                <div class="topico">
                <a href="">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/redes.png" alt="">
                </a>
                </div>
            </div>
        </div>

    </div>
</section>
<section class="dois" id="sobre" style="background-image:url('<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/fundo-sobre.png');background-repeat:no-repeat; background-size:cover; background-position:center;">
    <div class="grid">
        <div class="titulo-sobremim">
            <p>SOBRE MIM</p>
        </div>
        <div class="sobremim">
            <div class="contato-sobre">
                    <div class="conteudo-sobre">
                        <div class="foto">
                            <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/shi.png" alt="Foto">
                        </div>
                        <div class="texto-sobre">
                            <p>Olá, sou a <strong>Shirley</strong>, redatora, publicitária e comunicadora visual. Tenho experiência em controle de qualidade e criação de textos para e-commerce com foco em SEO. Desenvolvi meu hábito de escrita ainda na infância com meus diários e aprimorei essa habilidade durante a graduação. Sou apaixonada por literatura, escrita criativa, pintura, ilustração, design e tudo que engloba o mundo das artes.</p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<section class="tres" id="contato">
    <div class="grid">

        <div class="conteudo-contato">

            <div class="contato">
            <div class="titulo-contato">
            <p>ENTRE EM CONTATO COMIGO</p>
        </div>
                <div class="box-contato">
                        <div class="titulo-box">
                            <p>CONTATO</p>
                        </div>
                        <div class="telefone">
                            <a href="tel:+5511962538168">(11) 96253-8168</a>
                        </div>
                        <div class="email">
                            <a href="mailto:shiteixeiras@gmail.com">shiteixeiras@gmail.com</a>
                        </div>
                </div>
                <div class="flores">
                    <img src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/flores.png" alt="">
                </div>
                <div class="botao-cv">
                    <a href="">
                    <i class="fa-solid fa-star" style="color: #fff;"></i>
                    BAIXE MEU CV
                    <i class="fa-solid fa-star" style="color: #fff;"></i>
                    </a>
                </div>
            </div>
           <div class="form">
           <?php echo do_shortcode('[contact-form-7 id="f28e2d9" title="Formulário de contato"]'); ?>

           </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>