<?php get_header(); ?>
<div class="page__content">
    <section class="sect_1">
        <div class="l-wrap">
            <h1>
                <img class="banner_txt" src="<?php echo get_template_directory_uri() ?>/release/image/banner_txt.png" alt="">
            </h1>
        </div>
    </section>
    <section class="sect_2">
        <div class="l-wrap">
            <div class="container">
                <a href="<?php echo get_template_directory_uri() ?>/2023recruitsession.pdf" type="button" class="sect_2_btn" target="_blank">
                    <p>就職説明会</p>
                    <img src="<?php echo get_template_directory_uri() ?>/release/image/arrow_right.svg" alt="">
                </a>
                <img class="btn_img_1" src="<?php echo get_template_directory_uri() ?>/release/image/btn_img_1.png" alt="">
                <img class="btn_img_2" src="<?php echo get_template_directory_uri() ?>/release/image/btn_img_2.png" alt="">
            </div>
        </div>
    </section>
    <section class="sect_3">
        <div class="wrapper">
            <img class="butterfly" src="<?php echo get_template_directory_uri() ?>/release/image/butterfly_1.svg" alt="">
            <img class="butterfly" src="<?php echo get_template_directory_uri() ?>/release/image/butterfly_2.svg" alt="">
            <div class="l-wrap">
                <h3 class="sect_title title">NEWS</h3>
                <div class="container">
                    <ul class="news_list">
                        <?php
                        $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                        $args = array(
                            'post_type' => 'post',
                            'post_status' => 'publish',
                            'paged' => $paged,
                            'posts_per_page' => 2
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
                        <?php endif; ?>
                    </ul>
                    <a href="<?php echo get_permalink(get_page_by_path('news')) ?>" class="read_more">
                        <p>一覧</p>
                        <img src="<?php echo get_template_directory_uri() ?>/release/image/arrow_right.svg" alt="">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_4" id="friends">
        <h3 class="sect_title">働く仲間達</h3>
        <div class="swiper-container mySwiper">
            <div class="swiper-wrapper">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;
                $args = array(
                    'post_type' => 'fellow',
                    'post_status' => 'publish',
                    'paged' => $paged,
                    'posts_per_page' => -1
                );
                $the_query = new WP_Query($args); ?>
                <?php if ($the_query->have_posts()) : ?>
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <a href="<?php echo the_permalink(); ?>" class="swiper-slide">
                            <div class="slider_img">
                                <?php echo the_post_thumbnail(); ?>
                            </div>
                            <p class="slider_txt"><?php echo get_the_title(); ?></p>
                        </a>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>

            <div class="l-wrap">
                <div class="pagination-wrapper">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_5" id="about">
        <div class="l-wrap">
            <h3 class="sect_title">社会福祉法人みつばち会<br class="sp">について</h3>
            <div class="container">
                <div class="col-1">
                    <img class="img" src="<?php echo get_template_directory_uri() ?>/release/image/sect_5_img.png" alt="">
                </div>
                <div class="col-2">
                    <p class="txt">社会福祉法人みつばち会は、50年以上も前に地域のお母さんたちの「子どもが生まれても働き続けたい』という願いを叶えるために、保護者の皆さん、地域の皆さんの暖かい協力とご支援により作られた小さな保育園が始まりです。子どもたちの「やりたい！」を大事に自然と、挑戦できる環境の中「で子育て」を応援しています。<br>そんな素敵な仕事を、自分らしさを大切に、一緒にしませんか？</p>
                    <a href="https://mitsu-bachi.net/" class="sect_5--btn" target="_blank">
                        <p>社会福祉法人みつばち会サイト</p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                            <path id="Icon_open-external-link" data-name="Icon open-external-link" d="M0,0V15H15V11.25H13.125v1.875H1.875V1.875H3.75V0ZM7.5,0l2.813,2.813L5.625,7.5,7.5,9.375l4.688-4.687L15,7.5V0Z" fill="#583C27" />
                        </svg>
                    </a>
                </div>
                <img class="sect_5--abs" src="<?php echo get_template_directory_uri() ?>/release/image/sect_5_img_2.png" alt="">
            </div>
        </div>
    </section>
    <section class="sect_6" id="nursery">
        <div class="wrapper">
            <h3 class="sect_title">みつばち会が<br class="sp">運営している保育園</h3>
            <div class="container">
                <div class="l-wrap">
                    <img class="absolute" src="<?php echo get_template_directory_uri() ?>/release/image/btn_img_1.png" alt="">
                    <p class="sect_6--sub">みつばち保育園</p>
                    <span class="sect_6--span">0-2歳</span>
                    <div class="flex row-reverse">
                        <div class="col-1">
                            <p>みつばち保育園は港区とは思えない自然豊かな環境で毎日戸外で遊ぶことができる保育園です。乳児期という人間にとって土台を作る時期に,土や泥に触れて、また食を通して五感を育みます。働くことは大変なこともあるけど、仲間と保育について考えたり、今日のことを振り返ったりその積み重ねで職員の信頼関係を築いていきます。その日おもしろかったこと、子どもの姿など共感しある仲間がいることを大切に感じます。子どもがワクワクドキドキ遊ぶのと同時に働く職員もいきいきと働ける環境を整えています。一緒に働く仲間が増えることを楽しみにしています。</p>
                        </div>
                        <div class="col-2">
                            <img src="<?php echo get_template_directory_uri() ?>/release/image/sect_6_img_1.png" alt="">
                        </div>
                    </div>
                    <div class="flex row-reverse mt-20">
                        <div class="col-1 mg-top-nega">
                            <p class="col-1__title">みつばち保育園の働く環境</p>
                            <img class="sp" src="<?php echo get_template_directory_uri() ?>/release/image/sect_6_img_2.png" alt="">
                            <p>みつばち会では毎年“法人研修”が開かれます。そこでは、法人職員が集まり「理念に込められた思い」をはじめ、「将来のビジョン」「世の中の流れからの私たちの役割」などを学び、意見交換するので、目標への道筋はそれぞれでも、みんなが同じ「理念への思い」を持っています。すると、仕事の中で新しいことをやってみたい気持ちをみんなでサポートできます。みんなの助け合いの中で挑戦出来るので、安心の中で成長できます。これが「やりがい」へとつながっていると思います。「やりがい」= 働きがいがある職場となっているのでは、と思います。</p>
                            <a href="https://hoiku.mitsu-bachi.net/" class="sect_6--btn" target="_blank">
                                <p>みつばち保育園サイト</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <path id="Icon_open-external-link" data-name="Icon open-external-link" d="M0,0V15H15V11.25H13.125v1.875H1.875V1.875H3.75V0ZM7.5,0l2.813,2.813L5.625,7.5,7.5,9.375l4.688-4.687L15,7.5V0Z" fill="#ffffff" />
                                </svg>
                            </a>
                        </div>
                        <div class="col-2">
                            <img class="pc" src="<?php echo get_template_directory_uri() ?>/release/image/sect_6_img_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sect_7">
        <div class="wrapper">
            <div class="container">
                <p class="sect_7--title">西池袋そらいろ保育園</p>
                <p class="sect_7--sub">0-5歳</p>
                <img class="absolute" src="<?php echo get_template_directory_uri() ?>/release/image/btn_img_2.png" alt="">
                <div class="l-wrap">
                    <div class="flex">
                        <div class="col-1">
                            <img src="<?php echo get_template_directory_uri() ?>/release/image/sect_7_img_1.png" alt="">
                        </div>
                        <div class="col-2">西池袋そらいろ保育園は池袋というターミナル駅から徒歩5分の場所に、木を豊富に使った落ち着きのある雰囲気の園舎と四季を感じられる広い園庭があります。<br>在園、卒園の保護者と職員が主となって楽しみながら園庭の環境作りをおこなっているのが特徴の園です。<br>子どもは大人の都合の良いような行動をしませんし、気持ちや成長などは目に見えにくいものです。一緒に過ごす保護者や職員、大人たちが子どもの姿や感じたことを声にして話していくことで、自分のすべきことが見えてきますし、子どもと過ごすことが楽しく面白くなってきます。<br>「子どもも大人も自分らしく、やってみたいが実現できる園」を一緒に作っていきましょう。
                        </div>
                    </div>
                    <div class="flex">
                        <div class="col-1">
                            <img class="pc" src="<?php echo get_template_directory_uri() ?>/release/image/sect_7_img_2.png" alt="">
                        </div>
                        <div class="col-2">
                            <p class="col-2__ttl">西池袋そらいろ保育園の<br class="sp">働く環境</p>
                            <img class="sp" src="<?php echo get_template_directory_uri() ?>/release/image/sect_7_img_2.png" alt="">
                            <p>働くことが楽しいと感じられることです。ここは、人と人が出会える場所でもあります。“保育の仕事が好き“だけでなく、仲間と過ごす時間が心地よい時であって欲しいと思います。だから、職員同士も思いや考えをうまく出し合えるような雰囲気作りを心がけています。また、心身ともにリフレッシュすることができるように休める環境も大事にしています。</p>
                            <a href="https://sorairo.mitsu-bachi.net/" class="sect_7--btn" target="_blank">
                                <p>西池袋そらいろ保育園サイト</p>
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15">
                                    <path id="Icon_open-external-link" data-name="Icon open-external-link" d="M0,0V15H15V11.25H13.125v1.875H1.875V1.875H3.75V0ZM7.5,0l2.813,2.813L5.625,7.5,7.5,9.375l4.688-4.687L15,7.5V0Z" fill="#ffffff" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>