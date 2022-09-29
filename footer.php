<?php
    wp_footer();
    ?>

<footer>
    <div class="copyright">
    <p>
                        <?php 
                            printf( 
                                '%s. %s &copy; %s', 
                                get_theme_mod('copyright_text', __( '© Copyright 2021 HOA Management', 'copyright_text' ) ),
                                get_bloginfo('name'), 
                                date_i18n( 'Y' )
                            ); 
                        ?>
                    </p>
    </div>
</footer>


    
</html>