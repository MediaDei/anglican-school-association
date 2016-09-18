<<<<<<< HEAD
			<?php get_header(); ?>
			<div role="image" class="hero-img accreditation"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
		
		<div class="accreditation">
			<section class="accreditation">
				<h2>Accreditation</h2>
				<div class="list-wrapper">
					<ol type="1">Accreditation signifies that the school:
						<li>
							has an excellent educational program appropriate to its mission as an Anglican school,
						</li>

						<li>
							has resources, programs, and services sufficient to accomplish and sustain that mission and,
						</li>

						<li>
							maintains clearly specified objectives that are consistent with its mission, and that indicate whether it is successful in achieving its stated objectives.
						</li>

						<li>
							Accreditation by The Anglican School Association is solely for its own objectives, and by its own internal academic, religious, and organizational standards. In no way does it state or imply conformity to any national, state, or local government standard or accrediting agency.
						</li>
					</ol>
				</div>
				<div class="circle-h3">
					<h3 class="h3-1">Anglican Culture, Religion, and Worship</h3>
					<div class="grid">
						<h4 class="smallcaps">spiritual formation</h4>
						<p>
							In an Anglican school, students and faculty are constantly being shaped, learning and imbibing moral virtues and the subject matter through imitation and habit, on the basis of daily worship, based on the traditional Books of Common Prayer (1662 & 1928).
						</p>
					</div>
					<div class="grid">
						<h4 class="smallcaps">parish life</h4>
						<p>
							Education is most effective when it is closely engaged with the life of the local parish, and an integral component and extension of a wholesome and devout family life, that is actively engaged in the community of an Anglican parish.
						</p>
					</div>
					<div class="grid">
						<h4 class="smallcaps">norms</h4>
						<p>
							In an Anglican school there is a reverence for normative Truth, Goodness, and Beauty. A Biblical curriculum teaches what is true, the Ten Commandments teach what is good, and a unified yearning for the divine teaches what is beautiful.
						</p>
					</div>
					<div class="grid">
						<h4 class="smallcaps">piety</h4>
						<p>
							In an Anglican school there is a reverence for normative Truth, Goodness, and Beauty. The emphasis is put upon a Biblical curriculum teaching what is true, the Ten Commandments teaching what is good, and a unified yearning for the divine teaching what is beautiful.
						</p>
					</div>
				</div>
				<div class="circle-h3 bg-grey">
					<h3 class="h3-2">Educational Program</h3>
					<div class="grid">
						<h4 class="smallcaps">curriculum & textbooks</h4>
						<p>
							The curriculum ought to be informed by the Christian faith, and be consistent with the Anglican tradition. It should be aligned with relevant and rigorous standards of excellence, and implement demonstrated sound practices of education.
						</p>
					</div>
					<div class="grid">
						<h4 class="smallcaps">scope & sequence</h4>
						<p>
							<a href="/resources/">(See Model Scope and Sequence)</a>
						</p>
					</div>
					<div class="grid">
						<h4 class="smallcaps">student records</h4>
						<p>
							The school should document and assess educational achievement in verifiable and consistent ways, while having a defined policy and procedure for maintenance and storage of student files. Records should contain medical history, emergency information, school transcripts, test scores, college acceptances, and scholarship awards.
						</p>
					</div>
				</div>
				<div class="circle-h3">
					<h3 class="h3-3">Professional Faculty & Staff</h3>
					<div class="grid">
						<h4 class="smallcaps">faculty competence</h4>
						<p>
							The school’s administration, faculty, and staff should be baptized and demonstrate the practice of the Christian faith. The faculty ought to be capable and qualified for the mission of the institution, as measured by earned degrees, competence, effectiveness, capacity, work experience, licenser or certifications, and any relevant honors or awards. 
						</p>
=======
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
>>>>>>> origin/master
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
							echo '<div class="circle" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
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
<<<<<<< HEAD
				</div>
				<div class="circle-h3 bg-grey">
					<h3 class="h3-4">Governance</h3>
					<div class="grid">
						<h4 class="smallcaps">by laws</h4>
						<p>
							<a href="/resources/">(See Model By-Laws here.)</a>
						</p>
					</div>
					<div class="grid">
						<h4 class="smallcaps">ecclesial oversight</h4>
						<p>
							The school’s board of trustees should be accountable to the parish vestry, or the diocesan trustees, chiefly in matters of financial stability, fidelity to mission, and enforcement of bylaws. 
						</p>
=======


					<div class="circle-h3 bg-grey">
						<?php
						//Heading with Circle Widget
						$args = array(
							'name' => 'accreditation page 2'
							);
						$childPosts = types_child_posts('heading-with-circle', $args);
						foreach ($childPosts as $childPost) {
							echo '<h3 class="h3-2">'. $childPost->fields['heading-with-circle-content'] . '</h3>';
							echo '<div class="circle" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
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
							echo '<div class="circle" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
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
>>>>>>> origin/master
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
							echo '<div class="circle" role="image"><figure>' . get_the_post_thumbnail($childPost->ID, 'post-thumbnail') . '</figure></div>';
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