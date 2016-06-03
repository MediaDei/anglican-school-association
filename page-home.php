		<?php get_header(); ?>

		<div class="home">
			<?php 
			//display page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'home'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<?php
				//Announcement Image Widget
				$args = array(
					'name' => 'home page 1'
					);
				$childPosts = types_child_posts('announcement-image', $args);
				foreach ($childPosts as $childPost) {
					echo '<div class="announcement" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
				}
				?>
				<section class="welcome">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'home page 1'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>

					<?php
					//Dropcaps Paragraph Widget
					$args = array(
						'name' => 'home page 1'
						);
					$childPosts = types_child_posts('dropcaps-paragraph');
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. get_post_field('post_content', $childPost->ID) . '</p>';
					}
					?>

					<?php
					//Framed Image Widget
					$args = array(
						'name' => 'home page 1'
						);
					$childPosts = types_child_posts('framed-image', $args);
					foreach ($childPosts as $childPost) {
						echo '<div class="img" role="image">' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</div>';
					}
					?>
										
					<div class="circle-h3">
						<?php
						//Heading with Circle Widget
						$args = array(
							'name' => 'home page 1'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3>'. $childPost->fields['heading-with-circle-content'] . '</h3>';
							echo '<div class="circle" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'home page 1'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'home page 1'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'home page 2'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'home page 2'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'home page 3'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'home page 3'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'home page 4'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'home page 4'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>
					</div>







					<div class="circle-h3 bg-grey">
						<?php
						//Heading with Circle Widget
						$args = array(
							'name' => 'home page 2'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3>'. $childPost->fields['heading-with-circle-content'] . '</h3>';
							echo '<div class="circle" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'home page 5'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'home page 5'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'home page 6'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'home page 6'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>
				</section>
				<div class="line-wrapper">
					<a href="/apply/"><div role="button" class="centered-button">Apply to Join</div></a>
				</div>
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>