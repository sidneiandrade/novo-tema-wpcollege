<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Criação do Site -->


  <div class="container">
    <div class="col-md-8">
    <div class="breadcrumb-post"><p><?php wp_custom_breadcrumbs(); ?></p></div>
    <h2><?php the_title(); ?></h2>
    <p><?php the_author(); ?> &bull; 
    <i class="fa fa-calendar-check-o" aria-hidden="true"></i> <?php the_time('d/m/Y') ?> &bull; 
    <?php $my_var = get_comments_number( $post_id ); ?>
    </p>
    <?php the_post_thumbnail('img-post'); ?>
    <?php the_content(); ?>
    </div>


      <!-- Publicidade Eventos -->
      <div class="col-md-2">
        <div class="pub-300x600">
          <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
          <!-- Guia do Pet - Halfpage - 300x600 -->
          <ins class="adsbygoogle"
             style="display:inline-block;width:300px;height:600px"
             data-ad-client="ca-pub-3922645856147053"
             data-ad-slot="3552264843"></ins>
          <script>
          (adsbygoogle = window.adsbygoogle || []).push({});
          </script>
        </div>
      </div>
      <!-- Publicidade Eventos -->
  </div>

<!-- Fecha Conteúdo -->
<!-- Criação do site -->
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>
