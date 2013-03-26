<?php
/*
Template Name: www.thearit.com

*/
do_action( 'genesis_doctype' );
do_action( 'genesis_title' );
do_action( 'genesis_meta' );

wp_head(); /** we need this for plugins **/
?>
<link rel="shortcut icon" type="image/x-icon" href="/wp-content/uploads/2013/03/favicon.ico">
</head>
	<style>
		.entry-title {
			display: none;
		}
	</style>

	<body <?php body_class(); ?>>
		<?php
			do_action( 'genesis_before' );
		?>
		<div id="wrap">
			<?php
				do_action( 'genesis_before_header' );
				do_action( 'genesis_header' );
				do_action( 'genesis_after_header' );
			?>
			<div id="content-wrap">
				<?php
					// do_action( 'genesis_before_loop' );
					do_action( 'genesis_loop' );
					// do_action( 'genesis_after_loop' );
				?>
			</div><!-- end #content-sidebar-wrap -->
			<!-- <div id="footer" style="height:55px;background-color:white;">
				<p style="padding-left:75%;">2013 © CUFBA. Website by <a href="http://www.venturit.com">Venturit</a> Inc.</p>
			</div> -->
		</div><!-- end #wrap -->
		<?php
			wp_footer(); // we need this for plugins
			// do_action( 'genesis_after' );
		?>
	</body>
</html>