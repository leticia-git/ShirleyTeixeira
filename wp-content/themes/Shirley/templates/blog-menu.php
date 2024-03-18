<div class="menu-blog">
    <div class="logo">
        <img
            src="<?php echo home_url(); ?>/wp-content/themes/Shirley/assets/images/logo.png"
            alt="Logo">
    </div>
    <div class="conteudo-menu">
        <div class="links">
            <a href="<?php echo home_url(); ?>/">HOME</a>
            <i class="fa-solid fa-star" style="color: #DD90AE;"></i>
            <a href="<?php echo home_url(); ?>/projetos">PROJETOS</a>
            <i class="fa-solid fa-star" style="color: #DD90AE;"></i>
            <a href="<?php echo home_url(); ?>/sobre">SOBRE</a>
            <i class="fa-solid fa-star" style="color: #DD90AE;"></i>
            <a href="<?php echo home_url(); ?>/contato">CONTATO</a>
        </div>
        <div class="redes">
            <div class="rede">
                <a href="https://www.linkedin.com/in/shirley-teixeira/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </div>
            <div class="rede">
                <a href="https://www.instagram.com/tshiir/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
    <div class="menu-responsivo">
        <div class="hamburguer" onclick="toggleMenu()">
            <div class="barra"></div>
            <div class="barra"></div>
            <div class="barra"></div>
        </div>
        <div class="itens-menu">
            <a href="<?php echo home_url(); ?>/">HOME</a>
            <a href="<?php echo home_url(); ?>/projetos">PROJETOS</a>
            <a href="<?php echo home_url(); ?>/sobre">SOBRE</a>
            <a href="<?php echo home_url(); ?>/contato">CONTATO</a>
            <div class="redes">
                <a href="https://www.linkedin.com/in/shirley-teixeira/" target="_blank">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
                <a href="https://www.instagram.com/tshiir/" target="_blank">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>

</div>
<script>
		function toggleMenu() {
    var menu = document.querySelector('.itens-menu');
    menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
}
	</script>