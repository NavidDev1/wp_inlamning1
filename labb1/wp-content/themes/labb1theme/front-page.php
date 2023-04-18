<?php
get_header()

?>

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="hero">
							
							<?php
//fetching the content
            $attachments = get_attached_media( 'image' );
            if ( $attachments ) {
            foreach ( $attachments as $attachment ) {
            echo wp_get_attachment_image( $attachment->ID, 'full' );
          }
        }
       ?>

								<div class="text">
									<h1>Hej och välkommen!</h1>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php
get_footer()

?>
	