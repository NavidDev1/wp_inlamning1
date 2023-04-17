
	



						<div id="primary" class="col-xs-12 col-md-9">
							

              
								<h2 class="title">
               
									<a href="<?php the_permalink(); ?>">
                  <?php the_title();?></a>
								</h2>
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php
                    //getting the content for with meta data for this page
                    the_date();?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author(); ?></a>
									</li>
									<li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
								</ul>
                <?php
                
                the_content();
                ?>
             
						</div>
             