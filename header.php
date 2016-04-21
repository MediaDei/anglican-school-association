
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset='<?php bloginfo('charset') ?>'>
	<?php if (is_search()) { ?>
		<meta name="robots" content="noindex, nofollow">
	<?php }?>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		
		<?php 
			if(is_home()) { 
				echo " Home | ";
				echo bloginfo("name");
			} 
			else { 
				echo wp_title(" | ", false, right);
				echo bloginfo("name");
			} 
		?>

	</title>

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<div class="page-wrap">
		<header>
			<h1>
				<a href="/">Anglican <span>School Association</span>
				</a>
			</h1>
			
			<nav>
				<li>
					<a href="/about">About<span class="nav-sub-txt">ASA methods & principles</span></a>
				</li>

				<li>
					<a href="/st-bede">St. Bede<span class="nav-sub-txt">Society for teachers</span></a>
				</li>

				<li>
					<a href="/accreditation">Accreditation<span class="nav-sub-txt">Standards for mission and acceptance</span></a>
				</li>

				<li>
					<a href="/members">Members<span class="nav-sub-txt">Schools in the ASA</span></a>
				</li>

				<li>
					<a href="/notices">Notices<span class="nav-sub-txt">Postings & news</span></a>
				</li>

				<li>
					<a href="/resources">Resources<span class="nav-sub-txt">Materials for schools</span></a>
				</li>
			</nav>
			<!--closing header in page to allow custom hero img class for each page--> 
			

	