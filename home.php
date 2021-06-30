<?php
  global $post;
  $args_shop = array(
    'post_type' => 'shop', // 店舗取得
    'posts_per_page' => 4, // 表示する店舗数(4件)
  );

// クエリ発行
$shopp_posts = get_posts($args_shop);
?>
<?php get_header(); ?>
		<!-- Main content Start -->
        <div class="main-content">
            <!-- Banner Start -->
            <div class="rs-banner style3">
               <div class="container">
                   <div class="row align-items-center">
                       <div class="col-lg-6 pr-0">
                           <div class="banner-content">
                               <span class="sub-title">Re'volve official</span>
                               <h2 class="title">今までなかった。薬に頼らない最新の育毛技術・発毛メディカルサロン</h2>
                               <div class="description">
                                    <p>医師が推奨する発毛技術<br>自慢できる美しい髪で明るい生活を楽しめる</p>
                                </div>
                                <ul class="banner-btn">
                                    <li><a class="readon2 started" href="contact.html">お問い合わせ</a></li>
                                    <li>
                                        <div class="rs-videos">
                                            <div class="animate-border">
                                                <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=X3ife-OcREI">
                                                    <i class="fa fa-play"></i>
                                                </a>
                                            </div>
                                        </div> 
                                    </li>
                                </ul>
                           </div>
                       </div>
                       <div class="col-lg-6">
                           <div class="image-part">
                               <img src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/style3/banner-12.png" alt="images">
                           </div>
                       </div>
                   </div>
               </div>
               <div class="animations-shape">
                   <div class="pattern">
                       <img class="scale" src="<?php echo get_template_directory_uri(); ?>/assets/images/banner/style3/dot3.png" alt="images">
                   </div>
               </div> 
            </div>
            <!-- Banner End -->

            <!-- Choose Section Start -->
            <div class="rs-whychooseus style7 pt-100 md-pt-72">
                <div class="container">
                    <div class="sec-title2 text-center mb-60 md-mb-40">
                        <span class="sub-title">いま話題ヒト幹細胞を使用した業界で<br>最先端の再生発毛システム</span>
                        <h2 class="title title2">ヒト幹細胞とは？</h2>
                        <p>当サロンでの施術で欠かせないのが、細胞を活性化させる「幹細胞」です。
                            人間の幹細胞を培養した際に抽出された、細胞を再生させる物質がたっぷり入った液体「幹細胞培養液」を頭皮に塗布することにより、あなたの毛母細胞自体を活性化させ、育毛・発毛を促進します。
                            また当サロンでは希少な臍帯血幹細胞の培養液を使用しており、脂肪由来幹細胞培養液と比較した場合再生因子は264倍も高い濃度で含有しています。
                            再生医療を謳った育毛・発毛サロンは他にも存在しますが、この臍帯血幹細胞の培養液を使用したサロンはRevolve提携店のみとなります。</p>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="iconbox-area">
                                <div class="box-content">
                                    <div class="icon-area">
                                        <a href="#"><img class="dance_hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/whychooseus/style7/1.png" alt="images"></a>
                                    </div>
                                    <div class="text-area">
                                        <h3 class="title"><a href="#">従来の治療より安価で<br>根本からのアプローチが可能</a></h3>
                                        <!-- <p class="services-txt"> We always provide best SEO services for  your business and  complete solution focused of any business.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 md-mb-30">
                            <div class="iconbox-area">
                                <div class="box-content">
                                    <div class="icon-area">
                                        <a href="#"><img class="dance_hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/whychooseus/style7/2.png" alt="images"></a>
                                    </div>
                                    <div class="text-area">
                                        <h3 class="title"><a href="#">痛みや副作用を伴いにくいので<br>簡単に取り入れやすい</a></h3>
                                        <!-- <p class="services-txt"> We always provide best SEO services for  your business and  complete solution focused of any business.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="iconbox-area">
                                <div class="box-content">
                                    <div class="icon-area">
                                        <a href="#"><img class="dance_hover" src="<?php echo get_template_directory_uri(); ?>/assets/images/whychooseus/style7/3.png" alt="images"></a>
                                    </div>
                                    <div class="text-area">
                                        <h3 class="title"><a href="#">様々な頭皮の悩みに対応。<br>女性にも効果が出やすい！</a></h3>
                                        <!-- <p class="services-txt">We always provide best SEO services for your business and complete solution focused of any business.</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Choose Section End -->

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style7 pt-100 md-pt-70">
                <div class="container-fluid">
                    <div class="row y-middle">
                        <div class="col-lg-6 md-mb-50">
                            <div class="images-about">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-12.png" alt="images">
                            </div>
                        </div>
                        <div class="col-lg-6 modify-gap">
                            <div class="sec-title2 mb-60 md-mb-40">
                                <span class="sub-title">臍帯血幹細胞由来</span>
                                <h2 class="title pb-30">当サロンが研究を重ね発見した最新の育毛発毛促進技術が登場</h2>
                                <div class="description"><p class="right">当サロンではLED治療に加え、エレクトロポーションを使いヒト幹細胞培養液の最高峰である
                                    臍帯血由来の培養液を頭皮に浸透させる事で髪の毛を作る毛母細胞を再生させます。
                                    
                                    エレクトロポーションを使えば今まで注射する以外導入することができなかった
                                    高分子のものも導入可能になります。イオン導入では難しかった高分子成分やコラーゲンやヒアルロン酸や
                                    ヒト幹細胞培養液を浸透させることができます。(浸透力はイオン導入の20~60倍と言われております)
                                    また 痛みを感じることはありませんので「痛みに弱い」という方や「注射が苦手」な方でも安心です。</p></div>
                            </div>
                            <div class="cl-skill-bar style2">
                                <!-- Start Skill Bar -->
                                <span class="skillbar-title">医師が注目する技術でお客様満足度</span>
                                <div class="skillbar" data-percent="98">
                                    <p class="skillbar-bar orange-dark"></p>
                                    <span class="skill-bar-percent"></span> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-shape">
                    <div class="animate-img">
                        <img class="dance2" src="<?php echo get_template_directory_uri(); ?>/assets/images/about/seo-shape12.png" alt="images">
                    </div>
                </div>
            </div>
            <!-- About Section End -->
            
            <!-- Team Section Start -->
            <div class="rs-team style2 pt-100 pb-100 md-pt-50 md-pb-70"> 
                <div class="container">
                    <div class="sec-title2 text-center mb-60">
                        <span class="sub-title">お客様の声</span>
                        <h2 class="title title2 title3">実際に多くの方々が<br><span style="color:red;">驚きの発毛効果</span>を実感されています！</h2>
                    </div>
                    <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="true" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="true" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="true" data-ipad-device2="2" data-ipad-device-nav2="false" data-ipad-device-dots2="true" data-md-device="3" data-md-device-nav="false" data-md-device-dots="true" data-lg-device="3">
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/seo/1.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">お客様の声</a></h4>
                                <span class="designation">ボリュームが気になり、いつしか分け目をどう隠そうかと気になっていたところ、
                                    Re’volveさんのホームページを見つけて カウンセリングをお願いしました。
                                    
                                    最初はかなり不安だったのですが、カウンセリングで悩みの原因や、
                                    どうしたら髪の毛が生えてくるのかを丁寧に教えて頂いたおかげで 不安が和らぎ、
                                    自分がどう変わっていくのか今後が楽しみになりました。
                                    
                                    発毛施術を受けるにあたって私の場合は、
                                    １ヶ月半を過ぎたところで普段の抜け毛が減ったのを実感しました。
                                    
                                    それから半年後の今では、気になっていた分け目を隠さなくてもよくなるなんて、
                                    当時は想像もしていませんでした。
                                    
                                    おかげさまで、人の目を気にせず毎日を送ることが出来ています。
                                    
                                    最初は不安でしたが、先生の応援もあって続ける事が出来ました。
                                    ありがとうございました。</span>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="single-team.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/seo/2.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">お客様の声2</a></h4>
                                <span class="designation">今まではパーマをあてるとボリュームが出ていましたが、ここ最近はパーマを
                                    あてても満足いくようなボリュームがなく、髪の毛が痩せ細ってきたような気がします。
                                    
                                    歳なので仕方ないかなと思いつつも、若々しくいたいなという気持ちがあり、
                                    勇気を出してカウセリングを申し込みました。
                                    
                                    一つ一つ丁寧で分かりやすい説明でしたので、諦めずに挑戦してみようと思えました。
                                    
                                    施術を受けて3ヶ月経過した頃から、
                                    気になっていた分け目の辺りに少し毛が生えてきました。
                                    
                                    ぺたんこでパーマをあてないと嫌だったのに もう、あてなくても良くなりそうな気がして
                                    今では、毎朝鏡を見てセットをするのが楽しみになっています。</span>
                            </div>
                        </div>
                        <div class="team-item-wrap">
                            <div class="team-wrap">
                                <div class="image-inner">
                                    <a href="team-single.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/seo/3.jpg" alt=""></a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4 class="person-name"><a href="team-single.html">お客様の声３</a></h4>
                                <span class="designation">おでこの生え際が年々薄くなってきて、おでこが広くなってきているのを実感してから一度専門クリニックに行った結果、AGAと診断されました。それから色々なクリニックに行ったんですけど、サプリメントの営業をされるばっかで、正直そんなもんだと思ってました。薬を二年間くらい飲み続けてきたんですけど、薬を飲んでから体毛も濃くなってきて、脱毛クリニックに通うようになって余計な出費が掛かり、脱毛クリニックで何気なく相談したところ、その方の知り合いであるこちらを紹介してもらいました。発毛に関する知識は結構あったんですが、幹細胞による発毛は初めて知りました。デメリットも無く、理に叶っていると感じ通わせてもらいましたが、間違いなく効果があると実感してます。今では薬も止める事が出来たし、通院期間を終えた今でも毛が薄くなる事はないです。もっと早くこのお店に気づけば良かったって後悔してます。</span>
                            </div>
                        </div>
                    </div>
                </div> 
            </div>
            <!-- Team Section End -->

            <!-- Cta Section Start -->
            <div class="rs-cta">
                <div class="container">
                    <div class="content part bg26 pt-100 pb-100 md-pt-70 md-pb-70">
                       <div class="sec-title2 text-center">
                           <span class="sub-title">テレビで紹介されました！</span>
                           <h2 class="title title2 title4 pb-30 white-color"></h2>
                           <div class="btn-part">
                               <a class="readon2 started" href="contact.html">Get Started</a>
                           </div>
                       </div> 
                    </div>
                </div>
            </div>
            <!-- Cta Section End -->

            <!-- Solutions Section Start -->
            <div id="rs-about" class="rs-solutions pb-100 md-pb-80" style="margin-top: 140px;">
                <div class="container">
                    <div class="row y-middle">
                        <div class="col-lg-6">
                            <div class="sec-title mb-24">
                                <h2 class="title mb-20">当ページから限定の特別な料金で<br>
                                    初回カウンセリングをさせていただきます!</h2>
                                <div class="desc">
                                    薄毛、頭皮の状態に悩んでいる人の多くは、
                                    「自分に合った正しい育毛の知識」を知らないことがほとんどです。
                                    
                                    そのために間違った方法を取ってしまったり、効果のない商材を
                                    何度も買ってしまい損をすることが多く、「薄毛は改善できない」
                                    と思ってしまっている人も相当数います。
                                    
                                    しかし、正しい知識を知ればマイナスの固定観念がなくなります。
                                    少なくともあなたの心はスッとだいぶ楽になります。
                                    
                                    精神的にポジティブな思考になり、もっと人生を楽しむためにも、
                                    ぜひこの機会にカウンセリングを受けてみませんか？
                                    
                                    しっかり責任を持って、丁寧に向き合いますので
                                    少しの勇気と希望を持ってぜひご来店くださいませ！
                                    </div>
                            </div>
                            <ul class="listing-style regular">
                                <li>抜け毛、薄毛が気になる</li>
                                <li>ボリュームダウンの悩み、人の目線が気になる。</li>
                                <li>若年性脱毛症絵での悩み、円形脱毛症絵での悩み</li>
                            </ul>
                            <div class="btn-part mt-42">
                                <a class="readon modify" href="#">お問い合わせはこちら</a>
                            </div>
                        </div>
                        <div class="col-lg-6 md-order-first md-mb-30">
                            <div class="image-part">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/solutions/laptop.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Solutions Section End -->



            <!-- Project Section Start -->
            <div class="rs-project style3 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="sec-title2 text-center mb-50 md-mb-30">
                        <span class="sub-title">Re'volve</span>
                        <h2 class="title title2 title4">Re'volve 提携店一覧</h2>
                    </div>
                    <div class="row">
                    <?php foreach ($shopp_posts as $post) : setup_postdata($post); ?>
                        <div class="col-lg-6 col-md-6 mb-30">
                            <div class="project-item">
                               <div class="project-img">
                                   <!-- <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project/style3/1.jpg" alt=""> -->
                                   <?php the_post_thumbnail(); ?>
                               </div>
                               <div class="project-content">
                                    <h3 class="title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h3> 
                               </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    </div>
                    <div class="col-lg-12 text-center mt-80 md-mt-50">
                        <a class="readon2 started" href="portfolio-standard.html">View All Case Studies</a>
                    </div>
                </div>
            </div>
            <!-- Project Section End -->

            <!-- Contact Section Start -->
            <div class="rs-contact style5 gray-bg5">
                <div class="container">
                    <div class="contact-us pt-100 pb-100 md-pt-70 md-pb-70">
                        <div class="row margin-0">
                            <div class="col-lg-8 padding-0">
                                <div class="contact-widget">
                                    <div class="sec-title2 mb-50 md-mb-30">
                                        <span class="sub-title mb-10">Contact Us</span>
                                        <h2 class="title">お問い合わせ</h2>
                                    </div>
                                    <div id="form-messages"></div>
                                    <form id="contact-form" method="post" action="mailer.php">
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="name" name="name" placeholder="お名前" required="">
                                                </div> 
                                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="email" name="email" placeholder="メールアドレス" required="">
                                                </div>   
                                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="phone" name="phone" placeholder="お電話番号" required="">
                                                </div>   
                                                <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                                    <input class="from-control" type="text" id="Website" name="subject" placeholder="Your Website" required="">
                                                </div>
                                          
                                                <div class="col-lg-12 mb-30">
                                                    <textarea class="from-control" id="message" name="message" placeholder="お問い合わせ内容" required=""></textarea>
                                                </div>
                                            </div>
                                            <div class="btn-part">                                            
                                                <div class="form-group mb-0">
                                                    <input class="readon2 submit-btn new" type="submit" value="送信">
                                                </div>
                                            </div>  
                                        </fieldset>
                                    </form> 
                                </div>
                            </div>
                            <div class="col-lg-4 padding-0">
                               <div class="contact-box">
                                    <div class="sec-title2 mb-50 md-mb-30">
                                       <h2 class="title small"></h2>
                                    </div>
                                    <div class="address-box mb-25">
                                        <div class="box-icon">
                                            
                                        </div>
                                        <div class="address-text">
                                            <span class="label"></span>
                                            <p class="desc">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address-box mb-25">
                                        <div class="box-icon">
                                            
                                        </div>
                                        <div class="address-text">
                                            <span class="label"></span>
                                            <p class="desc">
                                                
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address-box mb-25">
                                        <div class="box-icon">
                                            
                                        </div>
                                        <div class="address-text">
                                            <span class="label"></span>
                                            <p class="desc">
                                                <a href="#"></a><br>
                                                <a href="#"></a>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="address-box">
                                        <div class="box-icon">
                                            
                                        </div>
                                        <div class="address-text">
                                            <span class="label"></span>
                                            <p class="desc">
                                                
                                            </p>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Section End -->
        </div> 
        <!-- Main content End -->
        <?php get_footer(); ?>