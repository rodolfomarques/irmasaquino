<?php get_header()?>
<body>

  <div id="grid-body"> <!-- grid de toda a pagina -->

    <div class="section grid" id="home"> <!-- Sessão inicial da página -->
      <?php wp_nav_menu( array( 'theme_location' => 'menu-topo', 'menu_class' => 'central', 'container' => 'div', 'container_class' => 'menu grid' ) ); ?>
      <ul class="products">
      	<?php	$args = array(
      			'post_type' => 'product',
      			'posts_per_page' => 12
      			);
      		$loop = new WP_Query( $args );
      		if ( $loop->woocommerce_content(); ) {
      			while ( $loop->have_posts() ) : $loop->the_post();
      				wc_get_template_part( 'content', 'product' );
      			endwhile;
      		} else {
      			echo __( 'No products found' );
      		}
      		wp_reset_postdata();
      	?>
      </ul><!--/.products-->
      </div>

<?php get_footer()?>
