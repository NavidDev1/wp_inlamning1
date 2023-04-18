<footer id="footer">
			<div class="container">
				<div class="row top">
					<div class="col-xs-12 col-sm-6 col-md-4">

          <?php
					// setting the footer widgets

					dynamic_sidebar('sidebar-1');

					?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					<?php 
					dynamic_sidebar('sidebar-2')
					?>
					</div>
					<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">
					
					<?php 
					dynamic_sidebar('sidebar-3')
					?>
			
					</div>
				</div>
				<div class="row bottom">
					<div class="col-xs-12">
						<p>Copyright &copy; Grupp X, 2016</p>
					</div>
				</div>
			</div>
		</footer>

	</div>

<?php
wp_footer();
?>
	

</body>
</html>
