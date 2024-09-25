

    <?php get_header(); ?>

    <!-- <div class="bg"> -->

        <article class="way">
        <div class="contents">
            <img src="<?php echo get_template_directory_uri(); ?>/images/fv.jpg" alt="">

        <h1>~Good Cycling~</h1>

        <div class="concept-container">
        <p class="concept">
        <span>忙しい都市生活をもっと自由に。</span><br>
        新しい都市型シェアサイクルで、<br>
        好きな時に、好きな場所へ。<br>
        交通渋滞も気にせず、スマートに移動。<br>
        手軽に借りて、スムーズに返却。<br>
        あなたの街をもっと身近に感じられる、<br>
        新しい移動手段です。
        </p>
        </div>

        <section id="news">
        <h2>NEWS</h2>
        <dl>
        <!-- 投稿記事の取得 -->
        <?php
        // 条件の設定
        $args = array(
          // 表示する記事の数の指定
        'posts_per_page' => 3,
          // 公開された投稿
        'post_status' => 'publish',
        );
        $the_query = new WP_Query($args);
        // ループ処理
        if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();
            // カテゴリ情報取得
            $cat = get_the_category();
            $cat = $cat[0];
            $cat_name = $cat->cat_name;
        ?>
            <!--  aタグで投稿記事へのリンクを作成する -->
            <dt>
                <a href="<?php the_permalink(); ?>" class="top-post-link">
                <div class="top-post-wrap">
                    <!-- 日付を出力する -->
                    <span class="top-post-time"><?php the_time('Y/m/d'); ?></span>
                    <!-- カテゴリ―名を出力する -->
                    <span class="date-tag"><?php echo $cat_name; ?></span>
                </div>
                    <!--  投稿記事のタイトルを表示する -->
                    <p class="top-post-title"><?php the_title(); ?></p>
                </a>
            </dt>
            <?php endwhile; ?>
        <!-- 記事が無い場合 -->
        <?php else : ?>
            <dd></dd>
        <?php endif; ?>
        </dl>
        </section>

        <section id="htu" class="about">
            <h2>ABOUT</h2>
            <p>
            GoodCyclingの魅力は、<br>
            便利さと手軽さにあります。<br>
            低価格で利用でき、<br>
            時間ごとの課金制で<br>
            1分ごとの料金で決済されますので、<br>
            無駄なく利用できます。<br>
            さらに、主要駅の徒歩1分圏内に<br>
            サイクルステーションが設置されており、<br>
            通勤やちょっとした移動に最適です。<br>
            観光や日常のちょっとした移動まで、<br>
            幅広いシーンで活用できるこのサービスは、<br>
            都市での移動をよりスマートで快適にします。
            </p>
        </section>

        

        <section>
                <h3 class="how">ご利用方法</h3>

                <ul>
                    <li>
                        <p data-number="01">アカウント登録</p>
                        <p>まずはアプリをダウンロードし、メールアドレスや電話番号でアカウントを登録します。</p>
                    </li>
                    <li>
                        <p data-number="02">サイクルステーションを検索</p>
                        <p>アプリ内の地図機能を使って、最寄りのサイクルステーションを探し、利用可能な自転車を確認します。</p>
                    </li>
                    <li>
                        <p data-number="03">QRコードで自転車を解錠</p>
                        <p>指定された自転車のQRコードをアプリでスキャンし、ロックを解除して出発します。</p>
                    </li>
                    <li>
                        <p data-number="04">ステーションで自転車を返却</p>
                        <p>目的地の返却ステーションに到着したら、自転車を停めてロックを施し、アプリで返却手続きを完了します。</p>
                    </li>
                </ul>

                <h3>対応地域</h3>
                <h4>東京23区内・大阪市内をカバー</h4>
                <p>各区内の主要駅や観光名所の近くにサイクルステーションを設置しています。</p>
                <img src="<?php echo get_template_directory_uri(); ?>/images/area.jpg" alt="対応エリア">
                <p class="area">今後もステーション数、エリア拡大予定！<br>
                アプリからステーション設置候補地の提案も可能！
                </p>
            </section>

            <?php echo do_shortcode('[cta]'); ?>
        
        <section id="uvs">
        <h2>UserVoice</h2>

        <?php
         //取得したい投稿記事などの条件を引数として渡す
         $args = array(
           // 投稿タイプ
           'post_type'  => 'uservoice',
           // 1ページに表示する投稿数
           'posts_per_page' => 3,
         );
         // データの取得
         $posts = get_posts($args);
         ?>
 
    <div class="slider">
    <!-- ループ処理 -->
    <?php foreach ($posts as $post) : ?>
    <?php setup_postdata($post); ?>

        <div class="slide-item">
        <p href="<?php the_permalink(); ?>">
            <h3 class="post_title">
                <?php the_title(); ?>
            </h3>
            <div class="post_field">
            </div>
            <div class="post_image">
                <?php the_post_thumbnail();?>
            </div>

            <div class="post_text">
                <p>
                <?php echo wp_trim_words(get_the_content(), 200, '...'); ?>
                </p>
            </div>
            </p>
            <!-- <div class="post_footer">
                <a href="<?php the_permalink(); ?>">詳細を見る</a>
            </div> -->

        </div>
        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>
        </div>
        </section>



        <?php echo do_shortcode('[cta]'); ?>


            <div id="qa">
            <h2>Q&A</h2>
            <?php echo do_shortcode('[sp_easyaccordion id="57"]'); ?>
            </div>

            <section class="heir">
                <div class="r_heir horizon">
                    <h2>ご利用上の注意</h2>
            <?php echo do_shortcode('[sp_easyaccordion id="66"]'); ?>
            </div>
            </section>
        <?php echo do_shortcode('[cta]'); ?>

            </div>


            <div class="road"></div>
        </article>

    <?php get_footer(); ?>


