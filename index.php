<?php get_header(); ?>
				<!-- This loops through the paginated posts -->

<?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
		<section class="post-container">
			<div class="post-thumb"><?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?></div>
			<div class="post-content">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<div>
					<?php the_excerpt(); ?>
				</div>
				<p>
					<span><i class="fa fa-calendar"></i>
					<span>
						<?php pll_e('Since'); ?>
						<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')); ?>
						<?php pll_e('ago'); ?>
						<?php pll_e('on'); ?>
						<?php the_date(); ?>
					</span>
					<span><?php edit_post_link(); ?></i>
					<span><?php wp_link_pages(); ?></i>
				</p>
			</div>
		</section>
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
