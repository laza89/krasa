<?php

/**
 * judgement hooks
 *
 * @package judgement
 */
add_action( 'judgement_header', 'judgement_branding', 20 );
add_action( 'judgement_header_navigation', 'judgement_navigation_primary', 20 );
