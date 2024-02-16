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
                                            <img src="<?php echo get_template_directory_uri(); ?>/release/image/page_faq/qq.svg" alt="">
                                        </div>
                                        <div class="text">
                                            <p class="question"><?php echo $detail['question']; ?></p>
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

        </div>
    </div>
</div>
<?php get_footer(); ?>