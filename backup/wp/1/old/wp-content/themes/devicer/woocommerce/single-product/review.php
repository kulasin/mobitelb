<?php
/**
 * Review Comments Template
 *
 * Closing li is left out on purpose!.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/review.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.0
 * 
 * @cmsmasters_package 	Devicer
 * @cmsmasters_version 	1.0.0
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


include(get_template_directory() . '/woocommerce/cmsmasters-framework/theme-style' . CMSMASTERS_THEME_STYLE . '/templates/single-product/review.php');