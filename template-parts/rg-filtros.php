<?php /*template name: rg_filtros */ ?>
<?php get_header(); ?>

<section class="section_filtros mt-40 flex justify-center">
    <div class="container">
        <div class="flex flex-col">
            <div class="w-full">
                <h1 class="font-avant text-4xl text-center">Recursos digitales</h1>
            </div>
            <div class="w-full">
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

</section>


<?php get_footer(); ?>