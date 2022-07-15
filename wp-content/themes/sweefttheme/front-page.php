<?php get_header();?>

 
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


 

<section class="container-fluid"> 
 
    <h1 class="display-5"><?php echo get_cat_name( $category_id = '1' );?></h1>
    <div class="row row-cols-1 row-cols-md-3 g-4"> 
    
    <?php

        $newbooksPosts = new WP_Query(array(
            'posts_per_page'    => 4,
        
        ));

        if($newbooksPosts->have_posts()) :
        while($newbooksPosts->have_posts()) :
            $newbooksPosts->the_post();
    ?> 
    
        <div class="col-xl-3 col-md-6">
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
</section>
</main>

<?php get_footer(); ?>