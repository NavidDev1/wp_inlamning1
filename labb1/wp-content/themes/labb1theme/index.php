<?php
get_header();
?>   
    		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
						<h2 class="<?php the_title();?> " ></h2>
						<article>
						


								<?php
                if(have_posts() ){

                  while( have_posts() ){

                    the_post();
                    
                    get_template_part( 'template-parts/content', 'archive' );
                  }
                }
                
                ?>
               
							 <?php
							 the_posts_pagination();
							 ?>
							 
							</article>


						</div>
						<aside id="secondary" class="col-xs-12 col-md-3">
							<div id="sidebar">

								<?php 
								//setting the dynamic widgets 

					      dynamic_sidebar('bloggerbar-1')
					       ?>

								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
											<?php
											dynamic_sidebar('bloggerbar-2')
											?>
											</li>
										</ul>
									</li>
									</ul>
								 </li>
											
								<?php dynamic_sidebar('bloggerbar-3')?>
											
							  </ul>
									</li>
									<?php dynamic_sidebar('bloggerbar-4')?>
								</ul>
							</div>
						</aside>
					</div>
				</div>
			</section>
		</main>

    <?php
    get_footer();
    ?>