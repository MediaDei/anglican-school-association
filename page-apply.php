<<<<<<< HEAD
			<?php get_header(); ?>
			<div role="image" class="hero-img apply"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
	
=======
		<?php get_header(); ?>
>>>>>>> origin/master
		
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

<<<<<<< HEAD
			<section class="apply" id="apply-to-join">
				<h2 class="narrow">apply to join</h2>
				<h3>Benefits</h3>
				<ul class="top-level">
					<li>accreditation by the ASA
						<ul>
							<li>defined academic, missional, and cultural standards</li>
							<li>defined financial, organizational, and institutional standards</li>
						</ul>
					</li>
					<li>teacher certification</li>
					<li>definable teacher development</li>
					<li>startup resources</li>
					<li>network for human resources</li>
					<li>advertising for student recruitment</li>
					<li>on-site school visits by Executive Director or Master Teacher for administrative evaluation, support, and school development</li>
					<li>Decidedly Anglican ethos, discipleship, culture, and spiritual formation</li>
					<li>membership in a professional education association (Society of Saint Bede) for all faculty</li>
				</ul>
				<div class="wrapper grid">
					<a class="smallcaps grid-1-2" href="/about#member-info">our educational principles</a>
					<a class="smallcaps grid-1-2" href="/about#st-bede">teachers society of st. bede</a>
				</div>
			</section>
			<section class="apply">
				<?php echo do_shortcode('[contact-form-7 id="134" title="Apply"]'); ?>
			</section>
			<section class="why-parish-schools bg-grey">
				<h2>why<br><span>Parish Schools?</span></h2>
				<ul class="top-level">
					<li>retain youth as faithful and adult members of the church</li>
					<li>train youth as musical, knowledgeable, and wise future Church members</li>
					<li>students identify as Anglican Christians during formative years</li>
					<li>"Front porch evangelism" builds family/community/relationships
						<ul>
							<li>attract new families (including un-churched and de-churched)</li>
							<li>parish development to educate young families and shape youth effectively</li>
						</ul>
					</li>
					<li>Good Stewardship shares property, financial resources, and personnel</li>
				</ul>
			</section>
=======
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
>>>>>>> origin/master

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