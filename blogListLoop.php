
<?php $lastblog = new WP_QUERY($args3); if ($lastblog->have_posts()) { while ($lastblog->have_posts()) { $lastblog->the_post(); $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); $title = get_post(get_post_thumbnail_id())->post_title; ?>


<div class="col-sm-4">
    <a href="<?php the_permalink(); ?>">
    <div class="card">
            <div class="blog-img">
                <div class=""><?php the_post_thumbnail(); ?></div>
            </div>
        <div class="card-body">
            <h5> <a class="card-title" href="<?php the_permalink(); ?>"><?php the_title(); ?> </a></h5>
            <p> <a class="card-text" href="<?php the_permalink(); ?>"> <?php the_excerpt(); ?></a></p>
        </div>
    </div>
    </a>
</div>
            


<?php   }   }   wp_reset_postdata();    ?>