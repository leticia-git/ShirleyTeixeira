<?php
/*
Template Name:Redes 
*/?>

<?php get_template_part('components/head'); ?>
<?php wp_head(); ?>
<style>
.carousel-container {
    width: 1080px;
    margin: 50px auto;
    overflow: hidden;
}
@media(max-width:991px){
    .carousel-container {
    width: 100%;
    margin: 50px auto;
    overflow: hidden;
}
}
.carousel-inner {
    display: flex;
    transition: transform 0.5s ease;
}

.carousel-item {
    flex: 0 0 300px;
    
}

.carousel-item img {
    width: 100%;
 
}

.carousel-controls {
    text-align: center;
    margin-top: 10px;
}

.carousel-controls button {
    background-color: #3897f0;
    color: #fff;
    border: none;
    padding: 5px 10px;
    margin: 0 5px;
    border-radius: 5px;
    cursor: pointer;
    outline: none;
}

.carousel-controls button:hover {
    background-color: #1e87e5;
}
.redes-sociais {
    background: #FAEDD6;padding-bottom: 50px;
}

</style>
<div class="redes-sociais">
            <div class="grid">
                        <?php get_template_part('templates/menu-blog'); ?>
            </div>
            <div class="tag-blog">
                <img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/Group-16.png" alt="Blog">
            </div>

            <div class="carousel-container">
                <div class="carousel-inner">
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/1.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/2.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/3.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/4-1.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/5.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/6.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/7.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/8.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/9.png" alt=""></div>
                    <div class="carousel-item"><img src="https://shirleyteixeira.com.br/wp-content/uploads/2024/03/Slice-10.png" alt=""></div>
                </div>
            </div>

            <div class="carousel-controls">
                <button onclick="showPrevious()">Anterior</button>
                <button onclick="showNext()">Próximo</button>
            </div>

</div>

<script>
    let currentIndex = 0;
    const items = document.querySelectorAll('.carousel-item');
    const totalItems = items.length;

    function showNext() {
        if (currentIndex < totalItems - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateCarousel();
    }

    function showPrevious() {
        if (currentIndex > 0) {
            currentIndex--;
        } else {
            currentIndex = totalItems - 1;
        }
        updateCarousel();
    }

    function updateCarousel() {
        const carouselInner = document.querySelector('.carousel-inner');
        const itemWidth = items[0].offsetWidth + 10; // width + margin-right
        const offset = -currentIndex * itemWidth;
        carouselInner.style.transform = `translateX(${offset}px)`;
    }
</script>
<?php get_footer(); ?>


