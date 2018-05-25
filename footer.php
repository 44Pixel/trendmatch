	<footer>

		<!-- FOOTER NAVBAR--> 
		<div class="footer-navbar-wrapper">
			<?php
				wp_nav_menu( array(
					'theme_location' => 'footer-menu',
					'container_class' => 'footer-navbar' ) );
			?>
		</div>
		<!-- NAVBAR ENDS -->

		</div> <!--Sitewrapper ends-->
    </footer>
    
    <?php wp_footer(); ?>
    
    <link href="https://opensource.keycdn.com/fontawesome/4.5.0/font-awesome.min.css" rel="stylesheet">
    </body>
</html>
