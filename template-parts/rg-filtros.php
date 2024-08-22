<?php /*template name: rg_filtros */ ?>
<?php get_header(); ?>

<section class="section_filtros mt-40 flex flex-col items-center relative">
    <img class="absolute left-0 -bottom-20 xl:-top-24 w-auto" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/mapache.png" alt="">
    <img class="absolute right-0 -bottom-20 xl:-top-0 w-auto" src="<?php echo get_template_directory_uri(  ) ?>/assets/recursos_digitales/plantitas.png" alt="">

    <div class="container flex justify-center">
        <div class="flex flex-col items-center w-full xl:w-10/12">
            <div class="w-full xl:w-11/12">
                <h1 class="font-avant text-4xl xl:text-6xl text-center xl:text-start">Recursos digitales</h1>
                <h2 class="font-avant color-purple text-3xl xl:text-5xl text-center xl:text-start">Encuentra las guías de tu plan lector</h2>
            </div>
            <div class="w-full xl:w-11/12 mb-5">
                <form action="" class="recursos-form flex flex-col md:flex-row items-center justify-center">
                    <div class="w-full lg:w-4/12 md:me-5">
                        <div class="lg:w-4/12 form-group-select my-5 ">
                            <select id="grados" name="grados">
                                <option value="todos-los-grados">Todos los grados</option>
                                <option value="primero-primaria">Primero Primaria</option>
                                <option value="segundo-primaria">Segundo Primaria</option>
                                <option value="tercero-primaria">Tercero Primaria</option>
                                <option value="cuarto-primaria">Cuarto Primaria</option>
                                <option value="quinto-primaria">Quinto Primaria</option>
                                <option value="sexto-primaria">Sexto Primaria</option>
                                <option value="septimo-grado">Séptimo Grado</option>
                                <option value="octavo-grado">Octavo Grado</option>
                                <option value="noveno-grado">Noveno Grado</option>
                            </select>
                            <i class="fa-solid fa-chevron-down select-arrow"></i>
                        </div>
                    </div>
                    <div class="w-full lg:w-8/12">
                        <div class="search-wrapper">
                            <i class="fa-solid fa-magnifying-glass search-icon"></i>
                            <input type="text" placeholder="Buscar" class="search-input">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php get_template_part( 'template-parts/rg-primero' ) ?>
    <?php get_template_part( 'template-parts/rg-segundo' ) ?>
    <?php get_template_part( 'template-parts/rg-tercero' ) ?>
    <?php get_template_part( 'template-parts/rg-cuarto' ) ?>
    <?php get_template_part( 'template-parts/rg-quinto' ) ?>
    <?php get_template_part( 'template-parts/rg-sexto' ) ?>
    <?php get_template_part( 'template-parts/rg-septimo' ) ?>
    <?php get_template_part( 'template-parts/rg-octavo' ) ?>
    <?php get_template_part( 'template-parts/rg-noveno' ) ?>

</section>


<?php get_footer(); ?>