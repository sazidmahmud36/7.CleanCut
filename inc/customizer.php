 <?php 
	function cleancut_customize_register($wp_customize){
		//Showcase Section
		$wp_customize -> add_section('showcase', array(
			'title' => __('Showcase', 'cleancut') , 
			'description' => sprintf(__('Options for showcase area','cleancut')),
			'priority' => 130, 
		));
//=======================================================================================
		//Image Setting
		$wp_customize -> add_setting('showcase_image',  array(
			'default' => get_bloginfo('template_directory').'/img/showcase.jpg', 
			'type' => 'theme_mod'
		));
		//Image Control
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image',array(
			'label' =>  __('Background Image', 'cleancut'),
			'section' => 'showcase',
			'settings' => 'showcase_image',
			'priority' => 1
		)));
//=======================================================================================
		//Height Setting
		$wp_customize -> add_setting('showcase_height',  array(
			'default' => _x(600,'cleancut'), 
			'type' => 'theme_mod'
		));

		//Height Control
		$wp_customize -> add_control('showcase_height',array(
			'label' => __('Showcase Height','cleancut'), 
			'section' => 'showcase', 
			'priority' => 2, 
		));
//=======================================================================================

		//Heading Setting
		$wp_customize -> add_setting('showcase_heading',  array(
			'default' => _x('Cleancut Theme','cleancut'), 
			'type' => 'theme_mod'
		));

		//Heading Control
		$wp_customize -> add_control('showcase_heading',array(
			'label' => __('Heading','cleancut'), 
			'section' => 'showcase', 
			'priority' => 3, 
		));

//=======================================================================================
		//Text Setting
		$wp_customize -> add_setting('showcase_text',  array(
			'default' => _x('Custom Wordpress Theme by You','cleancut'), 
			'type' => 'theme_mod'
		));

		//Text Control
		$wp_customize -> add_control('showcase_text',array(
			'label' => __('Text','cleancut'), 
			'section' => 'showcase', 
			'priority' => 4, 
		));
//=======================================================================================
//=======================================================================================

		//Facebook URL Section
		$wp_customize -> add_section('social', array(
			'title' => __('Social', 'cleancut') , 
			'description' => sprintf(__('Social Media URLs','cleancut')),
			'priority' => 140, 
		));

//=======================================================================================
		//Facebook URLs Setting
		$wp_customize -> add_setting('facebook_url',  array(
			'default' => _x('https://www.facebook.com/','cleancut'), 
			'type' => 'theme_mod'
		));

		//Facebook URLs Control
		$wp_customize -> add_control('facebook_url',array(
			'label' => __('Facebook URL','cleancut'), 
			'section' => 'social', 
			'priority' => 1, 
		));
//=======================================================================================

		//Twiteer URLs Setting
		$wp_customize -> add_setting('twiteer_url',  array(
			'default' => _x('https://www.twiteer.com/','cleancut'), 
			'type' => 'theme_mod'
		));

		//Twiteer URLs Control
		$wp_customize -> add_control('twiteer_url',array(
			'label' => __('Twiteer URL','cleancut'), 
			'section' => 'social', 
			'priority' => 2, 
		));
//=======================================================================================
		//Linkedin URLs Setting
		$wp_customize -> add_setting('linkedin_url',  array(
			'default' => _x('https://www.linkedin.com/','cleancut'), 
			'type' => 'theme_mod'
		));

		//Linkedin URLs Control
		$wp_customize -> add_control('linkedin_url',array(
			'label' => __('Linkedin URL','cleancut'), 
			'section' => 'social', 
			'priority' => 2, 
		));
		// ));
//=======================================================================================
//=======================================================================================

		//Bottom Banner Section
		$wp_customize -> add_section('banner', array(
			'title' => __('Bottom Banner', 'cleancut') , 
			'description' => sprintf(__('Options for Bottom Banner Area','cleancut')),
			'priority' => 160, 
		));
//=======================================================================================
		//Image Setting
		$wp_customize -> add_setting('banner_image',  array(
			'default' => get_bloginfo('template_directory').'/img/banner.jpg', 
			'type' => 'theme_mod'
		));
		//Image Control
		$wp_customize -> add_control(new WP_Customize_Image_Control($wp_customize,'banner_image',array(
			'label' =>  __('Background Image', 'cleancut'),
			'section' => 'banner',
			'settings' => 'banner_image',
			'priority' => 1
		)));
//=======================================================================================
		//Heading Setting
		$wp_customize -> add_setting('banner_heading',  array(
			'default' => _x('Follow Us On Social Media : ','cleancut'), 
			'type' => 'theme_mod'
		));

		//Heading Control
		$wp_customize -> add_control('banner_heading',array(
			'label' => __('Heading','cleancut'), 
			'section' => 'banner', 
			'priority' => 3, 
		));

//=======================================================================================
//=======================================================================================

		//Misc Options Section
		$wp_customize -> add_section('misc', array(
			'title' => __('Misc Options','cleancut'),
			'description' => sprintf(__('Misc Options For Theme', 'cleancut' )),
			'priority' => 150
		));


		$wp_customize -> add_setting('animation', array(
			'default' => '1', 
		));

		$wp_customize -> add_control(
			new WP_Customize_Control(
			$wp_customize,'animation', array(
				'label' => __('Enable Animation','cleancut'), 
				'section' => 'misc', 
				'setting' => 'animation', 
				'type' => 'checkbox',
			)
		)

	);



}
	add_action('customize_register','cleancut_customize_register');