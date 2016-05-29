		<?php get_header(); ?>

		<div class="accreditation">
			<?php 
			//display page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'accreditation'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="accreditation">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'accreditation page 1'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>
					
					<div class="list-wrapper">

						<?php
						//List Heading Widget
						$args = array(
							'name' => 'accreditation page 1'
							);
						$childPosts = types_child_posts('list-heading', $args);
						foreach ($childPosts as $childPost) {
							echo '<h4>'. $childPost->fields['list-heading-content'] . '</h4>';
						}
						?>

						<?php
						//List Widget
						$args = array(
							'name' => 'accreditation page 1'
							);
						$childPosts = types_child_posts('list', $args);
						foreach ($childPosts as $childPost) {
							echo get_post_field('post_content', $childPost->ID);
						}
						?>
					</div>
					
					<div class="circle-h3">
						<?php
						//Heading with Circle Widget
						$args = array(
							'name' => 'accreditation page 1'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3 class="h3-1">'. $childPost->fields['heading-with-circle-content'] . '</h3>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 1'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 1'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 2'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 2'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 3'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 3'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 4'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 4'
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
							'name' => 'accreditation page 2'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3 class="h3-2">'. $childPost->fields['heading-with-circle-content'] . '</h3>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 5'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 5'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 6'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 6'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 7'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 7'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>
					</div>


					<div class="circle-h3">
						<?php
						//Heading with Circle Widget
						$args = array(
							'name' => 'accreditation page 3'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3 class="h3-3">'. $childPost->fields['heading-with-circle-content'] . '</h3>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 8'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 8'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 9'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 9'
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
							'name' => 'accreditation page 4'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3 class="h3-4">'. $childPost->fields['heading-with-circle-content'] . '</h3>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 10'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 10'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 11'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 11'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>

						<?php
						//Text under Circle Widget - Subtitle
						$args = array(
							'name' => 'accreditation page 12'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<div class="grid"><h4 class="smallcaps">'. $childPost->fields['subtitle-text-under-circle-content'] . '</h4>';
						}
						?>

						<?php
						//Text under Circle Widget - Paragraph
						$args = array(
							'name' => 'accreditation page 12'
							);
						$childPosts = types_child_posts('text-under-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<p>'. $childPost->fields['paragraph-text-under-circle-content'] . '</p></div>';
						}
						?>
					</div>
				</section>
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>