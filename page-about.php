		<?php get_header(); ?>

		<div class="about">
			<?php 
			//display page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'about'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="about">
					
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'about page 1'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>

					<?php
					//Framed Image Widget
					$args = array(
						'name' => 'about page 1'
						);
					$childPosts = types_child_posts('framed-image', $args);
					foreach ($childPosts as $childPost) {
						echo '<div class="img" role="image">' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</div>';
					}
					?>

					<?php
					//Dropcaps Paragraph Widget
					$args = array(
						'name' => 'about page 1'
						);
					$childPosts = types_child_posts('dropcaps-paragraph', $args);
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. get_post_field('post_content', $childPost->ID) . '</p>';
					}
					?>

					<?php
					//Dropcaps Paragraph Widget
					$args = array(
						'name' => 'about page 2'
						);
					$childPosts = types_child_posts('dropcaps-paragraph', $args);
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. get_post_field('post_content', $childPost->ID) . '</p>';
					}
					?>

					<?php
					//Dropcaps Paragraph Widget
					$args = array(
						'name' => 'about page 3'
						);
					$childPosts = types_child_posts('dropcaps-paragraph', $args);
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. get_post_field('post_content', $childPost->ID) . '</p>';
					}
					?>
				</section>

				<section class="about-members bg-grey">

					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'about page 2'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>

					<?php
					//Framed Image Widget
					$args = array(
						'name' => 'about page 2'
						);
					$childPosts = types_child_posts('framed-image', $args);
					foreach ($childPosts as $childPost) {
						echo '<div class="img" role="image">' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</div>';
					}
					?>

					<div class="wrapper" id="member-info">
						<div class="member-info">
							<?php
							//List Heading Widget
							$args = array(
								'name' => 'about page 1'
								);
							$childPosts = types_child_posts('list-heading', $args);
							foreach ($childPosts as $childPost) {
								echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
							}
							?>

							<?php
							//List Widget
							$args = array(
								'name' => 'about page 1'
								);
							$childPosts = types_child_posts('list', $args);
							foreach ($childPosts as $childPost) {
								echo get_post_field('post_content', $childPost->ID);
							}
							?>
						</div>
						
						<div class="member-info">
							<?php
							//List Heading Widget
							$args = array(
								'name' => 'about page 2'
								);
							$childPosts = types_child_posts('list-heading', $args);
							foreach ($childPosts as $childPost) {
								echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
							}
							?>
							
							<?php
							//List Widget
							$args = array(
								'name' => 'about page 2'
								);
							$childPosts = types_child_posts('list', $args);
							foreach ($childPosts as $childPost) {
								echo get_post_field('post_content', $childPost->ID);
							}
							?>
						</div>
					</div>
				</section>
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>
	