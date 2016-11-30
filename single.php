<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Criação do Site -->
<!-- Abre Titulo Paginas Internas -->
<div class="titulo-paginas-internas">
  <div class="container">
    <h2><i class="fa fa-pencil" aria-hidden="true"></i> <?php the_title(); ?></h2>
    <p class="data-publicacao"><i class="fa fa-calendar-check-o" aria-hidden="true"></i> publicado em <?php the_time('d/m/Y') ?></p>
  </div>
</div>
<!-- Fecha Títulos Paginas Internas -->

<!-- Abre Conteúdo -->
<div class="conteudo-pagina">
  <div class="container">
	<div class="col-md-8">
		<?php the_content(); ?>
		<p><?php the_field('descricao_evento'); ?></p>
		<p><?php the_field('descricao_informativo'); ?></p>
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
</div>

<!-- Fecha Conteúdo -->
<!-- Criação do site -->
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>
