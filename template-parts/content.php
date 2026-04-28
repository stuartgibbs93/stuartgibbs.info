<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package stuartgibbs.info
 */

?>

<div class="container-fluid px-5 d-flex align-items-center">
	<div class="row">
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php echo '<h1 class="entry-title">' . get_the_title() . '</h1>'?>
		</header><!-- .entry-header -->

	<?php stuartgibbs_info_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content();
		?>
	</div><!-- .entry-content -->

	
</article><!-- #post-<?php the_ID(); ?> -->
	</div>
</div>
