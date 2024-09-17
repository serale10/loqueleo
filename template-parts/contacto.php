
<?php /*template name: contact */ ?>
<?php get_header(); ?>

<section class="section_contact flex justify-center relative">
    <img class="absolute left-0 -bottom-10 z-10 w-40 lg:w-96 xl:w-auto lg:-bottom-14 xl:-bottom-20" src="<?php echo get_template_directory_uri(  ) ?>/assets/contacto/chica_2.png" alt="">
    <img class="absolute right-0 bottom-0 z-10 w-40  xl:w-auto lg:top-1/2 transform -translate-y-1/2" src="<?php echo get_template_directory_uri(  ) ?>/assets/contacto/avestruz.png" alt="">
    <img class="absolute right-0 -bottom-10 z-10 w-96 xl:w-auto xl:-bottom-20" src="<?php echo get_template_directory_uri(  ) ?>/assets/contacto/brush_down.png" alt="">
    <img class="absolute left-0 top-0 z-10 w-96 xl:w-auto xl:-bottom-20" src="<?php echo get_template_directory_uri(  ) ?>/assets/contacto/brush_up.png" alt="">
    <div class="container">
        <div class="flex justify-end">
            <div class="w-full lg:w-8/12 xl:w-7/12">
                <div class="contact-form mt-40 flex flex-col px-5 relative">
                    <form class="registro-form px-8 xl:px-16 z-20" action="">
                        <div class="title font-avant text-center xl:text-start text-4xl xl:text-5xl my-5">Accede <br>a tu ruta</div>
                        <div class="form-group">
                            <label for="institucion">Nombre de Institución</label>
                            <input type="text" id="institucion" name="institucion" placeholder="Nombre de la institución">
                        </div>
                        <div class="form-group flex">
                            <div class="form-group w-1/2 me-2">
                                <label for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" placeholder="Nombre">
                            </div>
                            <div class="form-group w-1/2">
                                <label for="apellido">Apellido</label>
                                <input type="text" id="apellido" name="apellido" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email">Correo electrónico</label>
                            <input type="email" id="email" name="email" placeholder="Correo electrónico">
                        </div>
                        <div class="form-group">
                            <label for="perfil">Perfil</label>
                            <select id="perfil" name="perfil">
                                <option value="">Seleccione un perfil</option>
                                <option value="">Docente</option>
                                <option value="">Director</option>
                                <option value="">Coordinador</option>
                                <option value="">Otro (cuando seleccione otro se debe abrir un campo para escribir el perfil)</option>
                                <!-- Agregar opciones aquí -->
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="codigo">Código (listado en tu tarjeta)</label>
                            <input type="text" id="codigo" name="codigo" placeholder="Código (proporcionado por tu asesor educativo)">
                        </div>
                        <div class="form-group flex justify-end">
                            <button type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>