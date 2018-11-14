
<?php get_header();?>
  <body>

    <div id="grid-body"> <!-- grid de toda a pagina -->

      <div class="section color-section grid" id="home"> <!-- Sessão inicial da página -->
        <div class="menu grid">
          <ul class="central">
            <li>Home</li>
            <li>Sobre</li>
            <li>Agenda</li>
            <li>Blog</li>
            <li>Serviços</li>
            <li>Loja Virtual</li>
            <li>Contato</li>
            <li>Pesquisa</li>
          </ul>
        </div>
        <img src="<?php bloginfo('template_url')?>/img/logo.png" alt="Irmas Aquino Logo">
      </div>
      <div class="section grid" id="blog"> <!-- Área das postagens recentes do blog -->
        <div class="central">
          <div id="blog-categorias">
            <a href="#">Arquivos</a>
            <a href="#">Categorias</a>
          </div>
          <div id="grid-postagens"> <!-- postagens mais recentes -->
            <div id="postagem-atual">
              <div class="row separados">
                <h4>12 de outubro de 2018</h4>
                <a href="#" class="link-ler_mais">ler mais</a>
              </div>
              <h3>5 Segredos para Aumentar a produtividade da sua empresa</h3>
            </div>
            <div class="postagem">
              <div class="row separados">
                <h4>12 de outubro de 2018</h4>
                <a href="#" class="link-ler_mais">ler mais</a>
              </div>
              <h3>livros que vão ajudar a dar um upgrade na sua vida</h3>
            </div>
            <div class="postagem">
              <div class="row separados">
                <h4>12 de outubro de 2018</h4>
                <a href="#" class="link-ler_mais">ler mais</a>
              </div>
              <h3>A importancia do empoderamento feminino no mercado de trabalho</h3>
            </div>
          </div>
          <div class="row centralizado">
            <a href="#" id="link-visitar_blog" class="marginTop"><h3>Visitar Blog</h3></a>
          </div>
        </div>
      </div>
      <div class="section color-section" id="banner-coach"> <!-- Banner "Coach integral sistemico" -->
        <div class="central">

        </div>
      </div>
      <div class="central grid grid-center" id="area_coach"> <!-- Área sobre o que é Coach -->
        <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno central">
        <div class="central">
          <div class="row central centralizado marginTopBottom">
            <div>
              <h2 class="text-center" id="titulo_coach">O que é o Coaching?</h2>
              <p class="text-center marginTop" id="desc_coach">Coaching é um processo de condução lógica e cognitiva
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
            <div>
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
            <div>
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
      <div class="section color-section grid"> <!-- Área de chamada para treinamentos -->
        <div class="central">
          <div class="row marginTopBottom centralizado" id="">
            <div class="">
              <img src="#" alt="">
            </div>
            <div class="marginTopBottom" id="treinamento_content">
              <!-- <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno"> -->
              <h2 id="titulo_chamada-treinamento">Um treinamento que vai mudar a sua vida</h2>
              <!-- <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno"> -->
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
          <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno central">
          <h2 class="text-center central">Agenda</h2>
          <?php dynamic_sidebar('agenda');?>
        </div>
      </div>
      <div class="section color-section" id="perfil"> <!-- Área que fala sobre as irmãs -->

          <div id="area_kalina">

          </div>
          <div id="perfil_kalina">
            <img src="https://picsum.photos/300/300?image=1074" alt="" class="img_perfil">
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

            <img src="https://picsum.photos/300/300?image=1074" alt="" class="img_perfil">
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
          <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno central">
          <h2 class="central">Destaques da Loja Virtal</h2>
          <div class="central">

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
        <img src="https://picsum.photos/300/400?image=1031" alt=""> <!-- imagem central  -->

      </div>
      <div class="section grid"> <!-- Área das redes sociais -->
        <div class="central" id="redes-container">
          <div id="chamda-redes">
            <img src="<?php bloginfo('template_url')?>/img/adorno.png" alt="" class="adorno central">
            <h2 id="titulo_redes-sociais">Acompanhe Nossas Redes Sociais</h2>
            <div class="icones-redes">
              <img src="#" alt="">
              <img src="#" alt="">
              <img src="#" alt="">
            </div>
          </div>

        </div>
      </div>
      <div class="section color-section grid"> <!-- Footer do site -->
        <div id="footer-content" class="central marginTopBottom" >
          <img src="https://picsum.photos/200/300?image=0" alt="" id="img-ebook">
          <div id="chamada-ebook">
            <h2>E-book Gratuito</h2>
            <h2>10 passos para ter uma carreira de sucesso</h2>
          </div>
          <div id="form-ebook">
            <?php dynamic_sidebar('redes');?>
          </div>
        </div>
        <div class="menu-footer central grid">
          <ul class="central">
            <li>Home</li>
            <li>Sobre</li>
            <li>Agenda</li>
            <li>Blog</li>
            <li>Serviços</li>
            <li>Loja Virtual</li>
            <li>Contato</li>
            <li>Voltar Topo</li>
          </ul>
        </div>
        <div class="grid" id="rodape">
          <h4 class="central">C&M {Desenvolvimento Web}</h4>
        </div>
      </div>
    </div>

    <?php get_footer();?>
