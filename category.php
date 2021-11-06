<?php get_header(); ?>
<section class="blog" id="posts">
    <div class="container">
        <?php printf( '
            <h1>Blogs of Category : '.single_cat_title( '', false ).'</h1>
        ' ); ?>
        <div class="row">
            <?php    
                $args3 =array(
                    'type'              => 'posts',
                    'posts_per_page'    => -1,
                    'category_name'     =>  get_cat_name(get_query_var('cat'), false),
                );
                include('blogListLoop.php');
            ?>
        </div>
    </div>
</section>




<?php get_footer(); ?> 