<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package stuartgibbs.info
 */

get_header('404');
?>

	<main id="primary" class="site-main">
		<div class="container-fluid">
			<div class="row" id="fourZeroFour">
				<div class="col-10 mx-auto d-flex flex-column align-items-center justify-content-center text-center">
				<h1>404 Error</h1>
				<p>Woah there. It looks like you navigated to a page that doesn't exist. Head on back over to the main content of the website to learn more about me!</p>
				<a href="<?php echo site_url(); ?>" class="btn btn-primary">View Website<i class="ml-3 fas fa-angle-double-right"></i></a>
				</div>
			</div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
