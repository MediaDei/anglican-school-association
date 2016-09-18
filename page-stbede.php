<<<<<<< HEAD
			<?php get_header(); ?>
			<div role="image" class="hero-img st-bede"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
		
		<div class="st-bede">
			<section class="st-bede" id="st-bede">
				<h2 class="narrow">Teachers Society<br><span>of St. Bede</span></h2>
				<div role="image" class="img st-bede"></div>
				<p class="dropcaps"><span class="smallcaps c">T</span><span class="smallcaps">he Society </span>of St. Bede is a teacher network for certification, fellowship, and professional development.

				The Society provides three certification levels for teachers &ndash; Apprentice, Full, and Master.</p>

				<h3>Professional Development</h3>
				<ul class="top-level">
					<li>Professional Teacher Development within the ASA
						<ul>
							<li>on-site school visits by Master Teachers for faculty in-service days or training seminars</li>
							<li>self-study reading schedule</li>
							<li>online distance modules taught by Master Teachers</li>
							<li>summer Intensive Training Modules, at select training schools</li>
							<li>annual pre-conference day of prayer, study, and fellowship, prior to select cycle of national teachers' conferences</li>
						</ul>
					</li>
				</ul>

				<h3>Standards</h3>
				<ul class="top-level">
					<li>All teachers are degreed, or in process.</li>
					<li>Levels of Certification
						<ul>
							<li>Apprentice Teacher (grammar)</li>
							<li>Full Teacher (logic)</li>
							<li>Master Teacher (rhetoric)</li>
							<li>teacher promotion at school discretion, with ASA approval</li>
						</ul>
					</li>
				</ul>
			</section>
=======
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
>>>>>>> origin/master
		</div>
		<?php get_footer(); ?>
	