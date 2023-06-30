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
            if (have_posts()) :
                while (have_posts()) :
                    the_post();
                    $main_image = get_field('main_image');
                    $category = get_the_category();
                    $post_date = get_the_date('j F Y');
                    ?>
                    <img src="<?php echo $main_image; ?>" class="rounded mx-auto d-block" style="max-width: 45%" alt="Зображення новини">
                    <h5 class="mt-4"><?php the_title(); ?></h5>
                    <p class="text-muted"><?php echo $category[0]->name; ?></p>
                    <p class="text-muted">Дата публікації: <?php echo $post_date; ?></p>
                    <p><?php the_content(); ?></p>
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