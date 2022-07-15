<?php get_header(); ?>

  <div class="row g-5">
    <div class="col-md-9">
        <h3 class="pb-4 mb-4 fst-italic border-bottom">
            <?php echo get_theme_mod('section_heading'); ?>
        </h3>
      

        <article class="blog-post">
            <h4 class="pb-4 mb-4 fst-italic border-bottom">
                <?php the_title(); ?> 
            </h4>
            <h5 class="text-primary">
            Tel: <a href="tel:+995574021072">574021072</a>    
            </h5>
            <h5 class="text-primary">
            Email: <a href="mailto:avtokakachishvili@gmail.com">avtokakachishvili@gmail.com</a>
            </h5>
            
            <section class="boxes my-5">
                    <div class="card text-center">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <?php if(is_active_sidebar('box1')) : ?>
                                <?php dynamic_sidebar('box1'); ?>
                            <?php endif; ?>
                            <a href="/category/books/" class="btn btn-primary">Go to books page</a>
                        </div>
                    </div>
                </section>
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
