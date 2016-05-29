		<?php get_header(); ?>
		
		<div class="apply">
			<?php 
			//display home page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'apply'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="apply" id="apply-to-join">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'apply page 1'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>			

					<?php
					//List Heading Widget
					$args = array(
						'name' => 'apply page 1'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
					}
					?>

					<?php
					//List Widget
					$args = array(
						'name' => 'apply page 1'
						);
					$childPosts = types_child_posts('list', $args);
					foreach ($childPosts as $childPost) {
						echo get_post_field('post_content', $childPost->ID);
					}
					?>
					<div class="wrapper grid">
						<a class="smallcaps grid-1-2" href="/about#member-info">our educational principles</a>
						<a class="smallcaps grid-1-2" href="/about#st-bede">teachers society of st. bede</a>
					</div>
				</section>

				<section class="apply">
					<?php echo do_shortcode('[contact-form-7 id="134" title="Apply"]'); ?>
				</section>

				<section class="why-parish-schools bg-grey">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'apply page 2'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>

					<?php
					//List Widget
					$args = array(
						'name' => 'apply page 2'
						);
					$childPosts = types_child_posts('list', $args);
					foreach ($childPosts as $childPost) {
						echo get_post_field('post_content', $childPost->ID);
					}
					?>
				</section>
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>