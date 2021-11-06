
<?php $lastblog = new WP_QUERY($args3); if ($lastblog->have_posts()) { while ($lastblog->have_posts()) { $lastblog->the_post(); $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); $alt = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true); $title = get_post(get_post_thumbnail_id())->post_title; ?>



   
<section class="related-trending">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="relatedbtn">
                   <button class="rbtn"><a  href="<?php the_permalink(); ?>"><?php the_title(); ?></a></button>
                </div>
            </div>
        </div>
    </div>
</section>



<?php   }   }   wp_reset_postdata();    ?>