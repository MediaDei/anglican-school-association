		<?php get_header(); ?>

		<div class="home">
			<?php 
			//display home page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'home'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="welcome">
					
					<?php
					//Large Heading Widget
					$childPosts = types_child_posts('large-heading');
					foreach ($childPosts as $childPost) {
						echo '<h2>'. $childPost->fields['large-heading-content'] . '</h2>';
					}
					?>

					<?php
					//Dropcaps Paragraph Widget
					$childPosts = types_child_posts('dropcaps-paragraph');
					foreach ($childPosts as $childPost) {
						echo '<p class="dropcaps">'. $childPost->fields['dropcaps-paragraph-content'] . '</p>';
					}
					?>
					
					<div role="image" class="img welcome"></div>
					
					<div class="circle-h3">
					<?php
					//Heading with Circle Widget - Home Page 1
					$args = array(
						'name' => 'home page 1'
						);
					$childPosts = types_child_posts('heading-with-circle', $args);
					foreach ($childPosts as $childPost) {
						echo '<h3>'. $childPost->fields['heading-with-circle-content'] . '</h3>';
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







						<?php
						//Heading with Circle Widget - Home Page 2
						$args = array(
							'name' => 'home page 2'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3>'. $childPost->fields['heading-with-circle-content'] . '</h3>';
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


						<!--
						<div class="grid">
							<h4 class="smallcaps">spiritual 
								formation</h4>
							<p>
								In an Anglican school, students and faculty are constantly being shaped, learning and imbibing moral virtues and the subject matter through imitation and habit, on the basis of daily worship, based on the traditional Books of Common Prayer (1662 & 1928).
							</p>
						</div>
						<div class="grid">
							<h4 class="smallcaps">inspired 
								education</h4>
							<p>
								Education is most effective when it is closely engaged with the life of the local parish, and an integral component and extension of a wholesome and devout family life, that is actively engaged in the community of an Anglican parish.
							</p>
						</div>
						<div class="grid">
							<h4 class="smallcaps">professional 
								faculty</h4>
							<p>
								In an Anglican school there is a reverence for normative Truth, Goodness, and Beauty. A Biblical curriculum teaches what is true, the Ten Commandments teach what is good, and a unified yearning for the divine teaches what is beautiful.
							</p>
						</div>
						<div class="grid">
							<h4 class="smallcaps">trust & 
								governance</h4>
							<p>
								In an Anglican school there is a reverence for normative Truth, Goodness, and Beauty. The emphasis is put upon a Biblical curriculum teaching what is true, the Ten Commandments teaching what is good, and a unified yearning for the divine teaching what is beautiful.
							</p>
						</div>
					</div>

					<div class="circle-h3 bg-grey">
						<h3 class="img2">Teachers Society of St. Bede</h3>
						<div class="grid">
							<h4 class="smallcaps">ecclesial 
								oversight</h4>
							<p>
								The school's board of trustees should be accountable to the parish vestry, or the diocesan trustees, chiefly in matters of financial stability and enforcement of bylaws.
							</p>
						</div>
						<div class="grid">
							<h4 class="smallcaps">accountability</h4>
							<p>
								The Head of School (rector of bishop) is to oversee the character and culture of the school to ensure its continuing faithful service to the mission of the church.
							</p>
						</div>
					</div>
				-->
				</section>
				<div class="line-wrapper">
					<a href="/apply/"><div role="button" class="centered-button">Apply to Join</div></a>
				</div>
			<?php endif; ?>
		</div>
		<?php get_footer(); ?>