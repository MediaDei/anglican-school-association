<?php
/*
Template Name: Archives
*/
get_header(); ?>

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

			  	foreach ($categories as $cat) {
			  		$currentCat = $cat->slug;
			  		$numberOfCategories++;
			    	echo '<li '; if(is_category($currentCat)){echo 'class="current-cat"';} echo ' id="'.$cat->slug.'"><a href="/category/'.$cat->slug.'">'.$cat->name.'</a></li>';
			    }//end foreach
				?>
			</ul>
		</aside>

		<div class="posts grid-2-3 grid-pad">
 		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
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
		 <?php endwhile;?>
		 <div class="pagination">
		 	<?php echo paginate_links( $args ); ?>
		 </div>
		<?php endif; ?>
		</div>
	</section>
</div>
<?php get_footer(); ?>