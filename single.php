<?php get_header(); ?>
<div class="page-single">
    <div class="wrapper">
        <img src="<?php echo get_template_directory_uri() ?>/release/image/butterfly_1.svg" alt="" class="butterfly" />
        <img src="<?php echo get_template_directory_uri() ?>/release/image/butterfly_2.svg" alt="" class="butterfly" />
        <div class="title-container">
            <h2 class="sect_title title">NEWS</h2>
        </div>
        <div class="containers">
            <?php while (have_posts()) : the_post(); ?>
                <div class="sec1">
                    <h3><?php echo the_title(); ?></h3>
                </div>
                <div class="sec2">
                    <li class="news_list--item">
                        <div class="date-category">
                            <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                            <?php
                            $category = get_the_category();
                            foreach ($category as $cat) : ?>
                                <span class="category"><?php echo $cat->name; ?></span>
                            <?php endforeach ?>
                        </div>
                        <div class="description">
                            <?php echo the_content(); ?>
                        </div>
                        <div class="button-container">
                            <a class="back-button" href="<?php echo home_url(); ?>">一覧にもどる</a>
                        </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>