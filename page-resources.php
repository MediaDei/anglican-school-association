		<?php get_header(); ?>		
		
		<div class="resources">
<<<<<<< HEAD

			<section class="resources">
				<h2>resources</h2>
				<div class="wrapper grid">
					<div class="grid-1-2">
						<label>Model By-Laws</label>
						<a href="<?php bloginfo('template_url'); ?>/files/ASA Model School Bylaws 5-21-2016.pdf">
							<div class="button btn-1" role="button">
								<div class="icon btn-1"></div>
								<div class="text">
									<p>Download</p>
									<span class="last-revised">Revision: 05/12/2016</span>
=======
			<?php 
			//display home page for widgets
			$pageArgs = array(
				'post_type' => 'page-for-widgets', 
				'name' => 'resources'
				);
			$pageContent = new WP_Query($pageArgs);
			if($pageContent->have_posts()) : $pageContent->the_post();?>
				<section class="resources">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'resources page 1'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>
					<div class="wrapper grid">
						<div class="grid-1-2">
							<label>Model By-Laws</label>
							<a href="<?php site_url(); ?>/documents/2016/06/by-laws.pdf">
								<div class="button btn-1" role="button">
									<div class="icon btn-1"></div>
									<div class="text">
										<p>Download</p>
										<span class="last-revised">Revision: 05/12/2016</span>
									</div>
>>>>>>> origin/master
								</div>
							</a>
						</div>
						<div class="grid-1-2">
							<label>Model Scope and Sequence</label>
							<a href="<?php site_url(); ?>/documents/2016/06/model-scope-sequence.pdf">
								<div class="button btn-2" role="button">
									<div class="icon btn-2"></div>
									<div class="text">
										<p>Download</p>
										<span class="last-revised">Revision: 03/12/2016</span>
									</div>
								</div>
							</a>
						</div>
					</div>

<<<<<<< HEAD
				<div class="bcp">
					<div class="content-wrap">
						<div class="icon"></div>
						<div class="text">
							<p>Prayer Book Society</p>
							<a href="http://pbsusa.org/">Click to Visit</a>
=======
					<div class="bcp">
						<div class="content-wrap">
							<div class="icon"></div>
							<div class="text">
								<p>Prayer Book Society</p>
								<a href="http://pbsusa.org/">Click to Visit</a>
							</div>
>>>>>>> origin/master
						</div>
					</div>

					<a href="<?php site_url(); ?>/documents/2016/06/start-a-parish-school.pdf">
						<div class="button btn-3" role="button">
							<div class="icon btn-3"></div>
							<div class="text">
								<p>Start a Parish</p>
								<p class="smallcaps">school</p>
							</div>
						</div>
					</a>
				</section>

				<section class="links bg-grey">
					<?php
					//Large Heading Widget
					$args = array(
						'name' => 'resources page 2'
						);
					$childPosts = types_child_posts('large-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h2>' . get_post_field('post_content', $childPost->ID) . '</h2>';
					}
					?>

					<?php
					//List Heading Widget
					$args = array(
						'name' => 'resources page 1'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h4>'. $childPost->fields['list-heading-content'] . '</h4>';
					}
					?>

					<?php
					//List Widget
					$args = array(
						'name' => 'resources page 1'
						);
					$childPosts = types_child_posts('list', $args);
					foreach ($childPosts as $childPost) {
						echo get_post_field('post_content', $childPost->ID);
					}
					?>

<<<<<<< HEAD
				<ul><h4>Classical Education</h4>
					<li><a href="http://www.thesainttimothyschool.org/s/The-What-and-Why-of-a-Classical-Education.pdf">The What and Why of a Classical Education</a></li>
					<li><a href="http://www.gbt.org/text/sayers.html">The Lost Tools of Learning</a></li>
					<li><a href="http://www.thesainttimothyschool.org/s/TheAbolitionOfMan.pdf">The Abolition of Man</a></li>
					<li><a href="http://www.thesainttimothyschool.org/s/A-Christian-Mind.pdf">A Christian Mind</a></li>
				</ul>

				<ul><h4>Education Sites</h4>
					<li><a href="http://www.circeinstitute.org/">CiRCE Institute</a></li>
					<li><a href="https://societyforclassicallearning.org">Society for Classical Learning</a></li>
					<li><a href="http://www.accsedu.org">Association of Christian and Classical Schools</a></li>
				</ul>
			</section>
=======
					<?php
					//List Heading Widget
					$args = array(
						'name' => 'resources page 2'
						);
					$childPosts = types_child_posts('list-heading', $args);
					foreach ($childPosts as $childPost) {
						echo '<h4>'. $childPost->fields['list-heading-content'] . '</h4>';
					}
					?>

					<?php
					//List Widget
					$args = array(
						'name' => 'resources page 2'
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