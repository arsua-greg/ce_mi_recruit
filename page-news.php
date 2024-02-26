<?php get_header(); ?>
<div class="page__content">
    <div class="page-news">
        <div class="wrapper">
            <img src="<?php echo get_template_directory_uri() ?>/release/image/butterfly_1.svg" alt="" class="butterfly" />
            <img src="<?php echo get_template_directory_uri() ?>/release/image/butterfly_2.svg" alt="" class="butterfly" />
            <div class="title-container">
                <h2 class="sect_title title">NEWS</h2>
            </div>
            <div class="container">
                <ul class="news_list">
                    <?php
                    $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'paged' => $paged,
                        'posts_per_page' => 10
                    );

                    $the_query = new WP_Query($args); ?>
                    <?php if ($the_query->have_posts()) : ?>

                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                            <a href="<?php echo the_permalink(); ?>">
                                <li class="news_list--item">
                                    <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                                    <?php
                                    $category = get_the_category();
                                    foreach ($category as $cat) : ?>
                                        <span class="category"><?php echo $cat->name; ?></span>
                                    <?php endforeach ?>
                                    <p class="title"><?php echo get_the_title(); ?></p>
                                </li>
                            </a>
                        <?php endwhile; ?>

                </ul>
                <div class="pagination">
                    <?php echo wp_pagenavi(array("query" => $the_query)); ?>
                </div>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>