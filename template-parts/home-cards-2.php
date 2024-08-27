<div class="w-full justify-center mb-5">
            <div class="title-slider text-center">
                <h4 class="font-avant text-3xl">Para docentes</h4>
            </div>

            <div class="relative container-swiper-docente">
                <swiper-container class="swiperDocente w-full lg:w-11/12 mt-6 mb-16"  space-between="5"
                slides-per-view="3" navigation="true">

                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        1
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    
                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        2
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        3
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        4
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        5
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        6
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                    <swiper-slide>
                        <div class="card-slider docentes">
                            <div class="content flex w-full">
                                <div class="w-4/12 flex items-center">
                                    <div class="number bg-purple">
                                        7
                                    </div>
                                </div>
                                <div class="w-8/12">
                                    <p class="py-3">Acceso a la biblioteca virtual</p>
                                    <!-- <a href="" class="button-purple">Acceder aquí</a> -->
                                </div>
                            </div>
                        </div>
                    </swiper-slide>

                </swiper-container>
                <div class="swiper-button-prev swiperDocente-prev"></div>
                <div class="swiper-button-next swiperDocente-next"></div>
            </div>

        </div>

        <script>

        </script>

        <script>
             // Configuración del swiper para docentes
    const swiperDocente = document.querySelector('.swiperDocente');
    Object.assign(swiperDocente, {
        slidesPerView: 1,
        spaceBetween: 2,
        navigation: {
            nextEl: '.swiperDocente-next', // Clase específica para "Next"
            prevEl: '.swiperDocente-prev', // Clase específica para "Prev"
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
                spaceBetween: 3,
            },
            "@1.50": {
                slidesPerView: 3,
                spaceBetween: 3,
            },
            "@2": {
                slidesPerView: 3,
                spaceBetween: 3,
            },
        },
    });
    swiperDocente.initialize();
        </script>