<?php
get_header();
?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
              
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
						<aside id="secondary" class="col-xs-12 col-md-3">
							<ul class="side-menu">
								<li>
									<a href="<?php the_permalink(); ?>">Undersida</a>
								</li>
								<li>
									<a href="<?php the_permalink(); ?>">Undersida 2</a>
								</li>
								<li>
									<a href="<?php the_permalink(); ?>">Undersida 3</a>
								</li>
								<li>
									<a href="<?php the_permalink(); ?>">Undersida 4</a>
                  
								</li>
							</ul>
						</aside>
					</div>
				</div>
			</section>
		</main>

     <?php
    get_footer();
    ?>