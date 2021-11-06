<?php get_header(); ?>

<section class="blog" id="posts">
    <div class="container">
            <?php the_archive_title( '<h1>Blogs of ', '</h1>' ); ?>
        <div class="row">
            <?php    
                $args3 =array(
                    'type'              => 'posts',
                    'posts_per_page'    => -1,
                    'tag'               => $tag->slug
                );
                include('blogListLoop.php');
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?> 