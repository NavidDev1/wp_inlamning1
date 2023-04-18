<?php
get_header();
?>   
    		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>


								<?php
								// looping out the content on the page
                if(have_posts() ){

                  while( have_posts() ){

                    the_post();
                    
                    get_template_part( 'template-parts/content', 'archive' );
                  }
                }
                
                ?>

							</article>
						</div>
						
					</div>
				</div>
			</section>
		</main>

    <?php
    get_footer();
    ?>