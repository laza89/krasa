<?php

// Help fields
$judgement_default_options = judgement_get_option_defaults();

judgement_Kirki::add_field( 'my_config', array(
	'type'		 => 'custom',
	'settings'	 => 'judgement_help_pro_cta',
	'label'		 => __( 'Premium Customer Support', 'judgement' ),
	'section'	 => 'judgement_section_help_help',
	'default'	 => '<div style="padding: 30px;background-color: #333; color: #fff;">' . esc_html__( 'judgement is provided as is. judgement Pro provides tons of additional features, including premium customer support. Check it out on https://createandcode.com', 'judgement' ) . '</div>',
	'priority'	 => 10,
) );
