<section class="section_claves flex justify-center relative">
    <img class="absolute fotos right-0 bottom-0 -z-10 w-auto" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/grupo_fotos.png" alt="">
    <img class="absolute left-0 top-0 -z-10 w-60 md:w-96" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/ruta_3.png" alt="">
    <img class="absolute right-0 bottom-10 lg:top-1/2 transform -translate-y-1/2 z-20 w-28 md:w-auto" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/avestruz.png" alt="">
    <div class="container mt-28 lg:mt-5">
        <div class="flex flex-col justify-center items-center">
            <div class="w-full lg:w-7/12 flex flex-col lg:flex-row items-center title">
                <img src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/titulo.png" alt="">
                <h1 class="font-avant text-4xl lg:text-6xl 2xl:text-7xl">claves de éxito</h1>
            </div>
            <div class="w-10/12">
                <div class="flex flex-col lg:flex-row items-center">
                    <div class="w-full lg:w-4/12">
                        <div class="flex justify-center">
                            <div class="w-6/12 flex flex-col items-center pasos_box">
                                <a href="https://facebook.com"><img class="mx-5 my-5" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/pasos_1.png" alt=""></a>
                                <img class="mx-5 my-5" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/pasos_3.png" alt="">
                                <img class="mx-5 my-5" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/pasos_5.png" alt="">
                            </div>
                            <div class="w-6/12 flex flex-col items-center pasos_box flex flex-col justify-center">
                                <img class="mx-5 my-5" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/pasos_2.png" alt="">
                                <img class="mx-5 my-5" src="<?php echo get_template_directory_uri(  ) ?>/assets/section_claves/pasos_4.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full  lg:w-8/12 relative">
                        <swiper-container class="swiperExito w-full"  space-between="10"
                        slides-per-view="1" navigate="true">
                            <swiper-slide>
                            <div class="w-full box-text lg:ms-16">
                                <div class="flex flex-col">
                                    <div class="title flex items-center my-5">
                                        <div class="number font-avant text-5xl">
                                                1
                                        </div>
                                        <div class="font-avant text-2xl lg:text-3xl mx-4">Objetivos claros</div>
                                    </div>
                                    <div class="content w-full lg:w-9/12">
                                        <p>
                                        No solo mejorar la comprensión lectora, sino también, amplia el vocabulario, fomenta el pensamiento crítico y crea el hábito y el gusto por la lectura.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </swiper-slide>
                            <swiper-slide>
                            <div class="w-full box-text lg:ms-16">
                                <div class="flex flex-col">
                                    <div class="title flex items-center my-5">
                                        <div class="number font-avant text-5xl">
                                                2
                                        </div>
                                        <div class="font-avant text-2xl lg:text-3xl mx-4">Objetivos claros</div>
                                    </div>
                                    <div class="content w-full lg:w-9/12">
                                        <p>
                                        No solo mejorar la comprensión lectora, sino también, amplia el vocabulario, fomenta el pensamiento crítico y crea el hábito y el gusto por la lectura.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            </swiper-slide>
                        </swiper-container>
                        <div class="swiper-button-prev swiperExito-prev"></div>
                        <div class="swiper-button-next swiperExito-next"></div>
                    </div>
                </div>
            </div>
            <div class="w-full">
                <div class="container mb-28">
                    <div class="flex">
                        <div class="w-full flex justify-center lg:w-6/12 my-16 relative">
                            <div class="card-text md:ms-16 absolute md:relative z-50 md:z-auto">
                            En un entorno sincrónico, facilitamos la lectura tanto digital como impresa en el aula. De forma asincrónica, proporcionamos acceso a nuestra biblioteca virtual, permitiendo la lectura desde casa. <br><br>Las obras han sido seleccionadas con una importante visión pedagógica, con el objetivo de fortalecer el desarrollo de habilidades integrales para el crecimiento lector <br><br>Las actividades interactivas se encuentran organizadas en un itinerario flexible y basadas en estándares internacionales de evaluación.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>

    const swiperExito = document.querySelector('.swiperExito');
    Object.assign(swiperExito, {
        slidesPerView: 1,
        spaceBetween: 5,
        navigation: {
            nextEl: '.swiperExito-next', // Clase específica para "Next"
            prevEl: '.swiperExito-prev', // Clase específica para "Prev"
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
                slidesPerView: 1,
                spaceBetween: 33,
            },
            "@1.50": {
                slidesPerView: 1,
                spaceBetween: 33,
            },
            "@2": {
                slidesPerView: 1,
                spaceBetween: 33,
            },
            "@2.50": {
                slidesPerView: 1,
                spaceBetween: 33,
            },
        },
    });
</script>