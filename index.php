
<?php get_header();?>
  <body>

    <div id="grid-body"> <!-- grid de toda a pagina -->

      <div class="section color-section grid" id="home"> <!-- Sessão inicial da página -->
        <?php wp_nav_menu( array( 'theme_location' => 'menu-topo', 'menu_class' => 'central', 'container' => 'div', 'container_class' => 'menu grid' ) ); ?>
        <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="Irmas Aquino Logo">
      </div>
      <div class="section grid" id="blog"> <!-- Área das postagens recentes do blog -->

        <!-- chamada em php para o componente blogsection.php  -->
        <?php get_template_part( 'components/blogsection', 'blogsection' );?>

      </div>
      <div class="section color-section grid" id="banner-coach" style="background: url(<?php bloginfo('template_url')?>/img/bg-banner.png) center no-repeat"> <!-- Banner "Coach integral sistemico" -->
        <div class="central row ">
          <img src="#" alt="">
          <img src="<?php bloginfo('template_url')?>/img/coach.png" alt="" id="img_central">
          <div id="banner_content">
            <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
            <h1>Transforme a sua vida e a do seus funcionários</h1>
            <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
          </div>
        </div>
      </div>
      <div class="central grid grid-center" id="area_coach"> <!-- Área sobre o que é Coach -->
        <div class="central flexcontainer-width">
          <div class="row central centralizado marginTopBottom">
            <div id="explicacao_coach">
              <img src="<?php bloginfo('template_url')?>/img/adornoroxo.png" alt="" class="adorno central">
              <h2 class="" id="titulo_coach">O que é o Coaching?</h2>
              <p class=" text-center marginTop" id="desc_coach">Coaching é um processo de condução lógica e cognitiva
              que identifica inicialmente o Estado Atual através de uma
              completa, profunda e constante anamnese. Depois identificar
              os objetivos e aonde a pessoa/organização quer efetivamente
              chegar para, então conhecendo os fatores impeditivos e facilitadores,
              traçar um completo plano de ação que leve o cliente do ponto inicial
              ao ponto desejado</p>
            </div>
            <div>
              <img src="#" alt="">
            </div>
          </div>
          <div class="row separados meio marginTopBottom">
            <div class="flexitem-config">
              <h2 class="text-right" id="titulo_int">Integral</h2>
              <p class="text-center marginTop" id="desc_integral">Esta palavra significa a capacidade de mobilizar o hemisfério
                esquerdo do cérebro (cognitivo, racional, lógico e intelectual
                em direção às mudanças e conquistas , e usa completamente o
                hemisfério direito (emocional, criativo e de crenças) na mesma
                direção e intensidade. Integrando, assim, razão e emoção em prol
                das metas e dos objetivos estabelecidos. Os hemisférios são
                interconectados e trabalham em conjunto e seu papel de cada área
                 varia de acordo com a necessidade.</p>
            </div>
            <div class="flexitem-config2">
              <h2 class="text-left" id="titulo_sis">Sistêmico</h2>
              <p class="text-center marginTop" id="desc_sistemico">Refere-se ao fato que cada individuo (corpo + alma + espirito)
                fazem parte de um   sistema maior, formando por sistemas menores.
                Dessa forma tudo influencia tudo, da mesma maneira que mudanças
                positivas ou negativas que você implementar na sua vida
                influenciará o ambiente em que a pessoa esta inserida e na
                sequencia influenciará o mundo.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="section color-section grid" id="treinamento"> <!-- Área de chamada para treinamentos -->
        <div class="central flexcontainer-width">
          <div class="row marginTopBottom centralizado">
            <div class="flexitem-config">
              <img src="https://picsum.photos/200/300" alt="">
            </div>
            <div class="marginTopBottom flexitem-config" id="treinamento_content">
              <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
              <h2 id="titulo_chamada-treinamento">Um treinamento que vai mudar a sua vida</h2>
              <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
              <p id="desc_chamada-treinamento" class="marginTopBottom"> Lorem ipsum dolor sit amet, consectetur
                adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore
                magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
                laboris nisi ut aliquip ex ea commodo consequat.
              </p>
              <a href="#" class="buttom">Quero Participar</a>
            </div>
          </div>
        </div>
      </div>
      <div class="section grid" id="area_agenda"> <!-- Área da agenda -->
        <div class="central grid grid-center">
          <img src="<?php bloginfo('template_url')?>/img/adornoroxo.png" alt="" class="adorno" id="adorno_agenda">
          <h2 class="text-center" id="titulo_agenda">Agenda</h2>
          <div id="sidebars_agenda">
              <?php dynamic_sidebar('agenda');?>
          </div>
        </div>
      </div>
      <div class="section color-section" id="perfil"> <!-- Área que fala sobre as irmãs -->

          <div id="area_kalina">

          </div>
          <div id="perfil_kalina">
            <img src="<?php bloginfo('template_url')?>/img/calina.png" alt="" class="img_perfil">
            <div id="nome-kalina">
              <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
              <h2 class="nome_perfil">Kalina Aquino</h2>
              <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
            </div>
          </div>
          <p class="desc_perfil" id="desc_kalina"> Possui formação em Coaching Integral Sistêmico
            pela Federação Brasileira de Coaching Integral
            Sistêmico (FEBRACIS), instituição que esta cursando
            a diplomação em Golden Belt (mais alto título de um
            Coach Integral Sistêmico no mundo) até final de
            Novembro/2018.  Atua como Coach e consultora da
            Empresa Irmãs Aquino, Analista Comportamental
            CIS Assessment.
           </p>

          <div id="area_carla" class="">

          </div>
          <div id="perfil_carla">
            <div id="nome-carla">
                <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
              <h2 class="nome_perfil">Carla Aquino</h2>
                <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno">
            </div>

            <img src="<?php bloginfo('template_url')?>/img/carla.png" alt="" class="img_perfil">
          </div>
          <p class="desc_perfil" id="desc_carla">Possui formação em Marketing pela Faculdade
            Instituto Paraibano de Ensino Renovado INPER e
            formação em Coaching Integral Sistêmico pela
            Federação Brasileira de Coaching Integral
            Sistêmico (FEBRACIS), instituição que esta
            cursando a diplomação em Golden Belt (mais alto
            título de um Coach Integral Sistêmico no mundo)
            até final de Novembro 2018.  Atua como Coach
            e consultora da Empresa Irmãs Aquino, Analista
            Comportamental CIS Assessment.
          </p>

      </div>
      <div class="section" id="lojavirtual"> <!-- Área de destaque da loja virtual -->
        <div class="central  grid grid-center">
          <img src="<?php bloginfo('template_url')?>/img/adornoroxo.png" alt="" class="adorno central">
          <h2 class="central">Destaques da Loja Virtal</h2>
          <div class="central">

            <?php get_template_part( 'components/woocommerceloop', 'woocommerceloop' );?>
          </div>
          <a href="#" class="buttom central">Ver todas as Ofertas</a>
        </div>
      </div>
      <div class="section" id="area_citacoes"> <!-- Área das citacões -->
        <div id="area-esquerda">
          <!-- div com a cor de fundo azul -->
        </div>
        <div id="area-direita">
          <!-- div com a cor de fundo lilás -->
        </div>
        <div id="citacao-esquerda">
          <p class="citacao">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor</p>
          <p class="autor"> Jane Doe</p>
        </div>
        <div id="citacao-direita">
          <p class="citacao">asudfhl asdhflmakj sdhflakjdh flmakjh</p>
          <p class="autor"> John Doe </p>
        </div>
        <img src="<?php bloginfo('template_url')?>/img/depoimentos.png" alt=""> <!-- imagem central  -->

      </div>
      <div class="section grid" id="redessociais"> <!-- Área das redes sociais -->
        <div class="central" id="redes-container">
          <div id="chamada-redes">
            <img src="<?php bloginfo('template_url')?>/img/adornoroxo.png" alt="" class="adorno">
            <h2 id="titulo_redes-sociais">Acompanhe Nossas Redes Sociais</h2>
            <div class="icones-redes">
              <img src="<?php bloginfo('template_url')?>/img/facebook.svg" alt="">
              <img src="<?php bloginfo('template_url')?>/img/instagram.svg" alt="">
              <img src="<?php bloginfo('template_url')?>/img/twitter.svg" alt="">
            </div>
          </div>
          <?php dynamic_sidebar('redes');?>
        </div>
      </div>
      <div class="section color-section grid"> <!-- Footer do site -->
        <div id="footer-content" class="central marginTopBottom" >
          <img src="<?php bloginfo('template_url')?>/img/ebook.png" alt="" id="img-ebook">
          <div id="chamada-ebook">
            <h2>E-book Gratuito</h2>
            <h2>10 passos para ter uma carreira de sucesso</h2>
          </div>
          <div id="form-ebook">
            <?php $form_widget = new \MailPoet\Form\Widget();
              echo $form_widget->widget(array('form' => 1, 'form_type' => 'php'));?>
          </div>
        </div>
        <div class="menu-footer central grid">
          <?php wp_nav_menu( array( 'theme_location' => 'menu-rodape', 'menu_class' => 'central' ) ); ?>
        </div>
        <div class="grid" id="rodape">
          <h4 class="central">C&M {Desenvolvimento Web}</h4>
        </div>
      </div>
    </div>

    <?php get_footer();?>
