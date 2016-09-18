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

<<<<<<< HEAD
				<p class="dropcaps"><span class="smallcaps a">A</span><span class="smallcaps">nglicans believe </span>that education is a fundamental way of fulfilling baptismal promises made by parents and godparents, participating directly in the foundational mission of the church.  As such, Anglican schools are ecclesial entities where faith, learning, culture, and life are brought into harmony &ndash; acting as ministries of pastoral care. 
				</p>
			</section>
			<section class="about-members bg-grey">
				<h2 class="bg-grey">members</h2>
				<div role="image" class="img members"></div>

				<div class="wrapper" id="member-info">
					<div class="member-info">
						<h3>Member Schools</h3>
						<ul class="top-level">
							<li>are Anglican by jurisdiction and ethos,</li>
							<li>keep Prayer Book Daily Office in school life (at least one Office per day)</li>
							<li>maintain or seek ASA accreditation, and</li>
							<li>are governed by ASA model bylaws, or similar approved bylaws</li>
						</ul>
					</div>
					<div class="member-info">
						<h3>Home Schools</h3>
						<ul class="top-level">
							<li>utilize a classical curriculum, and</li>
							<li>keep Prayer Book Daily Office in school life (at least one Office per day)</li>
						</ul>
					</div>
				</div>
			</section>
=======
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
>>>>>>> origin/master
		</div>
		<?php get_footer(); ?>
	