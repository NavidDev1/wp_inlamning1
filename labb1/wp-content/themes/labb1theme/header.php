<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	

	
	<script src="js/jquery.js"></script>
  <?php
	wp_head()
	?>


</head>
<body>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php the_permalink(); ?>">
						
						<?php
						// getting name of title
						echo get_bloginfo('name');?>
						</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<?php get_search_form(); ?>
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
				<?php get_search_form(); ?>
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">

					<?php
					wp_nav_menu(
						array(
							'menu' => 'primary',
							'container' => '',
							'theme_location' => 'primary',
							'items_wrap' => '<ul id="" class="menu">%3$s</ul>'
						)
						);
						// nav menu set
						?>




	
					</div>
				</div>
			</div>
		</nav>