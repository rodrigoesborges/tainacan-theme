<?php get_header(); ?>

<!-- Get the banner to display -->
<?php get_template_part( 'template-parts/bannerheader' ); ?>
<!-- Get the menu if is create in panel admin -->
<?php get_template_part( 'template-parts/menubellowbanner' ); ?>

<main role="main" class="mt-5 max-large margin-one-column">
	<div class="row">
		<div class="col col-sm mx-sm-auto">
			<?php get_template_part( 'template-parts/loop', 'singular' ); ?>
		</div>
	</div><!-- /.row -->
</main>
<?php get_footer(); ?>
