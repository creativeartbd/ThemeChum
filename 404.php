<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package ThemeChum
 */

get_header();
?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<main id="primary" class="site-main">
				<section class="error-404 not-found">
					<header class="page-header not-found">
						<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'themechum' ); ?></h1>
					</header><!-- .page-header -->
				</section><!-- .error-404 -->
			</main><!-- #main -->
		</div>
	</div>
</div>
	
<?php
get_footer();
