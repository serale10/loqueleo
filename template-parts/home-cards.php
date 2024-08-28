<section class="section_cards flex justify-center relative pb-10 xl:pb-40">
<img class="absolute left-0 bottom-0 w-auto 2xl:w-full" src="<?php echo get_template_directory_uri(  ) ?>/assets/loqueleo_digital/ruta_3.png" alt="">
<div class="container">
    <div class="flex flex-col items-center">
        <div class="w-full flex justify-center">
            <div class="title flex flex-col items-center">
                <h3 class="font-avant text-4xl text-center">Un mundo de diversión con</h3>
                <img class="" src="<?php echo get_template_directory_uri(  ) ?>/assets/loqueleo_digital/loqueleo_logo.png" alt="">
            </div>
        </div>
        <div class="w-full justify-center my-5 relative">
            <div class="title-slider text-center">
                <h4 class="font-avant text-3xl">Para estudiantes</h4>
            </div>

            <div class="relative container-swiper-estudiante">
                <swiper-container class="swiperEstudiante w-full mt-6 mb-10"  space-between="5"
                slides-per-view="3" centered-slides="true" slides-per-view="auto">
                    <swiper-slide>
                        <div class="card-slider">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-orange">
                                        1
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <a href="" class="button-purple">Acceder aquí</a>
                                </div>
                            </div>
                        </div>
                    </swiper-slide>
    
               
    
                <swiper-slide>
                    <div class="card-slider">
                        <div class="content flex w-full">
                            <div class="w-4/12 flex items-center">
                                <div class="number bg-orange">
                                    2
                                </div>
                            </div>
                            <div class="w-8/12">
                                <p class="py-3">Actividades gamificadas de comprensión lectora y personalización de avatares.</p>

                            </div>
                        </div>
                    </div>
                </swiper-slide>
    
                <swiper-slide>
                    <div class="card-slider">
                        <div class="content flex w-full">
                            <div class="w-4/12 flex items-center">
                                <div class="number bg-orange">
                                    3
                                </div>
                            </div>
                            <div class="w-8/12">
                                <p class="py-3">Diversidad literaria en formato ebook y audiolibros.</p>
                                
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                <div class="card-slider">
                        <div class="content flex w-full">
                            <div class="w-4/12 flex items-center">
                                <div class="number bg-orange">
                                    4
                                </div>
                            </div>
                            <div class="w-8/12">
                                <p class="py-3">Lectura asíncrona y síncrona.</p>
                                
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                   
                <swiper-slide>
                    <div class="card-slider">
                        <div class="content flex w-full">
                            <div class="w-4/12 flex items-center">
                                <div class="number bg-orange">
                                    5
                                </div>
                            </div>
                            <div class="w-8/12">
                                <p class="py-3">Lectura en formato impreso y digital (online y offline).</p>
                                
                            </div>
                        </div>
                    </div>
                </swiper-slide>
                    
                <swiper-slide>
                    <div class="card-slider">
                        <div class="content flex w-full">
                            <div class="w-4/12 flex items-center">
                                <div class="number bg-orange">
                                    6
                                </div>
                            </div>
                            <div class="w-8/12">
                                <p class="py-3">Acceso a la biblioteca virtual desde la APP.</p>
                                
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                <swiper-slide>
                    <div class="card-slider">
                        <div class="content flex w-full">
                            <div class="w-4/12 flex items-center">
                                <div class="number bg-orange">
                                    7
                                </div>
                            </div>
                            <div class="w-8/12">
                                <p class="py-3">Retroalimentación de avances a cargo del docente en comprensión lectora, lecturas y audiolibros. </p>
                                
                            </div>
                        </div>
                    </div>
                </swiper-slide>

                 </swiper-container>
                 <div class="swiper-button-prev swiperEstudiante-prev"></div>
                 <div class="swiper-button-next swiperEstudiante-next"></div>
            </div>
        </div>

        <?php get_template_part( 'template-parts/home-cards-2') ?>

    </div>
</div>
</section>

<script>
    // document.addEventListener('DOMContentLoaded', function () {
        const swiperEstudiante = document.querySelector('.swiperEstudiante');
    Object.assign(swiperEstudiante, {
        slidesPerView: 1,
        spaceBetween: 2,
        navigation: {
            nextEl: '.swiperEstudiante-next', // Clase específica para "Next"
            prevEl: '.swiperEstudiante-prev', // Clase específica para "Prev"
        },
        breakpoints: {
            "@0.00": {
                slidesPerView: 1,
                spaceBetween: 10,
            },
            "@0.75": {
                slidesPerView: 2,
                spaceBetween: 10,
            },
            "@1.00": {
                slidesPerView: 3,
                spaceBetween: 3,
            },
            "@1.50": {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            "@2": {
                slidesPerView: 4,
                spaceBetween: 10,
            },
        },
    });
    swiperEstudiante.initialize();

   

// });
</script>