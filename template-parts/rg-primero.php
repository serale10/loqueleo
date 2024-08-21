<section class="section_filter_primero relative w-full">
    <swiper-container class="swiperPrimero w-full lg:w-10/12 mt-6 mb-10"  space-between="10"
        slides-per-view="3" navigate="true">
        <swiper-slide>
            <div class="card-libro">
                <div class="card-image relative h-32 w-full">
                    <img class="absolute" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/libro.png" alt="Portada del libro">
                </div>
                <div class="card-content">
                    <h2 class="card-title font-avant text-xl">Título de libro</h2>
                    <p class="card-subtitle">Valores que enseña</p>
                        <ul class="list-disc ms-7">
                            <li>Valor 1</li>
                            <li>Valor 2</li>
                            <li>Valor 3</li>
                        </ul>
                </div>
                <div class="card-actions">
                    <button class="btn">
                        <i class="fa-light fa-eye me-1 text-sm"></i> Previsualizar
                    </button>
                    <button class="btn">
                        <i class="fa-thin fa-file-arrow-down me-1 text-sm"></i> Descargar
                    </button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="card-libro">
                <div class="card-image relative h-32 w-full">
                    <img class="absolute" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/libro.png" alt="Portada del libro">
                </div>
                <div class="card-content">
                    <h2 class="card-title font-avant text-xl">Título de libro</h2>
                    <p class="card-subtitle">Valores que enseña</p>
                        <ul class="list-disc ms-7">
                            <li>Valor 1</li>
                            <li>Valor 2</li>
                            <li>Valor 3</li>
                        </ul>
                </div>
                <div class="card-actions">
                    <button class="btn">
                        <i class="fa-light fa-eye me-1 text-sm"></i> Previsualizar
                    </button>
                    <button class="btn">
                        <i class="fa-thin fa-file-arrow-down me-1 text-sm"></i> Descargar
                    </button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="card-libro">
                <div class="card-image relative h-32 w-full">
                    <img class="absolute" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/libro.png" alt="Portada del libro">
                </div>
                <div class="card-content">
                    <h2 class="card-title font-avant text-xl">Título de libro</h2>
                    <p class="card-subtitle">Valores que enseña</p>
                        <ul class="list-disc ms-7">
                            <li>Valor 1</li>
                            <li>Valor 2</li>
                            <li>Valor 3</li>
                        </ul>
                </div>
                <div class="card-actions">
                    <button class="btn">
                        <i class="fa-light fa-eye me-1 text-sm"></i> Previsualizar
                    </button>
                    <button class="btn">
                        <i class="fa-thin fa-file-arrow-down me-1 text-sm"></i> Descargar
                    </button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="card-libro">
                <div class="card-image relative h-32 w-full">
                    <img class="absolute" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/libro.png" alt="Portada del libro">
                </div>
                <div class="card-content">
                    <h2 class="card-title font-avant text-xl">Título de libro</h2>
                    <p class="card-subtitle">Valores que enseña</p>
                        <ul class="list-disc ms-7">
                            <li>Valor 1</li>
                            <li>Valor 2</li>
                            <li>Valor 3</li>
                        </ul>
                </div>
                <div class="card-actions">
                    <button class="btn">
                        <i class="fa-light fa-eye me-1 text-sm"></i> Previsualizar
                    </button>
                    <button class="btn">
                        <i class="fa-thin fa-file-arrow-down me-1 text-sm"></i> Descargar
                    </button>
                </div>
            </div>
        </swiper-slide>
        <swiper-slide>
            <div class="card-libro">
                <div class="card-image relative h-32 w-full">
                    <img class="absolute" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/libro.png" alt="Portada del libro">
                </div>
                <div class="card-content">
                    <h2 class="card-title font-avant text-xl">Título de libro</h2>
                    <p class="card-subtitle">Valores que enseña</p>
                        <ul class="list-disc ms-7">
                            <li>Valor 1</li>
                            <li>Valor 2</li>
                            <li>Valor 3</li>
                        </ul>
                </div>
                <div class="card-actions">
                    <button class="btn">
                        <i class="fa-light fa-eye me-1 text-sm"></i> Previsualizar
                    </button>
                    <button class="btn">
                        <i class="fa-thin fa-file-arrow-down me-1 text-sm"></i> Descargar
                    </button>
                </div>
            </div>
        </swiper-slide>
    </swiper-container>
    <div class="swiper-button-prev swiperPrimero-prev"></div>
    <div class="swiper-button-next swiperPrimero-next"></div>

    


</section>

<script>
const swiperPrimero = document.querySelector('.swiperPrimero');
Object.assign(swiperPrimero, {
    slidesPerView: 1,
    spaceBetween: 5,
    navigation: {
        nextEl: '.swiperPrimero-next', // Clase específica para "Next"
        prevEl: '.swiperPrimero-prev', // Clase específica para "Prev"
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 2,
            spaceBetween: 33,
        },
        "@1.50": {
            slidesPerView: 4,
            spaceBetween: 33,
        },
        "@2": {
            slidesPerView: 4,
            spaceBetween: 33,
        },
    },
});
swiperEstudiante.initialize();
</script>