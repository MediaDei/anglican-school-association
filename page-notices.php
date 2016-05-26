		<?php get_header(); ?>
		
		<div class="notices">
			<section class="notices grid">
				<h2 class="narrow">notice board</h2>
				<aside class="filter grid-1-3">
					<p class="smallcaps">filter by</p>
					<ul>
						<?php 
					    $args = array(
					      'orderby' => 'title',
					      'hide_empty'=> 1);
					    $numberOfCategories = 0;
					  	$categories = get_categories($args);


					  	//echo '<li><input type="checkbox" id="checkbox-0" checked>All Notices</li>';//show all posts
					  	
					  	foreach ($categories as $cat) {
					  		$numberOfCategories++;
					    	echo '<li><input type="checkbox" class="filter-checkbox" id="checkbox-'.$numberOfCategories.'">'.$cat->name.'</li>';
					    	echo '
									    <script type="text/javascript">
									    	var $ = jQuery.noConflict();
									      $(document).ready(function(){
								          $("#checkbox-'.$numberOfCategories.':checkbox").change(function(){
							              if($(this).is(":checked")){
							              	$(".post").hide();
							                $(".category-'.$cat->slug.'").show();

							              }
							              else if($(this).is(":not(:checked)")){
							                $(".category-'.$cat->slug.'").hide();
							              }
								          });
									      });
									    </script>';
					    }//end foreach
						?>
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
						<div <?php post_class('post'); ?>>
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