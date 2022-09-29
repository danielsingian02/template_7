<?php
add_action( 'customize_register', 'customize_register' );
function customize_register( $wp_customize ) {
    // All the Customize Options you create goes here

    // Move Homepage Settings section underneath the "Site Identity" section
    $wp_customize->get_section('title_tagline')->priority = 1;
    $wp_customize->get_section('static_front_page')->priority = 2;
    $wp_customize->get_section('static_front_page')->title = __( 'Customize Homepage', 'customize_register' );

    // Theme Options Panel
$wp_customize->add_panel( 'theme_options', 
array(
    //'priority'       => 100,
    'title'            => __( 'Theme Options', 'theme_options' ),
    'description'      => __( 'Theme Modifications like color scheme, theme texts and layout preferences can be done here', 'theme_options' ),
) 
);

$wp_customize->add_section( 'Page_Options', 
    array(
        'title'         => __( 'Page Options', 'Page_Options' ),
        'priority'      => 1,
        'panel'         => 'theme_options'
    ) 
);

$wp_customize->add_setting( 'Background_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 7 1.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Background_image', 
    array(
        'priority'    => 40,
        'section'     => 'Page_Options',
        'label'       => 'Image',
        'description' => 'Image put here will page(s) background image',
    ) 
));
// Text Options Section Inside Theme
$wp_customize->add_section( 'text_options', 
    array(
        'title'         => __( 'Footer Text Options', 'text_options' ),
        'priority'      => 10,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'copyright_text',
    array(
        'default'           => __( '© Copyright 2021 HOA Management', 'copyright_text' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'copyright_text', 
    array(
        'type'        => 'text',
        'priority'    => 10,
        'section'     => 'text_options',
        'label'       => 'Copyright text',
        'description' => 'Text put here will be shown in the footer',
    ) 
);


//banner
// Text Options Section Inside Theme
$wp_customize->add_section( 'first_section_texts', 
    array(
        'title'         => __( 'First Section Text Options', 'first_section_texts' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'first_section_heading',
    array(
        'default'           => __( 'WELCOME TO RIVER HOA', 'first_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'first_section_texts',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);

$wp_customize->add_setting( 'first_section_image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 4.png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'first_section_image', 
    array(
        'priority'    => 40,
        'section'     => 'first_section_texts',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'first_section_subheading',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'first_section_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_section_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'first_section_texts',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in banner sections heading',
    ) 
);

//second section
// Text Options Section Inside Theme
$wp_customize->add_section( 'second_section_text_options', 
    array(
        'title'         => __( 'Second Section Text Options', 'second_section_text_options' ),
        'priority'      => 2,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'second_section_heading',
    array(
        'default'           => __( 'We Make it Better', 'second_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in second sections heading',
    ) 
);

$wp_customize->add_setting( 'second_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra, turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla, ac lacinia leo erat id erat. Etiam accumsan cursus ipsum iaculis dapibus. Praesent viverra vitae velit sit amet maximus', 'second_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'second_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);




//third section
// Text Options Section Inside Theme
$wp_customize->add_section( 'third_text_options', 
    array(
        'title'         => __( 'Third Section Text Options', 'third_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);

$wp_customize->add_setting( 'third_section_heading',
    array(
        'default'           => __( 'Latest Happenings', 'third_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in third sections heading',
    ) 
);

// Setting for Copyright text.
$wp_customize->add_setting( 'Left_Image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 3 (1).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'Left_Image', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'first_heading',
    array(
        'default'           => __( 'Prayer Fellowship', 'first_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'first_subheading',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus.', 'first_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'first_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Subheading',
        'description' => 'Text put here will bw shown as subheading',
    ) 
);

//-------------------

$wp_customize->add_setting( 'center_Image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 2 (1).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'center_Image', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'second_heading',
    array(
        'default'           => __( 'Elders Coffee Saturday', 'second_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'second_subheading',
    array(
        'default'           => __( 'Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra.', 'second_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'second_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Subheading',
        'description' => 'Text put here will bw shown as subheading',
    ) 
);

//-------------------

$wp_customize->add_setting( 'right_Image',
    array(
        'default'           => get_bloginfo('template_directory').'/assets/images/Asset 1 (1).png',
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'right_Image', 
    array(
        'priority'    => 40,
        'section'     => 'third_text_options',
        'label'       => 'Image',
        'description' => 'Image put here will be shown the first image',
    ) 
));

$wp_customize->add_setting( 'third_heading',
    array(
        'default'           => __( 'Get Togethers', 'third_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown as heading',
    ) 
);

$wp_customize->add_setting( 'third_subheading',
    array(
        'default'           => __( 'Turpis neque ornare augue, vitae convallis dolor libero vitae lectus. Donec in dictum neque. Nunc tempor, odio nec sodales lacinia, tellus urna viverra nulla.', 'third_subheading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'third_subheading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'third_text_options',
        'label'       => 'Subheading',
        'description' => 'Text put here will bw shown as subheading',
    ) 
);

//-------------------

//fourth section
// Text Options Section Inside Theme
$wp_customize->add_section( 'fourth_section_text_options', 
    array(
        'title'         => __( 'Fourth Section Text Options', 'fourth_section_text_options' ),
        'priority'      => 4,
        'panel'         => 'theme_options'
    ) 
);
// Setting for Copyright text.
$wp_customize->add_setting( 'fourth_section_heading',
    array(
        'default'           => __( 'All You Need To Know', 'fourth_section_heading' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'fourth_section_heading', 
    array(
        'type'        => 'text',
        'priority'    => 20,
        'section'     => 'fourth_section_text_options',
        'label'       => 'Heading',
        'description' => 'Text put here will be shown in fourth sections heading',
    ) 
);

$wp_customize->add_setting( 'fourth_section_paragraph',
    array(
        'default'           => __( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque justo metus, auctor non consequat vel, iaculis ut ante. Nulla vitae condimentum libero, ac pretium lectus. Pellentesque eget turpis tempus, accumsan odio ac, suscipit ex. Sed malesuada, leo posuere rutrum viverra,', 'fourth_section_paragraph' ),
        'sanitize_callback' => 'sanitize_text_field',
        'transport'         => 'refresh',
    )
);
$wp_customize->add_control( 'fourth_section_paragraph', 
    array(
        'type'        => 'textarea',
        'priority'    => 20,
        'section'     => 'fourth_section_text_options',
        'label'       => 'Description',
        'description' => 'Text put here will be shown in second sections description',
    ) 
);
}
?>