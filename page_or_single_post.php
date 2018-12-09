		<article>
			<header class="major">
				<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				<p>
					<i class="fa fa-calendar"></i>
					<span>
						<?= pll__('Since'); ?>
						<?= human_time_diff(get_the_time('U'), current_time('timestamp')); ?>
						<?= pll__('ago'); ?>
						<?= pll__('on'); ?>
						<?php the_date(); ?>
					</span>
					<ul class="icons">
						<li>
							<a href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(the_permalink()); ?>&display=popup&ref=plugin&app_id=644672675906757" class="icon fa-facebook" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><span class="label"><?= pll__('Share via'); ?> Facebook</span></a>
						</li>
						<li>
							<a href="https://twitter.com/intent/tweet?via=nimizuela&url=<?= urlencode(the_permalink()); ?>&text=<?= urlencode(the_title()); ?>" class="icon fa-twitter" target="_blank" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><span class="label"><?= pll__('Share via'); ?> Twitter</span></a>
						</li>
						<li>
							<a href="mailto:?subject=<?= pll__('I wanted you to see this site'); ?>&amp;body=<?= pll__('Check out this site'); ?>&nbsp;<?php the_permalink(); ?>" class="icon fa-envelope-o"><span class="label"><?= pll__('Share via'); ?> Email</span></a>
						</li>
						<li>
							<div class="fb-like" data-href="<?php the_permalink(); ?>" data-layout="button_count" data-action="like" data-size="large"></div>
						</li>
					</ul>
				</p>
			</header>

			<section>
				<?php the_content(); ?>
			</section>
		</article>


		<div class="fb-comments" data-href="<?php the_permalink(); ?>" data-colorscheme="light" data-num-posts="4" data-width="100%">
		</div>

	<?php
		$prevPost = get_previous_post(true);
		$nextPost = get_next_post(true);

		if ($prevPost || $nextPost) :
	?>
		<hr />
		<div class="row">
			<article class="col-6 col-12-xsmall work-item">

	<?php
        if($prevPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $prevPost->ID
            );
            $prevPost = get_posts($args);
            foreach ($prevPost as $post) {
                setup_postdata($post);
	?>

				<p><?= pll__('Previous'); ?></p>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>

    <?php
                wp_reset_postdata();
            } //end foreach
		} // end if
	?>


			</article>
			<article class="col-6 col-12-xsmall work-item">

	<?php
        if($nextPost) {
            $args = array(
                'posts_per_page' => 1,
                'include' => $nextPost->ID
            );
            $nextPost = get_posts($args);
            foreach ($nextPost as $post) {
                setup_postdata($post);
	?>
				<p><?= pll__('Next'); ?></p>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><?php the_excerpt(); ?></p>

    <?php
                wp_reset_postdata();
            } //end foreach
        } // end if
    ?>

			</article>
		</div>
		<?php endif; ?>
