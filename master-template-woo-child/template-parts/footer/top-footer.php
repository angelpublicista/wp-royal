<?php
/**
 * Template part for displaying top footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Master_Template
 */

global $geniorama
?>


<div class="top-footer bg-image" style="background-image:url('<?php echo get_stylesheet_directory_uri(); ?>/assets/img/background-top-footer.png')">
	<div class="container">
		<div class="footer-pbx text-center">
			<p>PBX: 746 7296</p>
		</div>
		<!-- Three columns -->
		<?php if ($geniorama['columns-footer'] == '1'): ?>
			<div class="row">
				<div class="col-12 col-md-4">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1')): endif; ?>
				</div>
				<div class="col-12 col-md-4">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2')): endif; ?>
				</div>
				<div class="col-12 col-md-4">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3')): endif; ?>
				</div>
			</div>
		<?php endif; ?>


		<!-- Four columns -->
		<?php if ($geniorama['columns-footer'] == '2'): ?>
			<div class="row">
				<div class="col-12 col-md-3">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1')): endif; ?>
				</div>
				<div class="col-12 col-md-3">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2')): endif; ?>
				</div>
				<div class="col-12 col-md-3">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 3')): endif; ?>
				</div>
				<div class="col-12 col-md-3">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 4')): endif; ?>
				</div>
			</div>
		<?php endif; ?>


		<!-- Two columns -->
		<?php if ($geniorama['columns-footer'] == '3'): ?>
			<div class="row">
				<div class="col-12 col-md-6">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 1')): endif; ?>
				</div>
				<div class="col-12 col-md-6">
					<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer 2')): endif; ?>
				</div>
			</div>
		<?php endif; ?>
		<div class="footer-legal">
			<p><a href="http://royal-golden-group.local/terminos-y-condiciones/" target="_blank" class="legal-link">Terminos y condiciones</a> / <a href="http://royal-golden-group.local/politicas-de-privacidad/" target="_blank">Politicas de privacidad</a></p>
		</div>
	</div>
</div>