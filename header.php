<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package stuartgibbs.info
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'stuartgibbs-info' ); ?></a>

	<header id="masthead" class="site-header container-fluid">
		<div class="row" id="secondColor">
			<div class="col-6 col-sm-4 pt-1">
				<div class="site-branding">
					<?php
					the_custom_logo();
					if ( is_front_page() && is_home() ) :
						?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
						<?php
					else :
						?>
						<p class="site-title" id="siteLogo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="center"><span id="logoText">SG</span></a></p>
						<?php
					endif;
					$stuartgibbs_info_description = get_bloginfo( 'description', 'display' );
					if ( $stuartgibbs_info_description || is_customize_preview() ) :
						?>
						<p class="site-description"><?php echo $stuartgibbs_info_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
					<?php endif; ?>
				</div><!-- .site-branding -->
			</div>
			<div class="col-6 col-sm-8 d-block d-sm-none ">
                <button class="navbar-toggler navbar-light my-4 float-right" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
				</button>
				


				
            </div>
            <nav id="site-navigation" class="main-navigation col-12 col-sm-8 pt-3">
                <div id="navbarToggleExternalContent" class="collapse d-sm-block">
                    <?php
                    wp_nav_menu( array(
                        'theme_location' => 'menu-1',
                        'menu_id'        => 'primary-menu',
                        'menu_class' => 'nav',
                   
                        ) );
                        ?>
                </div>
            </nav><!-- #site-navigation -->
			<div id="jumboHome" class="jumbotron jumbotron-fluid d-flex mb-0">
				
				<div class="col-12 col-md-6 d-flex align-items-center flex-column">
					<div id="headLeft">
						<h1><span id="fName">Stuart</span><br><span id="lName">Gibbs</span></h1>
						<!-- <h1 id="fName">Stuart</h1>
						<h1 id="lName">Gibbs</h1> -->
						<p class="lead" id="leadTitle">Front-End Web Developer</p>
						<div class="d-flex d-md-none flex-column svgContainer">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/tech_2.svg" id="svgImgTwo">
						</div>
					</div>
				</div>
				<div class="col-lg-6 d-none d-sm-flex flex-column svgContainer">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/tech.svg" id="svgImg">
				</div>
				
			</div>
			<!-- <img src="<?php echo site_url(); ?>/wp-content/uploads/2021/07/tech.svg" id="svgImg"> -->
		</div>
		<div class="row justify-content-center" id="firstColor">
			
		</div>
		
	</header><!-- #masthead -->
