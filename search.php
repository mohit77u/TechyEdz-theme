<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>

<section class="blog"  id="posts">
    <div class="container">
        <?php printf( '<h1><strong>Search results for </strong>: ' .get_search_query().'</h1>' ); ?>
        <div class="row">
            <?php    
                    $args3 =array(
                    'type'              => 'posts',
                    'posts_per_page'    => -1,
                    's'                 => $_GET['s']
                );
                    include('listLoop.php');
            ?>
        </div>
    </div>
</section>

<?php get_footer();