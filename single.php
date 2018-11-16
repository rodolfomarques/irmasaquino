<?php get_header()?>
<body>

  <div id="grid-body"> <!-- grid de toda a pagina -->

    <div class="section grid" id="home"> <!-- Sessão inicial da página -->
      <?php wp_nav_menu( array( 'theme_location' => 'menu-topo', 'menu_class' => 'central', 'container' => 'div', 'container_class' => 'menu grid' ) ); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h2><?php the_title()?></h2>
      <?php endwhile; endif; ?>
    </div>

<?php get_footer()?>
