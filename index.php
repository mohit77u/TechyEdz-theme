<?php get_header(); ?>
<section class="contact-banner">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h2>Blog</h2>
                <p>Home  /  Blog</p>
            </div>
        </div>
    </div>
</section>

<section class="blog">
    <div class="container">
        <h2>What are you interested in learning?</h2>
        <div class="row">
            <?php    
                    $args3 =array(
                        'type'              => 'posts',
                        'posts_per_page'    => -1,
                    );
                    include('blogListLoop.php');
            ?>
        </div>
    </div>
</section>


<?php get_footer(); ?>  