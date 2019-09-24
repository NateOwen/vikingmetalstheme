<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<?php wp_head(); ?>
	<link href="<?php echo get_template_directory_uri(); ?>/css/fonts.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/main.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/header.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/mobile.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/custom.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/forms.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/colors.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/buttons.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/wip.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo get_template_directory_uri(); ?>/css/nate.css" rel="stylesheet" type="text/css" />
</head>

<body>
		<!-- WRAPPER -->
		<div class="wrapper">
		  <div class="colorbar"></div>
		  <!-- BG Pattern -->
		  <!--<div class="bgpattern bg-ptrn-plus"></div>-->
		  <!-- BG Pattern (END) -->

		  <!-- HEADER -->
		  <header class="global">
		    <div class="navbar">
			    <div class="logo hide"><a href="#"></a></div>
		      <h1><a href="#">Viking Strategic Metals</a></h1>
		      <div class="menu"></div>
		      <nav>
		        <ul>
		          <li><a href="index.html">Home</a></li>
		          <li class="dropdown"> <a href="work.html">Works <span class="caret"></span></a>
		            <div class="dropdown-menu-wrapper">
									<ul class="dropdown-menu">
			              <li class="dropdown-menu-item"><a class="nav-anchor" href="#" target="">Lorem Ipsum</a></li>
			              <li class="dropdown-menu-item"><a class="nav-anchor" href="#" target="">Lorem Ipsum</a></li>
			              <li class="dropdown-menu-item"><a class="nav-anchor" href="#" target="_blank">Lorem Ipsum</a></li>
			            </ul>
								</div>
		          </li>
		          <li><a href="about.html">About</a></li>
		          <li><a href="contact.html">Contact</a></li>
		        </ul>
		      </nav>
		    </div>
		  </header>
		  <!-- HEADER (END) -->
