<?php get_header(); ?>

<!-- Criação do Site -->
<!-- Abre Titulo Paginas Internas -->
<div class="titulo-paginas-internas">
  <div class="container">
    <h2><i class="fa fa-calendar" aria-hidden="true"></i> <?php wp_title(''); ?></h2>
    <p><?php echo category_description(''); ?></p>
  </div>
</div>
<!-- Fecha Títulos Paginas Internas -->

<!-- Abre Conteúdo -->
<div class="conteudo-pagina">
  <div class="container">
    <div class="row">
      <!-- abre box eventos -->
      <div class="box-eventos col-md-8">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> <!-- loop wordpress -->
        <!-- loop wordpress Categoria Eventos -->
        <div class="row">
          <div class="col-md-3">
           <div class="data-evento">
             <h2><?php the_field('dia_evento'); ?></h2>
             <p><?php the_field('mes_evento'); ?></p>
           </div>
          </div>
          <div class="col-md-9">
           <div class="conteudo-evento">
             <a href="<?php the_permalink(); ?>"><h3><?php the_title(); ?></h3></a>
             <p><?php the_excerpt(); ?></p>
           </div>
          </div>
        </div>
      <?php endwhile; else: endif; ?>  <!-- loop wordpress -->
      </div>
      <!-- fecha box eventos -->
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
  </div>
</div>
<!-- Páginação -->
<div class="paginacao">
  <div class="container">
    <?php wordpress_pagination(); ?>
  </div>
</div>
<!-- Páginação -->
<!-- Fecha Conteúdo -->
<!-- Criação do site -->
<?php get_footer(); ?>
