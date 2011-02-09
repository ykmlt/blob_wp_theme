<?php get_header() ?>

<div id="content" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <div id="post-<?php the_ID() ?>" <?php post_class() ?>>
            <div class="date"><?php the_time('j F Y') ?></div>
            <h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php echo esc_attr__('Permalink to') ?> <?php the_title_attribute() ?>" rel="bookmark"><?php the_title() ?></a></h2>
            <?php echo the_content('En savoir plus...') ?>
        </div>
    <?php endwhile ?>

    <?php if (!have_posts()) : ?>
        Aucun post ne correspond à vos critères
    <?php endif ?>
</div>

<?php get_footer() ?>