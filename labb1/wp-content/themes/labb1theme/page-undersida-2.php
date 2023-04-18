<?php
get_header();
?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">

							<h1><?php the_title();?></h1>
							


              <?php
             if (have_posts()):
              while (have_posts()) : the_post();
               the_content();
             endwhile;
            else:
            echo '<p>Sorry, no posts matched your criteria.</p>';
             endif;
             ?>


						</div>

						<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
							<ul class="side-menu">
							<?php

wp_nav_menu(

 array(

 'menu' => 'side undersida menu',

 'container' => '',

 'theme_location' => 'side',

'items_wrap' => '<ul id="" class="side-menu">%3$s</ul>'

)

 )

  ?>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

     <?php
    get_footer();
    ?>