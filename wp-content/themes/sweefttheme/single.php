<?php get_header(); ?>

<div class="row g-5">
    <div class="col-md-9">

        <article class="blog-post">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>

                <?php get_template_part('content'); ?>

            <?php endwhile; ?>
            <?php else : ?>
                <p><?php __('არ არის პოსტი'); ?></p>
            <?php endif; ?>

        </article>

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
