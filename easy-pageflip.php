<?php
/*
	Plugin Name: Easy Page Flip
	Version: 1.0
	Description: Easy Page Flip &eacute; um plugin que voc&ecirc; pode fazer uma Revista Virtual em poucos cliques, foi utilizado de base o <a href="http://builtbywill.com/code/booklet/" target="_blank">jQuery Booklet</a> para a parte do PageFlip e se o plugin <a href="http://wordpress.org/plugins/wp-pagenavi/" target="_blank">WP-PageNavi</a> estiver ativo ele usar&aacute; o mesmo para o sistema de pagina&ccedil;&atilde;o se o mesmo n&atilde;o estiver instalado, automaticamente criar&aacute; uma pagina&ccedil;&atilde;o personalizada.
	Author: CHR Designer
	Author URI: http://www.chrdesigner.com
	Plugin URI: http://www.chrdesigner.com/plugin/easy-pageflip.zip
	License: A slug describing license associated with the plugin (usually GPL2)
*/

require_once('custom_post_easy_pageflip.php');

add_image_size( 'chr-imagem-revista', 280, 380, true  );

add_filter( 'use_default_gallery_style', '__return_false' );

function chr_script_booklet() {
	wp_register_script('add-jquery-easing-jquery-ui', plugins_url( '/js/jquery.easing.1.3.js' , __FILE__ ), array('jquery', 'jquery-ui-core', 'jquery-ui-draggable'));
    wp_enqueue_script('add-jquery-easing-jquery-ui');
    wp_register_script('jquery-booklet', plugins_url('/js/jquery.booklet.latest.min.js' , __FILE__ ), array('jquery'));
    wp_enqueue_script('jquery-booklet');
    wp_register_style( 'style-booklet', plugins_url('/css/jquery.booklet.latest.css' , __FILE__ ) );
	wp_enqueue_style( 'style-booklet' );
    wp_register_style( 'style-easy-pageflip', plugins_url('/css/style-easy-pageflip.css' , __FILE__ ) );
	wp_enqueue_style( 'style-easy-pageflip' );
}
add_action( 'wp_enqueue_scripts', 'chr_script_booklet' );

require_once('content-pageflip-single.php');
require_once('content-pageflip-list.php');