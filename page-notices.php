			<?php get_header(); ?>
			<div role="image" class="hero-img about"></div>
		</header>
		<!--closing header in page to allow custom hero img class for each page-->
		
		<div class="notices">
			<section class="notices grid">
				<h2>notice board</h2>
				<div class="posts grid-2-3">

					<?php 
					$args = array(
						'post_type' => 'post'
					);
					$notices = new WP_Query($args);
					while($notices->have_posts()) : $notices->the_post(); ?>

						<div class="post" id="post-<?php the_ID(); ?>">
							<div class="date">
								<time><?php echo get_the_date("M j"); ?></time>
							</div>
							<h1><?php the_title(); ?></h1>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="expand">Expand</a>
						</div>

					<?php endwhile; ?>
					<?php wp_reset_postdata(); // reset the query ?>
				</div>

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
			</section>
			</div>
		<?php get_footer(); ?>