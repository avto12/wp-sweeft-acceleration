<?php

    function wpsweeft_customize_register($wp_customize) {

        // showcase Section

        $wp_customize->add_section('section', array(
            'title'         =>  __('Section', 'sweefttheme'),
            'description'   =>  sprintf(__('Options for section', 'sweefttheme')),
            'priority'      =>  130
        ));

        //  Start customize Image
        $wp_customize->add_setting('section_image', array(
            'default'   =>  get_bloginfo(('template_directory').'', 'sweefttheme'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'section_image', array(
            'label'     =>  __('Section Image', 'sweefttheme'),
            'section'   =>  'section',
            'settings'  =>  'section_image',
            'priority'  =>  1
        )));
        //  End customize Image

        //  Start customize heading
        $wp_customize->add_setting('section_heading', array(
            'default'   =>  _x(' ', 'sweefttheme'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('section_heading', array(
            'label'     =>  __('Heading', 'sweefttheme'),
            'section'   =>  'section',
            'priority'  =>  2
        ));
        //  End customize heading

        //  Start customize text
        $wp_customize->add_setting('section_text', array(
            'default'   =>  _x(' ', 'sweefttheme'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('section_text', array(
            'label'     =>  __('Text', 'sweefttheme'),
            'section'   =>  'section',
            'priority'  =>  3
        ));
        //  End customize text

        //  Start customize link
        $wp_customize->add_setting('btn_url', array(
            'default'   =>  _x(' ', 'sweefttheme'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('btn_url', array(
            'label'     =>  __('Button URL', 'sweefttheme'),
            'section'   =>  'section',
            'priority'  =>  4
        ));
        //  End customize  link

        //  Start customize Btn Text
        $wp_customize->add_setting('btn_text', array(
            'default'   =>  _x(' ', 'sweefttheme'),
            'type'      =>  'theme_mod'
        ));

        $wp_customize->add_control('btn_text', array(
            'label'     =>  __('Button Text', 'sweefttheme'),
            'section'   =>  'section',
            'priority'  =>  5
        ));
        //  End customize Btn Text


    }

    add_action('customize_register', 'wpsweeft_customize_register');



?>