<?php get_header(); ?>

<!-- Criação do Site -->
<!-- Abre Titulo Paginas Internas -->
<div class="titulo-paginas-internas">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <h2><?php the_title(); ?></h2>
  </div>
</div>
<!-- Fecha Títulos Paginas Internas -->

<!-- Abre Conteúdo -->
<div class="conteudo-pagina">
  <div class="container">
    <?php the_content(); ?>
  </div>
</div>

<!-- Fecha Conteúdo -->
<!-- Criação do site -->
<?php endwhile; else : endif; ?>
<?php get_footer(); ?>
