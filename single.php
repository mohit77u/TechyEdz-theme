<?php get_header(); ?> 
<?php if (have_posts()) { while (have_posts()) { the_post(); $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); $title = get_post(get_post_thumbnail_id())->post_title; ?>

   

<section class="contact-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2><?php the_title(); ?></h2>
                <p>Blog  /  <?php the_title(); ?></p>
            </div>
        </div>
    </div>
</section>

<section class="blog-content">
    <div class="container">
        <div class="row">
            <div class="col-sm-9">
                <?php the_post_thumbnail(); ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?> 
                <div class="view">
                    <?php comments_template(); ?> 
                </div>
                <div class="share">
                    <h3>Share the Blog</h3>
                    <?php echo do_shortcode( '[Sassy_Social_Share]' ); ?>
                </div>
            </div>
            <div class="col-sm-3">               
                <?php if ( is_active_sidebar( 'custom-side-bar' ) ) : ?>
                    <?php dynamic_sidebar( 'custom-side-bar' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <h2>You also may like</h2>
        <div class="row">
            <div class="col-sm-9">
                    <div class="row">
                        <?php    
                            $args3 =array(
                                'type'              => 'posts',
                                'posts_per_page'    => 3,
                            );
                            include('blogListLoop.php');
                        ?>
                    </div>
            </div>
            <div class="col-sm-3">
                <h4>Blog Posts</h4>
                <p>Check out our blog posts for free insights and updates on your field.</p>
                <a href="/blog"><button class="showbtn">Show me</button></a>
            </div>
        </div>
    </div>
</section>

<?php } }  wp_reset_postdata(); ?>
<?php get_footer(); ?> 


