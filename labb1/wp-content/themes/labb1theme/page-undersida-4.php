<?php
get_header();
?> 

<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12 col-sm-8 col-md-6">
						<h1><?php the_title();?></h1>
						<?php

             the_content();
             ?>

						</div>
						<div class="col-xs-12 col-sm-4 col-md-6">
						<?php
//fetching the content
            $attachments = get_attached_media( 'image' );
            if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
            echo wp_get_attachment_image( $attachment->ID, 'full' );
          }
        }
				?>
						</div>
					</div>
				</div>
			</section>
		</main>

     <?php
    get_footer();
    ?>