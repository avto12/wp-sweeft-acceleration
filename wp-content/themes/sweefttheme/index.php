<?php get_header(); ?>

<div class="row g-5">
    <div class="col-md-9">
        <div class="row row-cols-1 row-cols-md-3 g-3"> 
        
        <?php
        $ourCurrentPage = get_query_var('paged');

        $Posts = new WP_Query(array(

            'posts_per_page'    => 3,
            'paged'             => $ourCurrentPage
        
        ));

        if($Posts->have_posts()) :
        while($Posts->have_posts()) :
            $Posts->the_post();
        ?> 
        <div class="col-xl-4 col-md-6">
            <div class="card h-100">
                <div class="thumbnail_post">
                    <a href="<?php the_permalink(); ?>"> 
                        <?php the_post_thumbnail(); ?>
                    </a>
                </div>
                <div class="card-body">
                    <h5 class="card-title">
                    <a href="<?php the_permalink(); ?>"> 
                        <?php the_title(); ?> 
                        </a>
                    </h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">      
                        <?php the_time('F j, Y g:i a'); ?>
                        by 
                        <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
                            <?php the_author(); ?>
                        </a>
                    </small>
                </div>
                <div class="d-flex justify-content-end "> 
                    <a class="btn " href="<?php the_permalink(); ?>">Read more</a>
                </div>
            </div>
        </div>
        <?php
        
        endwhile;
    
        endif;
        ?>
        
        </div>
        <nav class="blog-pagination d-flex flex-wrap justify-content-center d-grid gap-4 my-5" aria-label="Pagination">
        <div class="btn rounded-pill"> 
            <?php 
                echo paginate_links(array(
                    'total' => $Posts->max_num_pages
                )); 
            ?>
        </div>
    </nav>
    </div>
 
    <!-- pagination  -->
 
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
