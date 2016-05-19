			<?php get_header(); ?>
			<div role="image" class="hero-img notices"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
		
		<div class="notices">
			<section class="notices grid">
				<h2 class="narrow">notice board</h2>
				<aside class="filter grid-1-3">
					<p class="smallcaps">filter by</p>
					<ul>
						<li><input type="checkbox">ASA news</li>
						<li><input type="checkbox">Job postings</li>
						<li><input type="checkbox">Available teachers</li>
						<li><input type="checkbox">Events</li>
						<li><input type="checkbox">2016</li>
						<li><input type="checkbox">2015</li>
						<li><input type="checkbox">2014</li>
					</ul>
				</aside>
				<div class="posts grid-2-3 grid-pad">
					<?php 
					$args = array(
						'post_type' => 'post'
					);
					$notices = new WP_Query($args);
					$numberOfPosts = 0;
					$expanded = false;
					while($notices->have_posts()) : $notices->the_post(); ?>
						<?php $numberOfPosts++ ?>
						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="date">
								<time><?php echo get_the_date("M j"); ?></time>
							</div>
							<h1><?php the_title(); ?></h1>
							<span id="anchor-<?php echo $numberOfPosts; ?>" style="display:none; position: fixed;"></span>
							<div class="post-content" id="notice-<?php echo $numberOfPosts; ?>">
								<?php the_content(); ?>
							</div>
							<a class='expand' href='#anchor-<?php echo $numberOfPosts; ?>'>Expand</a>							
						</div>
						<style>
							/* styling to expand/collapse post-content */
							#anchor-<?php echo "$numberOfPosts"; ?>:target + #notice-<?php echo "$numberOfPosts"; ?>{
								height: auto;
							}
							#anchor-<?php echo "$numberOfPosts"; ?>:target + #notice-<?php echo "$numberOfPosts"; ?> + .expand{
								display: none;
							}
						</style>

					<?php endwhile; ?>
					<?php $numberOfPosts = 0; ?>
					<?php wp_reset_postdata(); // reset the query ?>
				</div>
			</section>
			</div>
		<?php get_footer(); ?>