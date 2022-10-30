<?php
/**
 * Header file for the Trister Theme WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Trister_Theme
 * @since Trister Theme 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>
  <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <!--<link href="<?php echo get_template_directory_uri(); ?>/css/styles.css" rel="stylesheet" />-->
         <link href="<?php echo get_template_directory_uri(); ?>/assets/css/customcss.css" rel="stylesheet" />

	</head>

	<body <?php body_class(); ?>>

		<?php
	//	wp_body_open();
		?>

   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
            <div class="container topheadbl">
                <a class="navbar-brand mainlogo" href="<?php echo site_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/tristerlogo.png" alt="Trister" /></a>
                <div class="rightalgn">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                 <a href="#" class="searchbtn"><i class="fa fa-search"></i></a>
                 </div>
                <div class="collapse navbar-collapse" id="navbarResponsive">
         <?php            wp_nav_menu( 
        array( 
            'theme_location' => 'primary',
            'menu_class' => 'navbar-nav  ms-auto py-4 py-lg-0',
            'container' => ''
        ) 
    ); ?>
   
                <a href="#" class="searchbtn mobhide"><i class="fa fa-search"></i></a>  
                </div>
              
                    <div class="searchblock">
                <form method="get" id="searchform" action="<?php echo site_url(); ?>">

			<input type="hidden" name="post_type" value="product">
	
	<span class="icon_search"><i class="fa fa-search"></i></span>
	<a href="#" class="icon_close">x</a>

	<input type="text" class="field" name="s" placeholder="Enter your search">
	<input type="submit" class="display-none" value="">

</form>
            </div>
                
                
            </div>
        
        </nav>

		<?php
		// Output the menu modal.
	//	get_template_part( 'template-parts/modal-menu' );
