<<<<<<< HEAD
			<?php get_header(); ?>
			<div role="image" class="hero-img members"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
=======
		<?php get_header(); ?>
>>>>>>> origin/master
		
		<div class="members">
			<section class="members">
				<h2>Member Schools</h2>
				<h3>Members</h3>
				<div class="posts grid">
					<?php 
					$i = 0;//counter for sorting posts into two columns
					$numberOfPosts = 0;
					$args = array(
						'post_type' => 'member'
					);
					$member = new WP_Query($args);
					while($member->have_posts()) : $member->the_post(); ?>
						<?php $numberOfPosts++ ?>
						<!--start post-->
						<div class="post grid-1-2 <?php if($numberOfPosts % 2 != 0){echo 'border';} ?>" id="post-<?php the_ID(); ?>">
							<a href="#anchor-<?php echo $numberOfPosts; ?>">
								<div class="post-content grid">
									<h1><?php the_title(); ?></h1>
									<address> 
										<span class="location"><?php echo(types_render_field("asa-member-location", array("raw" => true))); ?></span>
									</address>
								</div>
							</a>
						</div>
						<!--end post-->
	
					<?php endwhile; ?>
					<?php $numberOfPosts = 0; ?>
					<?php wp_reset_postdata(); // reset the query ?>
				</div>

				
				
				<h3 class="home-members">Home Members</h3>
				<div class="wrapper">
					<div class="text">
						<p>Contact our Office to locate</p>
						<p>other families in your area:</p>
					</div>
					<a href="#">
						<div class="icon"><span>Email: </span><span class="fa fa-envelope-o"></span></div>
					</a>
				</div>
				<div class="line-wrapper"><a href="/apply#apply-to-join"><div class="centered-button">Apply to Join</div></a></div>

				<div class="full-posts">
					<?php 
					$numberOfPosts = 0;
					$args = array(
						'post_type' => 'member'
					);
					$member = new WP_Query($args);

					echo "<style>div.featured-member[id*='member-']{display:none;}</style>"//hide all featured-members. Revealed by dynamic styling below;
					?>
					<?php while($member->have_posts()) : $member->the_post(); ?>
						<?php $numberOfPosts++ ?>
						<span id="anchor-<?php echo $numberOfPosts; ?>" style="display:none; position: fixed;"></span>
						<div class="featured-member" id="member-<?php echo $numberOfPosts; ?>">
							<h1><?php the_title(); ?></h1>
							<address class="top">
								<span><?php echo(types_render_field("asa-member-location", array("raw" => true))); ?></span>
								 | <a target="_blank" href="http://<?php echo(types_render_field("asa-member-website", array("raw" => true)));?>"><?php echo(types_render_field("asa-member-website", array("raw" => true))); ?></a>
							</address>
							<?php if ( has_post_thumbnail() ) {echo '<div class="member-img" role="image">';the_post_thumbnail(); echo '</div>';} ?>
							<div class="grid">
								<div class="grid-2-3">
									<h4>Description</h4>
									<p><?php echo(types_render_field("asa-member-description", array("raw" => true))); ?></p>
								</div>
								<div class="grid-1-3">
									<div class="grades">
										<h4>Grades</h4>
										<p><?php echo(types_render_field("asa-member-grade-levels", array("raw" => true))); ?></p>
									</div>
									<div class="contact">
										<h4>Contact</h4>
										<address>
											<span class="email-address"><a href="mailto:<?php echo(types_render_field("asa-member-email", array("raw" => true))); ?>"><?php echo(types_render_field("asa-member-email", array("raw" => true))); ?></a></span>
											<span class="phone-number"><a href="tel:<?php echo(types_render_field("asa-member-phone", array("raw" => true))); ?>"><?php echo(types_render_field("asa-member-phone", array("raw" => true))); ?></a></span>
										</address>
									</div>
								</div>
							</div>
							<div class="line-wrapper"><a href="http://<?php echo(types_render_field("asa-member-website", array("raw" => true))); ?>"><div class="centered-button">Visit Website</div></a></div>
							<style>
								/* styling to hide/show featured-member */
								#anchor-<?php echo "$numberOfPosts"; ?>:target + #member-<?php echo "$numberOfPosts"; ?>{
									display: block;
								}
							</style>
						</div>
						
					<?php endwhile; ?>
					<?php $numberOfPosts = 0; ?>		
				</div>
			</section>
		</div>
		<?php get_footer(); ?>