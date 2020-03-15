
<{include file="./header.tpl"}>
    <!-- Header Carousel -->

    <header>
        <div class="laya-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <img src="<{$baninfo['ban_img']}>" class="img-hover img-responsive" alt="">
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- LayaFlash Section -->
    <section>
        <div class="layaflash">
            <div class="container flash-bg" style="background:url('./static/home/images/flash-bg.jpg') no-repeat right; background-position: 100% 100%; padding: 60px 0;">
                <div class="row">
                    <div class="flash col-md-12 fadeInDown animated">
                        <h1 class="page-header">LayaFlash 引擎</h1>

                        <p class="layaflash-title">让Flash技术变成开发HTML5产品的利器</p>
                    </div>
                </div>
                <div class="col-md-8 col-sm-8 col-xs-12 wow fadeInDown animated animated" data-wow-duration="1000ms" data-wow-delay="400ms" style="visibility: visible; animation-duration: 1000ms; animation-delay: 400ms; animation-name: fadeInDown;">
                    <div class="row flash-content">

                        <{foreach $proinfoa as $v}>
                        <div class="col-md-6 flash-item">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-3 flash-icon flash-icon-001" style="background:url('<{$v['product_img']}>') center no-repeat;; background-color: #0078D7;">
                                </div>
                                <div class="col-md-9 col-sm-9 col-xs-9 flash-desc">
                                    <h3><{$v['product_title']}></h3>

                                    <p>
                                        <{$v['product_desc']}>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <{/foreach}>
                        
                       
                       
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!--LayaAir-->
    <section>
        <div class="layaair">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="air-icon wow fadeInUp animated animated" data-wow-duraton="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInUp;">
                            <img src="./static/home/images/air-bar.jpg" class="img-responsive  img-hover">
                        </div>
                    </div>
                    <div class="col-md-7 col-md-offset-1 col-sm-8 col-xs-12">
                        <div class="air-text">
                            <h1 class="air-title wow animated fadeInLeft delay-1 animated" style="visibility: visible; animation-name: fadeInLeft;">Layabox 优势</h1>
                        </div>
                        <div class="caption layabox-ad">
                            <ul>
                                <{foreach $proinfob as $v}>
                                <li class="advantage wow animated fadeInDown animated" data-wow-duraton="1000ms" data-wow-delay="600ms" style="visibility: visible; animation-delay: 600ms; animation-name: fadeInDown;">
                                    <div class="ad01 ad" style="background:url(<{$v['product_img']}>) center no-repeat;background-color: #8fc31f;"></div>
                                    <div class="ad-desc"><{$v['product_title']}></div>
                                </li>
                               <{/foreach}>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Laya-product Section -->
    <section class="product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="page-header tool-header wow fadeInUp animated delay-1 animated" style="visibility: visible; animation-name: fadeInUp;">Layabox产品家族</h1>
                </div>

                <{foreach $proinfoc as $v}>
                <div class="col-md-6 col-sm-6 col-lg-6">
                    <div class="laya-product wow fadeInUp animated delay-1 animated" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="pro-icon  col-md-4 col-sm-4 col-xs-12" style=" background: url(<{$v['product_img']}>) center no-repeat;"></div>
                        <div class="pro-desc col-md-8 col-sm-8 col-xs-12">
                            <h4><{$v['product_title']}></h4>

                            <p><{$v['product_desc']}></p>
                        </div>

                    </div>
                </div>
                <{/foreach}>

                

            </div>
        </div>
    </section>
    <!-- Laya-product Section end -->

    <!-- Layabox Game Section -->
    <section class="game">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-sm-9  col-xs-12">
                    <h1 class="page-header game-header wow fadeInLeft animated delay-1 animated" style="visibility: visible; animation-name: fadeInLeft;">采用Layabox引擎的精彩游戏</h1>
                </div>
                <div class="col-md-2 col-sm-3 hidden-xs game-more">
                    <a href="http://layabox.com/index.php?m=content&c=index&a=lists&catid=23" target="_blank" class="pull-right">更多</a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-sm-5">
                    <div class="laya-video wow fadeInDown animated delay-1 animated" style="visibility: visible; animation-name: fadeInDown;">
                        <video id="laya_yf_html5_api" class="video-js" controls preload="auto" height="264" poster="./static/home/images/shipin.jpg" data-setup='{}'>
                            <source src="./static/home/video/layabox_product.mp4" type="video/mp4">
                            <p class="vjs-no-js">
                                To view this video please enable JavaScript, and consider upgrading to a web browser
                                that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
                            </p>
                        </video>
                    </div>

                </div>
                <div class="col-md-7 col-sm-7">
                    <div class="row laya-game wow fadeInDown animated delay-1 animated" style="visibility: visible; animation-name: fadeInDown;">


                        <{foreach $gameinfo as $v}>
                        <div class="col-md-2 col-sm-3 col-xs-4">
                            <div class="game-content">
                                <img src='<{$v['game_img']}>' alt="<{$v['game_name']}>" class="img-responsive img-hover">

                                <p><{$v['game_name']}></p>
                            </div>
                        </div>
                        <{/foreach}>
                        

                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- partners Section  -->
    <section class="partners">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="page-header wow animated fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">合作渠道<span class="small">(排序不分先后)</span> </h2>
                </div>
                <div class="col-md-12">
                    <div class="row partners-content wow animated fadeInDown animated" style="visibility: visible; animation-name: fadeInDown;">


                        <{foreach $collinfo as $v}>
                        <div class="col-md-2 col-sm-3 col-xs-4 partners-item">
                            <div class="partners-list thumbnail">
                                <img src="<{$v['coo_img']}>" alt="QQ空间" class="img-hover img-responsive">
                            </div>
                        </div>
                        <{/foreach}>

                      


                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- /.container -->
    <!-- Footer -->
    <{include file="./footer.tpl"}>