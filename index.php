<?php if ( is_front_page() ) : ?>

	<?php include path_join(get_template_directory(), 'frontpage.php'); ?>

<?php else : ?>

	<?php get_header(); ?>

	<?php if ( is_page() || is_single() ) : the_post(); ?>

		<?php include path_join(get_template_directory(), 'page_or_single_post.php'); ?>

	<?php else : ?>

		<?php include path_join(get_template_directory(), 'list_posts.php'); ?>

	<?php endif; ?>

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>

<?php endif; ?>
