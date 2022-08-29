<?php

// Only allow network admins to access options in this config
Kirki::add_config( 'stack_config', [
	'option_type' => 'theme_mod',
	'capability'  => 'manage_network_plugins'
]);

new \Kirki\Panel(
	'stack_panel',
	[
		'priority'    => 10,
		'title'       => esc_html__( 'Banner Heading Section', 'stack' ),
		'description' => esc_html__( 'This is for Banner Heading Section.', 'stack' ),
	]
);

// Banner / Hero Section
new \Kirki\Section(
	'banner_section',
	[
		'title'       => esc_html__( 'Banner Heading', 'stack' ),
		'description' => esc_html__( 'Banner Banner Heading.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);

// THis is for adding lablel Section 
new \Kirki\Field\Custom(
	[
		'section'     => 'banner_section',
		'default'     => '<h3 style="color:#585b60; padding:15px 10px; text-align:center;background-color:#fff;">Banner Banner Heading</h3>',
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'banner_heading',
		'label'    => esc_html__( 'Banner Heading Text Control', 'stack' ),
		'section'  => 'banner_section',
		'default'  => esc_html__( 'WE DISCOVER, DESIGN & BUILD DIGITAL </br> PRESENCE OF BUSINESSES', 'stack' ),
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.head-title',
				'function' => 'html',
				//'property' => 'color',
			],			
		],
	]
);

new \Kirki\Field\Color(
	[
		'settings'    => 'banner_heading_text_color',
		'label'       => __( 'Banner Heading Text Color Control', 'stack' ),
		'description' => esc_html__( 'Regular color control, no alpha channel.', 'stack' ),
		'section'     => 'banner_section',
		'default'     => '#585b60',
	]
);


new \Kirki\Field\Typography(
	[
		'settings'    => 'bannel_heading_typography',
		'label'       => esc_html__( 'Banner Heading Section Typography', 'stack' ),
		'description' => esc_html__( 'The full set of options.', 'stack' ),
		'section'     => 'banner_section',
		'transport'   => 'auto',
		'default'     => [
			'font-family'     => 'Titillium Web',
			'variant'         => '700',
			'font-style'      => 'normal',
			'text-transform'  => 'uppercase',
			'text-decoration' => 'none',
			'text-align'      => 'center',
		],
		'output'      => [
			[
				'element' => 'h2.head-title',
			],
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'banner_section_btn_text',
		'label'    => esc_html__( 'Banner Heading Text Control', 'stack' ),
		'section'  => 'banner_section',
		'default'  => esc_html__( 'Explore', 'stack' ),
		'priority' => 10,
	]
);


new \Kirki\Field\URL(
	[
		'settings' => 'banner_section_btn_url',
		'label'    => esc_html__( 'Button URL', 'stack' ),
		'section'  => 'banner_section',
		'default'  => 'https://www.google.com',
		'priority' => 10,
	]
);

new \Kirki\Field\Image(
	[
		'settings'    => 'banner_section_image',
		'label'       => esc_html__( 'Image Control (URL)', 'stack' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'stack' ),
		'section'     => 'banner_section',
		'default'     => '',
	]
);

// THis is for adding lablel Section 
new \Kirki\Field\Custom(
	[
		'section'     => 'banner_section',
		'default'     => '<h3 style="color:#585b60; padding:15px 10px; text-align:center;background-color:#fff;">Hero Section Bacground Image</h3>',
	]
);

new \Kirki\Field\Background(
	[
		'settings'    => 'hero_area_background_setting',
		'label'       => esc_html__( 'Stack Hero Area Background Image', 'stack' ),
		'description' => esc_html__( 'This is for Hero area background image', 'stack' ),
		'section'     => 'banner_section',
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'fixed',
		],
		'transport'   => 'postMessage',
		'output'      => [
			[
				'element' => '#hero-area',
			],
		],
	]
);






// About Section
new \Kirki\Section(
	'about_section',
	[
		'title'       => esc_html__( 'About Section', 'stack' ),
		'description' => esc_html__( 'This is for about Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'about_tilte',
		'label'    => esc_html__( 'About Section Tilte', 'stack' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'We are helping to grow </br> your business.', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.title-hl',
				'function' => 'html',
				//'property' => 'color',
			],			
		],
	]
);

new \Kirki\Field\Textarea(
	[
		'settings'    => 'about_description',
		'label'       => esc_html__( 'About Description Section', 'stack' ),
		'section'     => 'about_section',
		'default'     => esc_html__( 'A digital studio specialising in User Experience & eCommerce, we combine innovation with digital craftsmanship to help brands fulfill their potential', 'stack' ),
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.text-wrapper p',
				'function' => 'html',
				//'property' => 'color',
			],			
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'about_button_text',
		'label'    => esc_html__( 'About Button Text', 'stack' ),
		'section'  => 'about_section',
		'default'  => esc_html__( 'More About US', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.text-wrapper a',
				'function' => 'html',
				//'property' => 'color',
			],			
		],
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'about_button_link',
		'label'    => esc_html__( 'About Button Link', 'stack' ),
		'section'  => 'about_section',
		'default'  => 'https://yoururl.com/',
		'priority' => 10,
		'transport' => 'refresh',
		
	]
);
// Repeater Section
new \Kirki\Field\Repeater(
	[
		'settings' => 'about_section_repeater',
		'label'    => esc_html__( 'Our Featues', 'stack' ),
		'section'  => 'about_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'about features', 'stack' ),
			'field' => 'about_title',
		],
		'fields'   => [
			'about_title'   => [
				'type'        => 'text',
				'label'       => esc_html__( 'Our Features Tilte', 'stack' ),
				'description' => esc_html__( 'Type your Features Title', 'stack' ),
				'default'     => esc_html__('WHAT WE DO'),
			],
			'about_description'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Link URL', 'stack' ),
				'description' => esc_html__( 'Description', 'stack' ),
				'default'     => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia con- sequuntur magni dolores'),
			],
			'about_icon' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Icon', 'stack' ),
				'description' => esc_html__( 'Select icon', 'stack' ),
				'default'     => 'lni-microphone',
				'choices'     => [
					'lni-microphone' => esc_html__( 'Line Microphone', 'stack' ),
					'lni-users'  => esc_html__( 'Line User', 'stack' ),
					'lni-medall-alt'  => esc_html__( 'Line Mladdal Alt', 'stack' ),
				],
			],
		],
		'choices' => [
			'limit' => 3
		]
	]
);







// Service Section
new \Kirki\Section(
	'service_section',
	[
		'title'       => esc_html__( 'Service Section', 'stack' ),
		'description' => esc_html__( 'This is for service Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'service_show_hide',
		'label'       => esc_html__( 'Service Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Service Show or Hide', 'stack' ),
		'section'     => 'service_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_section_tilte',
		'label'    => esc_html__( 'Service Section Tilte', 'stack' ),
		'section'  => 'service_section',
		'default'  => esc_html__( 'OUR SERVICES', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#services .section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'service_section_description',
		'label'    => esc_html__( 'Service Section Description', 'stack' ),
		'section'  => 'service_section',
		'default'  => esc_html__( 'A desire to help and empower others between community contributors in </br>technology began to grow in 2020.', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#services .section_desc',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Select(
	[
		'settings'    => 'service_animation',
		'label'       => esc_html__( 'Select Animation', 'kirki' ),
		'section'     => 'service_section',
		'default'     => 'bounceInUp',
		'placeholder' => esc_html__( 'Select animation Type From here ', 'kirki' ),
		'choices'     => [
			'bounceInUp' 		=> esc_html__( 'Bounce In up', 'stack' ),
			'slideInLeft' 		=> esc_html__( 'Slide in Left', 'stack' ),
			'bounceInLeft' 		=> esc_html__( 'Bounce In left', 'stack' ),
		],
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'service_section_repeater_item',
		'label'    => esc_html__( 'Repeater Control', 'stack' ),
		'section'  => 'service_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'about features', 'stack' ),
			'field' => 'signle_service_title',
		],
		'default'  => [
			[
				'signle_service_title'   	=> esc_html__( 'Content Writing', 'stack' ),
				'signle_service_icon'    	=> 'lni-pencil',
				'signle_service_animation'	=> 'bounceInUp',
				'signle_service_desc'		=> esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack' ),
				
			],
		],
		'fields'   => [
			'signle_service_icon'   => [
				'type'        => 'select',
				'label'       => esc_html__( 'Select Icon ', 'stack' ),
				'description' => esc_html__( 'Select incon From here ', 'stack' ),
				'default'     => 'lni-pencil',
				'choices'     => [
					'lni-pencil' 	=> esc_html__( 'Line Pencil', 'stack' ),
					'lni-briefcase' => esc_html__( 'Briefcase', 'stack' ),
					'lni-cog' 		=> esc_html__( 'Settings', 'stack' ),
					'lni-mobile' 	=> esc_html__( 'Option Mobile', 'stack' ),
					'lni-layers' 	=> esc_html__( 'Option Layers', 'stack' ),
					'lni-rocket' 	=> esc_html__( 'Option Rocket', 'stack' ),
				],
			],
			'signle_service_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Single Service Title', 'stack' ),
				'description' => esc_html__( 'Write Single Service Title', 'stack' ),
				'default'     => esc_html('Content Writing','stack'),
			],
			'signle_service_animation_time'    => [
				'type'        => 'number',
				'label'       => esc_html__( 'Animation Time', 'stack' ),
				'description' => esc_html__( 'Write Number in s', 'stack' ),
				'default'     => '',
			],
			'signle_service_desc'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Single Service Description', 'stack' ),
				'description' => esc_html__( 'Write signle service description', 'stack' ),
				'default'     => esc_html('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde perspiciatis dicta labore nulla beatae quaerat quia incidunt laborum aspernatur...', 'stack'),
			],
			
			
		],
		'choices' => [
			'limit' => 6
		]
	]
);

// Video Section
new \Kirki\Section(
	'video_section',
	[
		'title'       => esc_html__( 'Video Section', 'stack' ),
		'description' => esc_html__( 'This is for Video Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'video_show_hide',
		'label'       => esc_html__( 'Video Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Video Show or Hide', 'stack' ),
		'section'     => 'video_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'video_section_title',
		'label'    => esc_html__( 'Video Section title', 'stack' ),
		'section'  => 'video_section',
		'default'  => esc_html__( 'Watch', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.video-promo-content h2',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'video_url',
		'label'    => esc_html__( 'Give video link', 'stack' ),
		'section'  => 'video_section',
		'default'  => 'https://www.youtube.com/watch?v=zX0AV6yxyrQ',
		'priority' => 10,
	]
);
new \Kirki\Field\Background(
	[
		'settings'    => 'video_section_background',
		'label'       => esc_html__( 'Background Control', 'kirki' ),
		'description' => esc_html__( 'Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'video_section',
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '.video-promo',
			],
		],
	]
);



// Team Section
new \Kirki\Section(
	'team_section',
	[
		'title'       => esc_html__( 'Team Section', 'stack' ),
		'description' => esc_html__( 'This is for team Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'team_show_hide',
		'label'       => esc_html__( 'Team Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' TeamShow or Hide', 'stack' ),
		'section'     => 'team_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'team_section_title',
		'label'    => esc_html__( 'Team Section title', 'stack' ),
		'section'  => 'team_section',
		'default'  => esc_html__( 'MEET OUR TEAM', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#team .section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'team_section_description',
		'label'    => esc_html__( 'Team Descritption', 'stack' ),
		'section'  => 'team_section',
		'default'  =>esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.','stack'),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#team p',
				'function' => 'html',
			],			
		],
	]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'team_section_repeater_item',
		'label'    => esc_html__( 'Team Item', 'stack' ),
		'section'  => 'team_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Team Member Name', 'stack' ),
			'field' => 'signle_member_name',
		],
		'default'  => [
			[
				'signle_member_name'   	=> esc_html__( 'Jone Smith', 'stack' ),
				'signle_member_designation'   	=> esc_html__( 'Web Developer', 'stack' ),
				
			],
		],
		'fields'   => [
			'signle_member_name'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Team Member Name', 'stack' ),
				'description' => esc_html__( 'Write Team Member Name', 'stack' ),
				'default'     => esc_html('David Smith','stack'),
			],
			'signle_member_designation'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Single Service Description', 'stack' ),
				'description' => esc_html__( 'Write signle service description', 'stack' ),
				'default'     => esc_html('Web Developer', 'stack'),
			],
			'signle_member_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Team Member image', 'stack' ),
				'description' => esc_html__( 'Team Member Image', 'stack' ),
				'default'     => '',
			],
			'signle_member_facebook'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Facebook Profile Link Here', 'stack' ),
				'default'     => '',
			],
			'signle_member_twitter'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Twitter Profile Link Here', 'stack' ),				
				'default'     => '',
			],
			'signle_member_instagram'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Instagram Profile Link Here', 'stack' ),				
				'default'     => '',
			],
			'signle_member_youtube'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Youtube Profile Link Here', 'stack' ),
				'default'     => '',
			],
			'signle_member_others'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Others Profile Link Here', 'stack' ),
				'default'     => '',
			],
			
			
		],
		'choices' => [
			'limit' => 6
		]
	]
);



// Counter Section
new \Kirki\Section(
	'counter_section',
	[
		'title'       => esc_html__( 'Counter Section', 'stack' ),
		'description' => esc_html__( 'This is for Counter Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'counter_show_hide',
		'label'       => esc_html__( 'Counter Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Counter Show or Hide', 'stack' ),
		'section'     => 'counter_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);



new \Kirki\Field\Background(
	[
		'settings'    => 'counter_background',
		'label'       => esc_html__( 'Counter Background Control', 'kirki' ),
		'description' => esc_html__( 'Counter Background conrols are pretty complex! (but useful if used properly)', 'kirki' ),
		'section'     => 'counter_section',
		'default'     => [
			'background-color'      => '',
			'background-image'      => '',
			'background-repeat'     => 'no-repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#counter',
			],
		],
	]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'counter_section_repeater',
		'label'    => esc_html__( 'Counte Section Reperater', 'stack' ),
		'section'  => 'counter_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Counter Text', 'stack' ),
			'field' => 'counter_text',
		],
		'fields'   => [
			'counter_icon' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Icon', 'stack' ),
				'description' => esc_html__( 'Select icon', 'stack' ),
				'default'     => 'lni-microphone',
				'choices'     => [
					'lni-users' => esc_html__( 'Line Users', 'stack' ),
					'lni-emoji-smile'  => esc_html__( 'Line Emoji Smile', 'stack' ),
					'lni-download'  => esc_html__( 'Line Download', 'stack' ),
					'lni-thumbs-up'  => esc_html__( 'Line Thumbs Up', 'stack' ),
				],
			],
			'counter_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Counte Text Here ', 'stack' ),
				'description' => esc_html__( 'Counte Text Here ', 'stack' ),
				'default'     => esc_html__('Users', 'stack'),
			],
			'counter_number'    => [
				'type'        => 'number',
				'label'       => esc_html__( 'Counte Number Here ', 'stack' ),
				'description' => esc_html__( 'Counte Number Here ', 'stack' ),
				'default'     => esc_html__('42', 'stack'),
			],
			
		],
		'choices' => [
			'limit' => 4
		]
	]
);

// Pricing Section
new \Kirki\Section(
	'pricing_section',
	[
		'title'       => esc_html__( 'Pricing Section', 'stack' ),
		'description' => esc_html__( 'This is for Pricing Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'pricing_show_hide',
		'label'       => esc_html__( 'Pricing Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Pricing Show or Hide', 'stack' ),
		'section'     => 'pricing_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'pricing_section_title',
		'label'    => esc_html__( 'pricing Section title', 'stack' ),
		'section'  => 'pricing_section',
		'default'  => esc_html__( 'Best Pricing', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#pricing .section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'pricing_section_description',
		'label'    => esc_html__( 'Pricing Descritption', 'stack' ),
		'section'  => 'pricing_section',
		'default'  =>esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.','stack'),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#pricing .section-header p',
				'function' => 'html',
			],			
		],
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'pricing_section_repeater',
		'label'    => esc_html__( 'Counte Section Reperater', 'stack' ),
		'section'  => 'pricing_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'pricing Text', 'stack' ),
			'field' => 'pricing_table_headline',
		],
		'fields'   => [
			'pricing_table_headline'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'pricing  table headline Text Here ', 'stack' ),
				'description' => esc_html__( 'pricing table headline Text Here ', 'stack' ),
				'default'     => esc_html__('Basic', 'stack'),
			],
			'pricing_table_btn'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Button Text ', 'stack' ),
				'description' => esc_html__( 'Button Text ', 'stack' ),
				'default'     => esc_html__('Get it', 'stack'),
			],
			'pricing_table_btn_link'    => [
				'type'        => 'url',
				'label'       => esc_html__( 'Button URL ', 'stack' ),
				'description' => esc_html__( 'Button URL ', 'stack' )
			],
			'pricing_table_fe1'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 1 ', 'stack' ),
				'description' => esc_html__( 'Feature 1 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe2'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 2 ', 'stack' ),
				'description' => esc_html__( 'Feature 2 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe3'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 3 ', 'stack' ),
				'description' => esc_html__( 'Feature 3 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe4'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 4 ', 'stack' ),
				'description' => esc_html__( 'Feature 4 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe5'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 5 ', 'stack' ),
				'description' => esc_html__( 'Feature 5 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe6'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 6 ', 'stack' ),
				'description' => esc_html__( 'Feature 6 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe7'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 7 ', 'stack' ),
				'description' => esc_html__( 'Feature 7 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe8'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 8 ', 'stack' ),
				'description' => esc_html__( 'Feature 8 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe9'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 9 ', 'stack' ),
				'description' => esc_html__( 'Feature 9 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			'pricing_table_fe10'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Feature 10 ', 'stack' ),
				'description' => esc_html__( 'Feature 10 ', 'stack' ),
				'default'     => esc_html__('', 'stack'),
			],
			
			'pricing_price_number'    => [
				'type'        => 'number',
				'label'       => esc_html__( 'pricing Number Here ', 'stack' ),
				'description' => esc_html__( 'pricing Number Here ', 'stack' ),
				'default'     => esc_html__('12.90', 'stack'),
			],
			'pricing_catagory' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Per Month or Year?', 'stack' ),
				'description' => esc_html__( 'Pricing according to month or yearly?', 'stack' ),
				'default'     => 'month',
				'choices'     => [
					'month' => esc_html__( 'Month', 'stack' ),
					'year'  => esc_html__( 'Year', 'stack' ),
					
				],
			],
			'pricing_currency' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Currentcy Type', 'stack' ),
				'description' => esc_html__( 'Currentcy Type', 'stack' ),
				'default'     => '$',
				'choices'     => [
					'$' => esc_html__( 'Doller', 'stack' ),
					'৳'  => esc_html__( 'Taka', 'stack' ),
					
				],
			],
			
			'pricing_featured' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Featured?', 'stack' ),
				'description' => esc_html__( 'Pricing Featured Table?', 'stack' ),
				'default'     => '',
				'choices'     => [
					'active-tb' => esc_html__( 'Featured', 'stack' ),
					''  => esc_html__( 'Not Featured', 'stack' ),
					
				],
			],
			
			
			
		],
		'choices' => [
			'limit' => 3
		]
	]
);
// Skills Section
new \Kirki\Section(
	'skills_section',
	[
		'title'       => esc_html__( 'Skills Section', 'stack' ),
		'description' => esc_html__( 'This is for Skills Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'skills_show_hide',
		'label'       => esc_html__( 'Pricing Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Pricing Show or Hide', 'stack' ),
		'section'     => 'skills_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Image(
	[
		'settings' => 'skills_section_img',
		'label'    => esc_html__( 'Skills Section image', 'stack' ),
		'section'  => 'skills_section',
		'default'  => '',
		'priority' => 10,
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'skills_section_title',
		'label'    => esc_html__( 'Skills Section title', 'stack' ),
		'section'  => 'skills_section',
		'default'  => esc_html__( 'Our Skills', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.skill-area .section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'skills_section_description',
		'label'    => esc_html__( 'Skills Section description', 'stack' ),
		'section'  => 'skills_section',
		'default'  => esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus architecto laudantium dolorem, aut aspernatur modi minima alias provident obcaecati! Minima odio porro nemo magnam dolore minus asperiores veniam dolorum est!', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.skill-area p',
				'function' => 'html',
			],			
		],
	]
);new \Kirki\Field\Repeater(
	[
		'settings' => 'skills_section_repeater',
		'label'    => esc_html__( 'Counte Section Reperater', 'stack' ),
		'section'  => 'skills_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'pricing Text', 'stack' ),
			'field' => 'skills_name_table_headline',
		],
		'fields'   => [
			'skills_name_table_headline'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'skills name here ', 'stack' ),
				'description' => esc_html__( 'skills name here ', 'stack' ),
				'default'     => esc_html__('Basic', 'stack'),
			],
			'skills__percentage_number'    => [
				'type'        => 'number',
				'label'       => esc_html__( 'Skills Percentage number ', 'stack' ),
				'description' => esc_html__( 'Skills Percentage number ', 'stack' ),
				'default'     => esc_html__('12.90', 'stack'),
			],	
			
		],
		'choices' => [
			'limit' => 3
		]
	]
);
// Our Work Section
new \Kirki\Section(
	'our_work_section',
	[
		'title'       => esc_html__( 'Our work Section', 'stack' ),
		'description' => esc_html__( 'This is for Our work Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'our_work_show_hide',
		'label'       => esc_html__( 'Team Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' TeamShow or Hide', 'stack' ),
		'section'     => 'our_work_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'our_work_section_title',
		'label'    => esc_html__( 'Our Work Section title', 'stack' ),
		'section'  => 'our_work_section',
		'default'  => esc_html__( 'OUR WORKS', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#portfolios h2.section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'our_work_section_description',
		'label'    => esc_html__( 'Team Descritption', 'stack' ),
		'section'  => 'our_work_section',
		'default'  =>esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.','stack'),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#portfolios p',
				'function' => 'html',
			],			
		],
	]
);


new \Kirki\Field\Repeater(
	[
		'settings' => 'our_work_section_repeater_item',
		'label'    => esc_html__( 'Team Item', 'stack' ),
		'section'  => 'our_work_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Our single title', 'stack' ),
			'field' => 'our_work_signle_title',
		],
		'default'  => [
			[
				'our_work_signle_title'   	=> esc_html__( 'Creative Design', 'stack' ),	
			],
		],
		'fields'   => [
			'our_work_signle_title'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Sigle Profolio project title', 'stack' ),
				'description' => esc_html__( 'Write Sigle Profolio project title', 'stack' ),
				'default'     => esc_html('Creative Design','stack'),
			],
			'our_work_small_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Our work single small image', 'stack' ),
				'description' => esc_html__( 'Our work single small image description', 'stack' ),
				'default'     => '',
			],
			'our_work_big_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Our work single big image', 'stack' ),
				'description' => esc_html__( 'Our work single big Image description', 'stack' ),
				'default'     => '',
			],
			
			
			
		],
		'choices' => [
			'limit' => 6
		]
	]
);

// Testimonial Section
new \Kirki\Section(
	'testimonial_section',
	[
		'title'       => esc_html__( 'Testimonial Section', 'stack' ),
		'description' => esc_html__( 'This is for Testimonial Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'testimonial_show_hide',
		'label'       => esc_html__( 'Testimonial Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Testimonial Show or Hide', 'stack' ),
		'section'     => 'testimonial_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'testimonial_section_repeater_item',
		'label'    => esc_html__( 'Team Item', 'stack' ),
		'section'  => 'testimonial_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Client Name', 'stack' ),
			'field' => 'testimonial_client_name',
		],
		'default'  => [
			[
				'testimonial_client_name'   	=> esc_html__( 'Jone Doe', 'stack' ),	
			],
		],
		'fields'   => [
			'testimonial_client_name'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Testimonial client Name', 'stack' ),
				'description' => esc_html__( 'Testimonial Client Name', 'stack' ),
				'default'     => esc_html('Jone Doe','stack'),
			],
			'testimonial_client_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( 'Testimonial Client image', 'stack' ),
				'description' => esc_html__( 'Testimonial Client image description', 'stack' ),
				'default'     => '',
			],
			'testimonial_client_designation'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Testimonial client Designation', 'stack' ),
				'description' => esc_html__( 'Testimonial Client Designation', 'stack' ),
				'default'     => esc_html('CEO & Founder','stack'),
			],
			'testimonial_client_description'    => [
				'type'        => 'textarea',
				'label'       => esc_html__( 'Testimonial client text', 'stack' ),
				'description' => esc_html__( 'Testimonial Client text', 'stack' ),
				'default'     => esc_html('Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initiate inexpensive total linkage rather than extensible scenarios. Holisticly empower leveraged ROI whereas effective web-readiness. ','stack'),
			],
			
			
			
		],
	]
);

// Blog Section
new \Kirki\Section(
	'blog_section',
	[
		'title'       => esc_html__( 'blog Section', 'stack' ),
		'description' => esc_html__( 'This is for blog Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'blog_show_hide',
		'label'       => esc_html__( 'Testimonial Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Testimonial Show or Hide', 'stack' ),
		'section'     => 'blog_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'blog_section_title',
		'label'    => esc_html__( 'Our Work Section title', 'stack' ),
		'section'  => 'blog_section',
		'default'  => esc_html__( 'OUR WORKS', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#blog .blog-div h2.section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'blog_section_description',
		'label'    => esc_html__( 'blog Descritption', 'stack' ),
		'section'  => 'blog_section',
		'default'  =>esc_html__( 'A desire to help and empower others between community contributors in technology began to grow in 2020.','stack'),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#blog .blog-div p',
				'function' => 'html',
			],			
		],
	]
);


// Client compnay  Logo  Section
new \Kirki\Section(
	'client_compnay_section',
	[
		'title'       => esc_html__( 'Client Compnay logo  Section', 'stack' ),
		'description' => esc_html__( 'This is for Client Compnay logo  Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);

new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'client_company_show_hide',
		'label'       => esc_html__( 'Client Compnay logo  Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Client Compnay logo  Show or Hide', 'stack' ),
		'section'     => 'client_compnay_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'company_logo_section_title',
		'label'    => esc_html__( 'Company logo Section title', 'stack' ),
		'section'  => 'client_compnay_section',
		'default'  => esc_html__( 'NOTABLE CLIENTS', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#clients h2.section-title',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'company_logo_section_description',
		'label'    => esc_html__( 'Company logo  Descritption', 'stack' ),
		'section'  => 'client_compnay_section',
		'default'  =>esc_html__( 'Over the last 20 years, we have helped and guided organisations to achieve outstanding results','stack'),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#clients p',
				'function' => 'html',
			],			
		],
	]
);

new \Kirki\Field\Repeater(
	[
		'settings' => 'client_compnay_section_repeater_item',
		'label'    => esc_html__( 'Team Item', 'stack' ),
		'section'  => 'client_compnay_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Comany logo', 'stack' ),
			'field' => 'client_comany_text',
		],
		'fields'   => [
			
			'client_comany_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( ' Client company name', 'stack' ),
				'default'     => 'Comany logo',
			],
			'client_comany_image'    => [
				'type'        => 'image',
				'label'       => esc_html__( ' Client company image', 'stack' ),
				'description' => esc_html__( ' Client company image description', 'stack' ),
				'default'     => '',
			],
		],
		
		'choices' => [
			'limit' => 6
		]
	]
);

// Contact
new \Kirki\Section(
	'contact_section',
	[
		'title'       => esc_html__( 'Contact Section', 'stack' ),
		'description' => esc_html__( 'Contact Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Checkbox_Switch(
	[
		'settings'    => 'contact_show_hide',
		'label'       => esc_html__( 'Client Compnay logo  Show or Hide ?', 'stack' ),
		'description' => esc_html__( ' Client Compnay logo  Show or Hide', 'stack' ),
		'section'     => 'client_compnay_section',
		'default'     => 'on',
		'choices'     => [
			'on'  => esc_html__( 'Show', 'stack' ),
			'off' => esc_html__( 'Hide', 'stack' ),
		],
	]
);

new \Kirki\Field\Text(
	[
		'settings' => 'contact_section_title',
		'label'    => esc_html__( 'Company logo Section title', 'stack' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( 'We are a friendly bunch..', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.contact-title h1',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Textarea(
	[
		'settings' => 'contact_section_description',
		'label'    => esc_html__( 'Company logo  Descritption', 'stack' ),
		'section'  => 'contact_section',
		'default'  =>esc_html__( 'We create projects for companies and startups with a passion for quality

		','stack'),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '.contact-title p',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Text(
	[
		'settings' => 'contact_us_title',
		'label'    => esc_html__( 'Company logo Section title', 'stack' ),
		'section'  => 'contact_section',
		'default'  => esc_html__( 'Contact Us', 'stack' ),
		'priority' => 10,
		'transport' => 'postMessage',
		'js_vars'   => [
			[
				'element'  => '#contact h2',
				'function' => 'html',
			],			
		],
	]
);
new \Kirki\Field\Repeater(
	[
		'settings' => 'contact_icon_repeater_item',
		'label'    => esc_html__( 'Cotnact item', 'stack' ),
		'section'  => 'contact_section',
		'priority' => 10,
		'row_label' => [
			'type'  => 'field',
			'value' => esc_html__( 'Contact Item Name', 'stack' ),
			'field' => 'contact_info_item_name',
		],
		'fields'   => [
			'contact_info_item_name'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Item name', 'stack' ),
				'description' => esc_html__( 'Item name', 'stack' ),
				'default'     => esc_html('','stack'),
			],
			'contact_info_item_text'    => [
				'type'        => 'text',
				'label'       => esc_html__( 'Contact info', 'stack' ),
				'description' => esc_html__( 'Contact info', 'stack' ),
				'default'     => esc_html('','stack'),
			],
			'contact_icon' => [
				'type'        => 'select',
				'label'       => esc_html__( 'Icon', 'stack' ),
				'description' => esc_html__( 'Select icon', 'stack' ),
				'default'     => 'lni-map-marker',
				'choices'     => [
					'lni-map-marker' => esc_html__( 'Line Map Marker', 'stack' ),
					'lni-envelope'  => esc_html__( 'Line Envelope', 'stack' ),
					'lni-phone-handset'  => esc_html__( 'Line Phone Handset', 'stack' ),
				],
			],	
		],
		'choices'  =>[
			'limit' => 3,
		]
	]
);
// Footer
new \Kirki\Section(
	'footer_section',
	[
		'title'       => esc_html__( 'Footer Section', 'stack' ),
		'description' => esc_html__( 'Footer Section.', 'stack' ),
		'panel'       => 'stack_panel',
		'priority'    => 160,
	]
);
new \Kirki\Field\Image(
	[
		'settings'    => 'footer_logo',
		'label'       => esc_html__( 'Image Control (URL)', 'stack' ),
		'description' => esc_html__( 'The saved value will be the URL.', 'stack' ),
		'section'     => 'footer_section',
		'default'     => '',
	]
);

new \Kirki\Field\URL(
	[
		'settings' => 'foooter_facebok',
		'label'    => esc_html__( 'Facebook ULR', 'stack' ),
		'section'  => 'footer_section',
		'default'  => 'https://facebook.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'foooter_twitter',
		'label'    => esc_html__( 'twitter ULR', 'stack' ),
		'section'  => 'footer_section',
		'default'  => 'https://twitter.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'foooter_instagram',
		'label'    => esc_html__( 'Instagram ULR', 'stack' ),
		'section'  => 'footer_section',
		'default'  => 'https://instagram.com/',
		'priority' => 10,
	]
);
new \Kirki\Field\URL(
	[
		'settings' => 'foooter_linkedin',
		'label'    => esc_html__( 'linked in ULR', 'stack' ),
		'section'  => 'footer_section',
		'default'  => 'https://youtube.com/',
		'priority' => 10,
	]
);

new \Kirki\Field\Text(
	[
		'settings'    => 'footer_copyright',
		'label'       => esc_html__( 'Copywrite Control', 'stack' ),
		'description' => esc_html__( 'Description', 'stack' ),
		'section'     => 'footer_section',
		'default'     => ''
	]
);
?>

