<h3>Search Here</h3>
<?php get_search_form(); ?>
<div class="recent">
    <h3>Recently published</h3>
    <ul>
        <?php    
            $args =array(
                'type'              => 'posts',
                'posts_per_page'    => 10,
            );
            $lastblog = new WP_QUERY($args);
            if ($lastblog->have_posts()) {
            while ($lastblog->have_posts()) {
                $lastblog->the_post();
                $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
        ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php } }  wp_reset_postdata(); ?>
    </ul>
    <div class="recent">
        <h3>Category List</h3>
        <ul>
            <?php
                $categories = get_categories( array(
                'orderby' => 'name',
                'order'   => 'ASC',
                'posts_per_page'    => -1
                ) );?>
                
                <?php
                foreach( $categories as $category ) {
                $category_link = sprintf(
                '<a href="%1$s" alt="%2$s">%3$s</a>',
                esc_url( get_category_link( $category->term_id ) ),
                esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                esc_html( $category->name )
                );
                
                echo '<li>' . sprintf( esc_html__( ' %s', 'textdomain' ), $category_link ) . '</li> ';
                }
            ?>
        </ul>
    </div>
    <div class="tags mt-5">
        <h3>Tag List</h3>
        <ul>
        <?php
            $tags = get_tags('post_tag');
            if ( $tags ) :
                foreach ( $tags as $tag ) : ?>
                    <li><a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"><?php echo esc_html( $tag->name ); ?></a></li>
                <?php endforeach; ?>
            <?php endif; ?>
        </ul>
    </div>
</div>


