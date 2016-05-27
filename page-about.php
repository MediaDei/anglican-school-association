		<?php get_header(); ?>

		<div class="about">
			<?php 
			//display home page for widgets
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
						echo '<h2>'. $childPost->fields['large-heading-content'] . '</h2>';
					}
					?>

					<div role="image" class="img about"></div>

					<?php
					//Dropcaps Paragraph Widget
					$childPosts = types_child_posts('dropcaps-paragraph');
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. $childPost->fields['dropcaps-paragraph-content'] . '</p>';
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
						echo '<h2 class="bg-grey">'. $childPost->fields['large-heading-content'] . '</h2>';
					}
					?>
					<div role="image" class="img members"></div>

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
							<ul class="top-level">
								<?php
								//List Item Widget
								$args = array(
									'name' => 'about page 1'
									);
								$childPosts = types_child_posts('list-item', $args);
								foreach ($childPosts as $childPost) {
									echo '<li>'. $childPost->fields['list-item-content'] . '</li>';
								}
								?>

								<?php
								//List Item Widget
								$args = array(
									'name' => 'about page 2'
									);
								$childPosts = types_child_posts('list-item', $args);
								foreach ($childPosts as $childPost) {
									echo '<li>'. $childPost->fields['list-item-content'] . '</li>';
								}
								?>

								<?php
								//List Item Widget
								$args = array(
									'name' => 'about page 3'
									);
								$childPosts = types_child_posts('list-item', $args);
								foreach ($childPosts as $childPost) {
									echo '<li>'. $childPost->fields['list-item-content'] . '</li>';
								}
								?>

								<?php
								//List Item Widget
								$args = array(
									'name' => 'about page 4'
									);
								$childPosts = types_child_posts('list-item', $args);
								foreach ($childPosts as $childPost) {
									echo '<li>'. $childPost->fields['list-item-content'] . '</li>';
								}
								?>
							</ul>
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
							<ul class="top-level">
								<?php
								//List Item Widget
								$args = array(
									'name' => 'about page 5'
									);
								$childPosts = types_child_posts('list-item', $args);
								foreach ($childPosts as $childPost) {
									echo '<li>'. $childPost->fields['list-item-content'] . '</li>';
								}
								?>

								<?php
								//List Item Widget
								$args = array(
									'name' => 'about page 6'
									);
								$childPosts = types_child_posts('list-item', $args);
								foreach ($childPosts as $childPost) {
									echo '<li>'. $childPost->fields['list-item-content'] . '</li>';
								}
								?>
							</ul>
						</div>
					</div>
				</section>
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>
	