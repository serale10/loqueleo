<section class="section_filter_primero section_filtros relative w-full flex flex-col items-center">
    <div class="w-full lg:w-9/12">
        <h4 class="font-avant text-2xl color-green text-center lg:text-start">Sexto Primaria</h4>
        <div class="flex items-center justify-center lg:justify-start">
            <p class="font-avant text-base">Lectura para estudiantes de</p>
            <img class="" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/doce.png" alt="Portada del libro">
        </div>
    </div>
    <swiper-container class="swiperSexto w-full lg:w-9/12 mt-6"  space-between="10"
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
    <div class="swiper-button-prev swiperSexto-prev"></div>
    <div class="swiper-button-next swiperSexto-next"></div>

    
    <div class="w-full flex justify-center">
            <a class="btn-ruta" href=""><i class="fa-light fa-angle-down mx-2"></i> Extiende tu ruta</a>
    </div>
    <div class="w-full flex justify-center my-3">
        <p class="font-bold text-base">Recomendaciones en formato digital</p>
    </div>

</section>

<script>
const swiperSexto = document.querySelector('.swiperSexto');
Object.assign(swiperSexto, {
    slidesPerView: 1,
    spaceBetween: 5,
    navigation: {
        nextEl: '.swiperSexto-next', // Clase específica para "Next"
        prevEl: '.swiperSexto-prev', // Clase específica para "Prev"
    },
    breakpoints: {
        "@0.00": {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        "@0.75": {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        "@1.00": {
            slidesPerView: 3,
            spaceBetween: 33,
        },
        "@1.50": {
            slidesPerView: 4,
            spaceBetween: 33,
        },
        "@2": {
            slidesPerView: 5,
            spaceBetween: 33,
        },
        "@2.50": {
            slidesPerView: 5,
            spaceBetween: 33,
        },
    },
});
// swiperPrimero.initialize();
</script>