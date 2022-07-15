<?php get_header(); ?>

<div class="row g-5">
    <div class="col-md-9">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        <?php echo get_theme_mod('section_heading'); ?>
      </h3>
      

    <article class="blog-post">
        <div> 
            <h2 class="blog-post-title mb-1"> 
                <?php the_title(); ?> 
            </h2>
        </div>
    </article>
 
    </div>

    <!-- sidebar  -->
    <div class="col-md-3">
        <div style="top: 2rem;">
            <div class="p-4">
            <?php if(is_active_sidebar('sidebar')) : ?>
            <?php dynamic_sidebar('sidebar'); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>

  </div>
</main>

<?php get_footer(); ?>
