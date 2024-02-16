<?php get_header(); ?>
<div class="page_fellow">
    <div class="wrapper">
        <h3 class="sect_title title">働く仲間達</h3>
        <div class="page_fellow--container">
            <div class="page_fellow__wrapper">
                <div class="youtube">
                    <?php echo SCF::get('youtube_link'); ?>
                </div>
                <div class="content">
                    <h4 class="content--title"><?php echo the_title(); ?></h4>
                    <div class="content--custom-field">
                        <?php $details = SCF::get("Fellow FAQ"); ?>
                        <?php if ($details) : ?>
                            <?php foreach ($details as $detail) : ?>
                                <div class="field-wrapper">
                                    <div class="q-logo">
                                        <img src="<?php echo get_template_directory_uri(); ?>/release/image/page_faq/qq.png" alt="">
                                    </div>
                                    <div class="text">
                                        <p class="question"><?php echo $detail['question']; ?></p>
                                    </div>
                                    <div class="answer--empy">
                                        <div class="empty"></div>
                                        <p class="answer"><?php echo $detail['answer']; ?></p>
                                    </div>
                                </div>

                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="page_fellow--images">
            <?php
            $current_post_id = get_the_ID();
            $args = array(
                'post_type' => 'fellow',
                'post_status' => 'publish',
                'paged' => $paged,
                'posts_per_page' => 4,
                'post__not_in'   => array($current_post_id),
            );
            $the_query = new WP_Query($args); ?>
            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php echo the_permalink(); ?>" class="link">
                        <?php echo the_post_thumbnail(); ?>
                        <p class="slider_txt"><?php echo get_the_title(); ?></p>
                    </a>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>