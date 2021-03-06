<?php
// Template Name: Página Principal
?>
<?php get_header(); ?>
<!-- Criação do Site -->

<!-- Abre Introdução -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- loop wordpress -->
<style media="screen">
.bg-introducao {
  background-image: url('<?php the_field('bg_introducao'); ?>');
  background-size: cover;
}
</style>
<div class="introducao bg-introducao">
    <div id="search" class="container">
      <h2>Encontre aqui <span id="changing-text" data-typist="Temas,Plugins,Tutoriais,Segurança,Hospedagem">Dicas</span> WordPress!</h2>
        <div class="barra-busca">
          <div class="input-group">
             <form class="form-search" role="search" method="get" id="searchform" action="http://localhost:8888/novo-wpcollege/">
                <label for="s"></label>
                  <input type="text" class="form-control" value="" name="s" id="s" placeholder="Procure aqui..." />
                  <span class="input-group-btn">
                  <input class="btn btn-default" type="submit" id="searchsubmit" value="Buscar" />
                  </span>
              </form>
          </div>
        </div>
        <div class="categorias-busca">
            <ul>
              <li>Categorias: </li>
              <li><a href="/?s=Wordpress">WordPress</a> |</li>
              <li><a href="/?s=Dicas_Tutoriais">Dicas & Tutoriais</a> |</li>
              <li><a href="/?s=Marketing_Digital">Marketing Digital</a> |</li>
              <li><a href="/?s=Segurança">Segurança</a> |</li>
              <li><a href="/?s=template_wordpress">Templates</a></li>
            </ul>
          </div>
    </div>
</div>
<?php endwhile; else: endif; ?>  <!-- loop wordpress -->
<!-- Fecha Introdução -->
<!-- Abre Ultimas Postagens -->
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- loop wordpress -->
<div class="container">
  <div class="row">
  <div class="ultimas">
    <h2>Ultimas Postagens</h2>
    <div class="box-postagens">
    <?php global $post; $myposts = get_posts('numberposts=3&orderby=date&order=DESC'); foreach($myposts as $post) :?>
      <div class="col-md-4">
        <a href="<?php the_permalink(); ?>"><div class="hoverzoom"><?php the_post_thumbnail('medium'); ?></div></a>
        <a href="<?php the_permalink(); ?>"><span><h3><?php the_title(); ?></h3></span></a>
      </div>
      <?php endforeach; ?>
    </div> <!-- div box-postagens -->
  </div> <!-- div ultimas -->
  </div>  
  <div class="call-action-postagem">
    <p>Veja mais postagens do WP College clicando no botão abaixo.</p>
   <a class="btn btn-primary" href="#" role="button">Mais Postagens</a>
  </div>
</div>
  <?php endwhile; else: endif; ?>
<!-- Fecha Ultimas Postagens -->

<!-- Box Hospedagens e Templates -->
<div class="row">
  <div class="container">

<!-- Abre Box Promoções de Hospedagem -->
    <div class="col-md-6">
      <h1>Promoções de Hospedagem</h1>
      <p>promoções de hospedagem aqui</p>
      
      <div class="media"> 
        <div class="media-left">
          <a href="#">
            <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/host1plus-afiliados.png" alt="Promoções de Hospedagem">
          </a>
        </div>
        <div class="media-body">
          <h3 class="media-heading">Media heading</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio natus dolorem veniam laudantium eius sed libero dolore, dignissimos, et aspernatur quam,</p>
          <a class="btn btn-success" href="#" role="button">Quero a Promoção</a>
        </div>
      </div>

      <div class="media"> 
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/host1plus-afiliados.png" alt="Promoções de Hospedagem">
        </a>
      </div>
      <div class="media-body">
        <h3 class="media-heading">Media heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio natus dolorem veniam laudantium eius sed libero dolore, dignissimos, et aspernatur quam,</p>
        <a class="btn btn-success" href="#" role="button">Quero a Promoção</a>
      </div>
      </div>

      <div class="media"> 
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/host1plus-afiliados.png" alt="Promoções de Hospedagem">
        </a>
      </div>
      <div class="media-body">
        <h3 class="media-heading">Media heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio natus dolorem veniam laudantium eius sed libero dolore, dignissimos, et aspernatur quam,</p>
        <a class="btn btn-success" href="#" role="button">Quero a Promoção</a>
      </div>
      </div>

      <div class="media"> 
      <div class="media-left">
        <a href="#">
          <img class="media-object" src="<?php echo get_stylesheet_directory_uri(); ?>/img/host1plus-afiliados.png" alt="Promoções de Hospedagem">
        </a>
      </div>
      <div class="media-body">
        <h3 class="media-heading">Media heading</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio natus dolorem veniam laudantium eius sed libero dolore, dignissimos, et aspernatur quam,</p>
        <a class="btn btn-success" href="#" role="button">Quero a Promoção</a>
      </div>
      </div>

      <div class="call-action-postagem">
        <p>Veja mais promoções de hospedagem clicando no botão abaixo.</p>
        <a class="btn btn-primary" href="#" role="button">Mais Promoções</a>
      </div>

    </div>
<!-- Fecha Box Promoções de Hospedagem -->

<!-- Abre Box Promoções de Templates & Plugins -->

    <div class="col-md-6">
      <h1>Promoções de Templates e Plugins</h1>
      <p>Promoções de temas e plugins aqui</p>
    




    </div>

<!-- Fecha Box Promoções de Templates & Plugins -->


  </div>
</div>
<!-- Box Hospedagens e Templates -->

<!-- Criação do site -->
<?php get_footer(); ?>
