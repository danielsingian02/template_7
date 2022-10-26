<?php
    get_header();
?>

<!-- Opening of the div with .body class for the site content -->
<!-- The tags must end after the </footer> -->

        <div class="main">

            <h1>
                <?php printf( get_theme_mod('first_section_heading', __( 'WELCOME TO RIVER HOA', 'first_section_heading' ) )); ?>
            </h1>

            <hr class="hr hr--15">

            <img class="img-map" src="<?php echo get_theme_mod('first_section_image',get_bloginfo('template_directory').'/assets/images/Asset 4.png' )?>" border="0" alt="">

            <p class="first-seciton-subheader">
                <?php printf( get_theme_mod('first_section_subheading', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'first_section_subheading' ) )); ?>
            </p>

            <hr class="hr hr--spacing">

            <h2><?php printf( get_theme_mod('second_section_heading', __( 'We Make it Better', 'second_section_heading' ) )); ?></h2>

            <hr class="hr hr--15">

            <p>
                <?php printf( get_theme_mod('second_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'second_section_paragraph' ) )); ?>
            </p>

            <hr class="hr hr--spacing">

            <h2><?php printf( get_theme_mod('third_section_heading', __( 'Latest Happenings', 'third_section_heading' ) )); ?></h2>

            <hr class="hr hr--15">

            <div class="card__container">
                <div class="card__element">
                    <a href="#">
                        <img src="<?php echo get_theme_mod('Left_Image',get_bloginfo('template_directory').'/assets/images/Asset 3 (1).png' )?>" alt="" class="card__thumb">
                        <h4 class="card__title"><?php printf( get_theme_mod('first_heading', __( 'Prayer Fellowship', 'first_heading' ) )); ?></h4>
                        <p class="card__excerpt"><?php printf( get_theme_mod('first_subheading', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus.', 'first_subheading' ) )); ?></p>
                    </a>
                </div>
                <div class="card__element">
                    <a href="#">
                        <img src="<?php echo get_theme_mod('center_Image',get_bloginfo('template_directory').'/assets/images/Asset 2 (1).png' )?>" alt="" class="card__thumb">
                        <h4 class="card__title"><?php printf( get_theme_mod('second_heading', __( 'Elders Coffee Saturday', 'second_heading' ) )); ?></h4>
                        <p class="card__excerpt"><?php printf( get_theme_mod('second_subheading', __( 'Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra.', 'second_subheading' ) )); ?></p>
                    </a>
                </div>
                <div class="card__element">
                    <a href="#">
                        <img src="<?php echo get_theme_mod('right_Image',get_bloginfo('template_directory').'/assets/images/Asset 1 (1).png' )?>" alt="" class="card__thumb">
                        <h4 class="card__title"><?php printf( get_theme_mod('third_heading', __( 'Get Togethers', 'third_heading' ) )); ?></h4>
                        <p class="card__excerpt"><?php printf( get_theme_mod('third_subheading', __( 'Turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla.', 'third_subheading' ) )); ?></p>
                    </a>
                </div>
            </div>

            <hr class="hr hr--spacing">

            <h2><?php printf( get_theme_mod('fourth_section_heading', __( 'All You Need To Know', 'fourth_section_heading' ) )); ?></h2>
            
            <hr class="hr hr--15">

            <p><?php printf( get_theme_mod('fourth_section_paragraph', __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra,', 'fourth_section_paragraph' ) )); ?></p>

            <div class="spacer"></div>


        </div>

<?php
    get_footer();
?>