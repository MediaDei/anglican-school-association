
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
			<a href="/">
				<div class="top">
					<h1>anglican</h1>
					<h1>school association</h1>

				</div>
			</a>

			<a href="/apply" class="banner"><div class="banner"></div></a>

			<nav class="grid">
				<a href="/about">
					<span>About</span>
					<span>ASA methods
					& principles</span>
				</a>

				<a href="/about#st-bede">
					<span>St. Bede</span>
					<span>Society for
					teachers</span>
				</a>

				<a href="/accreditation">
					<span>Accreditation</span>
					<span>Standards for mission
					and acceptance</span>
				</a>

				<a href="/members">
					<span>Members</span>
					<span>Schools in
					the ASA</span>
				</a>

				<a href="/notices">
					<span>Notices</span>
					<span>Postings
					& news</span>
				</a>

				<a href="/resources">
					<span>Resources</span>
					<span>Materials
					for schools</span>
				</a>
			</nav>
			<!--closing header in page to allow custom hero img class for each page--> 
			

	