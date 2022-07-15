<?php get_header(); ?>

 
 

<div class="row g-2 ">
    <div class="col-md-9">
        <article class="blog-post ">

            <?php if(have_posts()) : ?>
                <div class="d-flex flex-wrap justify-content-between d-grid gap-4"> 
            <?php while(have_posts()) : the_post(); ?>

                <div class="col-md-5 col-sm-12 border rounded-3 p-3 bg-light"> 
                    <?php get_template_part('content'); ?>
                    <div class="d-flex justify-content-end "> 
                        <a class="btn " href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>
            
            <?php endwhile; ?>
            </div>
            <?php else : ?>
                <p><?php __('Post Not Found'); ?></p>
            <?php endif; ?>

        </article>

        <nav class="blog-pagination d-flex flex-wrap justify-content-center d-grid gap-4" aria-label="Pagination">
            <div class="btn rounded-pill"> 
                <?php
                $ourCurrentPage = get_query_var('paged');

                $booksPosts = new WP_Query(array(
                    'category_name'     => 'uncategorized',
                    'posts_per_page'    => 4,
                    'paged'             => $ourCurrentPage
                ));

                if($booksPosts->have_posts()) :
                while($booksPosts->have_posts()) :
                    $booksPosts->the_post();
                ?> 

                <?php
                endwhile;

                    echo paginate_links(array(
                        'total' => $booksPosts->max_num_pages
                    ));

                endif;
                ?>
            </div>
        </nav>

    </div>





    <!--Start sidebar -->
    <div class="col-md-3">
      <div style="top: 2rem;">
        <div class="p-4">
        <?php if(is_active_sidebar('sidebar')) : ?>
          <?php dynamic_sidebar('sidebar'); ?>
        <?php endif; ?>
        </div>
      </div>
    </div>
    <!--End sidebar -->

  </div>
</main>

<?php get_footer(); ?>
