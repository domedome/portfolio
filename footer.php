            </div>
            <div class="l-container">
                <footer class="footer l-col-12 l-pad-1">

                    <p><b>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></b></p>
                    <nav class="footer-nav">

                        <?php wp_nav_menu( array(
                            'theme_location' => 'footer-links',
                            'container' => false
                        ) ); ?>

                    </nav>
                    <p class="disclaimer">Artworks and Assets on this website are designed by Domenico Catelli. Some of these are designed for the committees, others shaped to fit this media</p>


                </footer>
            </div>

		</div>
		<?php wp_footer(); ?>



        <?php if ( is_post_type_archive('portfolio') ): ?>
            <script type="text/javascript" src="/project-y/wp-content/themes/project-y/assets/javascript/src/rellax.min.js"></script>
            <script type="text/javascript">
                var rellax = new Rellax('.rellax');
            </script>
        <?php endif; ?>



	</body>
</html>
