<?php /*template name: footer */ ?>

    
    <footer id="footer" role="contentinfo" class="w-full mt-5 bg-blue flex justify-center items-center text-white absolute z-50">
        <div class="container">
            <div class="flex flex-col lg:flex-row items-center my-10 lg:my-0">
                <div class="w-full lg:w-4/12 flex justify-center xl:justify-start items-center my-3">
                    <img class="logo_header" src="<?php echo get_template_directory_uri(  ) ?>/assets/logo_loqueleo_bl.png" alt="">
                </div>
                <div class="w-full lg:w-4/12 flex justify-center items-center my-3">
                    <a href="" class="text-white text-3xl mx-6"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="" class="text-white text-3xl mx-6"><i class="fa-brands fa-instagram"></i></a>
                    <a href="" class="text-white text-3xl mx-6"><i class="fa-brands fa-youtube"></i></a>
                </div>
                <div class="w-full lg:w-4/12 text-xl flex justify-center xl:justify-end items-center my-3">
                        <i class="fa-light fa-globe text-3xl mx-2"></i>
                        <a>catalogo.Santillana.com.gt</a>
                </div>
            </div>
        </div>
    </footer>

    

</main> <!--fin div container -->
<script src="<?php echo get_template_directory_uri(  ) ?>/assets/js/swiperjs.js"></script>
<?php wp_footer(); ?>
</body>
</html>