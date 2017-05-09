		<?php get_header(); ?>		
		<div class="st-bede">
			<?php 
			//display home page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'stbede'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="st-bede" id="st-bede">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'saint bede page 1'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>

					<?php
					//Framed Image Widget
					$args = array(
						'name' => 'saint bede page 1'
						);
					$childPosts = types_child_posts('framed-image', $args);
					foreach ($childPosts as $childPost) {
						echo '<div class="img" role="image">' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</div>';
					}
					?>
					
					<?php
					//Dropcaps Paragraph Widget
					$args = array(
						'name' => 'saint bede page 1'
						);
					$childPosts = types_child_posts('dropcaps-paragraph', $args);
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. get_post_field('post_content', $childPost->ID) . '</p>';
					}
					?>

					<?php
					//List Heading Widget
					$args = array(
						'name' => 'saint bede page 1'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
					}
					?>

					<?php
					//List Widget
					$args = array(
						'name' => 'saint bede page 1'
						);
					$childPosts = types_child_posts('list', $args);
					foreach ($childPosts as $childPost) {
						echo get_post_field('post_content', $childPost->ID);
					}
					?>
					







					<?php
					//List Heading Widget
					$args = array(
						'name' => 'saint bede page 2'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
					}
					?>

					<?php
					//List Widget
					$args = array(
						'name' => 'saint bede page 2'
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
	