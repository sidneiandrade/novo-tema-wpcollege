<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- Criação do Site -->
<!-- Abre Titulo Paginas Internas -->
<div class="titulo-paginas-internas">
  <div class="container">
    <h2><i class="fa fa-pencil" aria-hidden="true"></i> <?php the_title(); ?></h2>
    <ol class="breadcrumb"><li><?php wp_custom_breadcrumbs(); ?></li></ol>
  </div>
</div>
<!-- Fecha Títulos Paginas Internas -->
<!-- Abre Conteúdo -->
<div class="container">
  <div class="col-md-9">
    <?php the_content(); ?>
  </div>
  <div class="col-md-3">
  	<?php get_sidebar(); ?>
  </div>
</div>
<!-- Fecha Conteúdo -->
<!-- Criação do site -->
<?php endwhile; else : endif; ?>

<?php get_footer(); ?>
