		<?php get_header(); ?>		
		<div class="st-bede">
			<?php 
			//display home page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'st-bede'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="st-bede" id="st-bede">
					
					<?php
					//Large Heading Widget
					$childPosts = types_child_posts('large-heading');
					foreach ($childPosts as $childPost) {
						echo '<h2>'. $childPost->fields['large-heading-content'] . '</h2>';
					}
					?>
					<!--<h2 class="narrow">Teachers Society<br><span>of St. Bede</span></h2>-->

					<div role="image" class="img st-bede"></div>

					<?php
					//Dropcaps Paragraph Widget
					$childPosts = types_child_posts('dropcaps-paragraph');
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. $childPost->fields['dropcaps-paragraph-content'] . '</p>';
					}
					?>

					<?php
					//List Heading Widget
					$args = array(
						'name' => 'st-bede page 1'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
					}
					?>
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

					<?php
					//List Heading Widget
					$args = array(
						'name' => 'st-bede page 2'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h3>'. $childPost->fields['list-heading-content'] . '</h3>';
					}
					?>
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
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>
	