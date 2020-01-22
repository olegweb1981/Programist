<?php get_header(); ?>
<?php get_template_part('template-parts/gallery'); ?>
<div class="banner">
    <div class="container" style="position: relative;">
        <div class="bracket"></div>
        <div class="slogan">
            USE THIS SPACE FOR <strong>PROFOUND THOUGHTS</strong>.
        </br>
            OR AN ENORMOUS AD. WHATEVER.
        </div>
    </div>
</div>
<div class="container">
    <div class="main">
        <div class="page">

            <?php if ( have_posts() ) : ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <div class="content">
                        <h2> <a class="link" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"> <?php the_title(); ?> </a> </h2>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                        <h3>I MEAN ISN'T IT POSSIBLE?</h3>
                        <?php the_excerpt(); ?>
                        <a class="btn" href="<?php the_permalink(); ?>"><i class="fas fa-file"></i>CONTINUE READING</a>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <?php stronglytyped_pagination(); ?>
        </div>
        <!-- sidebar -->
        <?php get_sidebar(); ?>
    </div>
</div>
<?php get_footer(); ?>