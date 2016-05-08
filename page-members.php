			<?php get_header(); ?>
			<div role="image" class="hero-img about"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
		
		<div class="members">
			<section class="members">
				<h2>Member Schools</h2>
				<h3>Full Members</h3>
				<div class="posts grid">
					<?php 
					$i = 0;//counter for sorting posts into two columns
					$numberOfPosts = 0;
					$args = array(
						'post_type' => 'full-member'
					);
					$fullMember = new WP_Query($args);
					while($fullMember->have_posts()) : $fullMember->the_post(); ?>
						<?php $numberOfPosts++ ?>
						<!--start post-->
						<div class="post grid-1-2 <?php if($numberOfPosts % 2 != 0){echo 'border';} ?>" id="post-<?php the_ID(); ?>">
							<a href="#anchor-<?php echo $numberOfPosts; ?>">
								<div class="post-content grid">
									<h1><?php the_title(); ?></h1>
									<address> 
										<span class="city-town"><?php echo(types_render_field("full-member-town-city", array("raw" => true))); ?></span>,
										<span class="state"><?php echo(types_render_field("full-member-state", array("raw" => true))); ?></span>
									</address>
								</div>
							</a>
						</div>
						<!--end post-->
	
					<?php endwhile; ?>
					<?php $numberOfPosts = 0; ?>
					<?php wp_reset_postdata(); // reset the query ?>
				</div>

				
				<div class="home-members">
					<h3>Home Members</h3>
					<div class="text">
						<p>Contact our Office to locate</p>
						<p>other families in your area:</p>
					</div>
					<div class="icon"></div>
				</div>
				<a href="/apply#apply-to-join"><div class="centered-button">Apply to Join</div></a>

				<div class="full-posts">
					<?php 
					$numberOfPosts = 0;
					$args = array(
						'post_type' => 'full-member'
					);
					$fullMember = new WP_Query($args);

					echo "<style>div.featured-member[id*='member-']{display:none;}</style>"//hide all featured-members. Revealed by dynamic styling below;
					?>
					<?php while($fullMember->have_posts()) : $fullMember->the_post(); ?>
						<?php $numberOfPosts++ ?>
						<span id="anchor-<?php echo $numberOfPosts; ?>" style="display:none; position: fixed;"></span>
						<div class="featured-member" id="member-<?php echo $numberOfPosts; ?>">
							<h1><?php the_title(); ?></h1>
							<address class="top">
								<span><?php echo(types_render_field("full-member-town-city", array("raw" => true))); ?></span>,
								<span><?php echo(types_render_field("full-member-state", array("raw" => true))); ?></span>
								 | <a target="_blank" href="http://<?php echo(types_render_field("full-member-website", array("raw" => true)));?>"><?php echo(types_render_field("full-member-website", array("raw" => true))); ?></a>
							</address>
							<div class="member-img" role="image">
								<img src="<?php echo(types_render_field("full-member-image", array("raw" => true))); ?>" alt="Featured image for selected member">
							</div>
							<div class="grid">
								<div class="grid-2-3">
									<h4>Description</h4>
									<p><?php echo(types_render_field("full-member-description", array("raw" => true))); ?></p>
								</div>
								<div class="grid-1-3">
									<h4>Grades</h4>
									<p><?php echo(types_render_field("full-member-grade-levels", array("raw" => true))); ?></p>
									<h4>Contact</h4>
									<address>
										<span class="email-address"><a href="mailto:<?php echo(types_render_field("full-member-email", array("raw" => true))); ?>"><?php echo(types_render_field("full-member-email", array("raw" => true))); ?></a></span>
										<span class="phone-number"><a href="tel:<?php echo(types_render_field("full-member-phone", array("raw" => true))); ?>"><?php echo(types_render_field("full-member-phone", array("raw" => true))); ?></a></span>
								</address>
								</div>
							</div>
							<a href="http://<?php echo(types_render_field("full-member-website", array("raw" => true))); ?>"><div class="centered-button">Visit Website</div></a>
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