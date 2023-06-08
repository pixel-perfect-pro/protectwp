<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package respo
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title><?php wp_title(); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">
<!-- Picturefill -->
<script>
	document.createElement( "picture" );
</script>
<?php wp_head(); ?>
<script>
	var $ = window.jQuery;
</script>
</head>

<body <?php body_class() ?> data-spy="scroll" data-target="#stellarnav" data-offset="70">
<?php wp_body_open(); ?>