<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Страйкбольний клуб</title>
    <?php wp_head();?>
</head>
<body>
<?php get_header();?>
<main>
    <div class="container mt-4">
        <div class="row">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1
            );

            $query = new WP_Query($args);

            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post();
                    $main_image = get_field('main_image');
                    $excerpt = get_the_excerpt();
                    $excerpt_words = wp_trim_words($excerpt, 15);
                    $category = get_the_category();
                    $post_date = get_the_date('j F Y');
                    ?>
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="<?php echo $main_image; ?>" class="card-img-top" alt="Зображення новини">
                            <div class="card-body">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <p class="card-text"><?php echo $excerpt_words; ?></p>
                                <p class="card-text"><small class="text-muted"><?php echo $category[0]->name; ?></small></p>
                                <p class="card-text"><small class="text-muted">Дата публікації: <?php echo $post_date; ?></small></p>
                                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Детальніше</a>
                            </div>
                        </div>
                    </div>
                <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</main>
<?php get_footer();?>
</body>
</html>