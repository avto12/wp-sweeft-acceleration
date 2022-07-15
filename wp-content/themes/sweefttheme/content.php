

 
   


<!-- post image  -->
<div>
   <?php if(is_single()) : ?>
      <div class="text-center">
         <?php if(has_post_thumbnail()) : ?>

         <div class="thumbnail_post_single">
            <?php if(is_single()) : ?>

                  <?php the_post_thumbnail(); ?>

            <?php else : ?>
               
               <a href="<?php the_permalink(); ?>"> 
                  <?php the_post_thumbnail(); ?>
               </a>

            <?php endif; ?>

         </div>
         <?php endif; ?>

      </div>

   <?php else : ?>

      <div class="text-center">
         <?php if(has_post_thumbnail()) : ?>
         <div class="thumbnail_post">
            <a href="<?php the_permalink(); ?>"> 
               <?php the_post_thumbnail(); ?>
            </a>
         </div>
         <?php endif; ?>
      </div>

   <?php endif; ?>
</div>

<!--End post image  -->


<!-- start post title  -->
<div>
   <h4 class="blog-post-title mb-1 ">
         <?php if(is_single()) : ?>

            <?php the_title(); ?> 

         <?php else : ?>

            <a href="<?php the_permalink(); ?>"> 
               <?php the_title(); ?> 
            </a>

         <?php endif; ?>
      </h4>
</div>
   <!-- end post title  -->

   <!-- start post date and author -->
<div>
   <p class="blog-post-meta">
      <?php the_time('F j, Y g:i a'); ?>
      by 
      <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
         <?php the_author(); ?>
      </a>
   </p>
</div>
   <!-- end post date and author -->


   
<!-- post content -->
<div>  
   <?php if(is_single()) : ?>

      <div> 
         <p><?php the_content(); ?> </p>
      </div>

   <?php else : ?>
         
      <div> 
         <p><?php the_excerpt(); ?> </p>
      </div>
         

   <?php endif; ?>
</div>
<!--End post content -->


<!-- Start comments -->
<div class="row"> 
   <div class="col-md-8"> 

      <?php if(is_single()) : ?>

         <?php comments_template(); ?>

      <?php endif; ?>

   </div>
</div>
 <!-- end Start comments -->
