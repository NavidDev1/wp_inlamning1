
						
							 
								<ul class="meta">
									<li>
										<i class="fa fa-calendar"></i> <?php
                    //getting the content for with meta data for this page
                    the_date();?>
									</li>
									<li>
										<i class="fa fa-user"></i> <a href="forfattare.html"> <?php the_author(); ?></a>
									</li>
                  <li>
										<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
									</li>
                </ul>
								
								<?php
                
                the_content();
                ?>
							





