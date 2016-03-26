<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>










    <link rel="shortcut icon" href="/images/favicon.ico">
    <!-- CSS STYLES -->
    <link media="all" type="text/css" rel="stylesheet" href="https://yastatic.net/bootstrap/3.3.4/css/bootstrap.min.css">

    <link media="all" type="text/css" rel="stylesheet" href="/css/prettyPhoto.css">

    <link media="all" type="text/css" rel="stylesheet" href="/css/flexslider.css">

    <link media="all" type="text/css" rel="stylesheet" href="/css/animate.css">

    <link media="all" type="text/css" rel="stylesheet" href="/css/style.css">


    <!-- FONTS -->
    <link media="all" type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,700&amp;subset=latin,cyrillic">

    <link media="all" type="text/css" rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic">


    <!-- SCRIPTS -->
    <!--[if IE]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if IE]>
    <html class="ie" lang="ru">
    <![endif]-->



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>

    <script src="https://yastatic.net/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="/js/jquery.prettyPhoto.js"></script>

    <script src="/js/jquery.isotope.min.js"></script>

    <script src="/js/sorting.js"></script>

    <script src="/js/jquery-ui.min.js"></script>

    <script src="/js/jquery.twitter.js"></script>

    <script src="/js/superfish.js"></script>

    <script src="/js/jquery.flexslider-min.js"></script>

    <script src="/js/animate.js"></script>

    <script src="/js/myscript.js"></script>











    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>





<!-- PRELOADER -->
<!--
<img id="preloader" src="/img/loading.gif" alt=""/>
-->
<!-- //PRELOADER --><!-- PAGE -->
<div id="page"><!-- CONTAINER -->
    <div class="container page_block"><!-- WRAPPER -->


        <div style="float: right;margin-right: 220px" class="soc">
            <div style="position: fixed;">
                <ul class="top_social">
                    <li><a class="soc1" href="javascript:void(0);" alt=""></a></li>
                    <!--  <li><a class="soc2" href="javascript:void(0);" alt=""></a></li>-->
                    <li><a class="soc3" href="https://twitter.com/astralogos" title="Twitter" target="_blank"></a></li>
                    <li><a class="soc4" href="javascript:void(0);" alt=""></a></li>
                    <li><a class="soc5" href="javascript:void(0);" alt=""></a></li>
                    <li><a class="soc6" href="javascript:void(0);" alt=""></a></li>
                </ul>
            </div>
        </div>


        <div class="wrapper">
            <!-- HEADER -->
            <header>
                <!-- LOGO -->
                <div class="logo"><a href="/astro/" alt="">Astrologo</a></div>
                <!-- LOGO -->
                <!-- MENU -->
                <div class="menu_block clearfix">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse"
                                data-target=".navbar-collapse"><span class="glyphicon glyphicon-align-justify"></span>
                        </button>
                    </div>

                    <div class="navbar-collapse collapse">
                        <ul class="nav navbar-nav">
                            <li class="first  c1"><a href="/" title="">
                                    <span class="glyphicon glyphicon-home" aria-hidden="true"
                                          title="Домой"></span></a></li>
                            <li class="sub-menu c2"><a href="javascript:void(0);"
                                                       title="">Гороскопы</a><!-- Mega Menu -->
                                <ul class="mega_menu left">
                                    <li class="col" style="width: 55%"><h5>Профессиональные</h5>
                                        <ol>
                                            <li><a href="/"><span>-</span>Персональный гороскоп</a></li>
                                            <li><a href="/"><span>-</span>Гороскоп совместимости</a></li>
                                            <li><a href="/"><span>-</span>Гороскоп выбора профессии</a>
                                            </li>
                                            <li><a href="/"><span>-</span>Астрология для бизнеса</a></li>
                                            <li><a href="/"><span>-</span>Гороскоп способностей
                                                    ребенка</a></li>

                                            <li><a href="/"><span>-</span>Кармический гороскоп</a></li>
                                            <li><a href="/"><span>-</span>Гороскоп на месяц</a></li>
                                            <li><a href="/"><span>-</span>Персональный астропрогноз
                                                    <nobr>на <b>2016</b> год</nobr>
                                                </a></li>
                                        </ol>
                                    </li>

                                    <li class="col" style="width: 45%"><h5>Общие</h5>
                                        <ol>
                                            <li><a href="/"><span>-</span>Гороскоп на каждый день</a></li>
                                            <li><a href="/"><span>-</span>Черты характера</a></li>
                                            <li><a href="/"><span>-</span>Натальная карта</a></li>
                                            <li><a href="/"><span>-</span>Влияние планет</a></li>
                                            <li><a href="/"><span>-</span>Влияние луны</a></li>
                                            <li><a href="/"><span>-</span>Ваша визитка</a></li>

                                        </ol>
                                    </li>

                                </ul>
                                <!-- //Mega Menu --></li>
                            <li class="sub-menu c3"><a href="javascript:void(0);"
                                                       title="">Лунный календарь</a>
                                <ul>
                                    <li><a href="/moon/day"><span>-</span>Лунные дни</a></li>
                                    <li><a href="/moon/"><span>-</span>Движение луны</a></li>
                                    <li><a href="/moon/calendar/"><span>-</span>Лунный календарь
                                            <nobr>на 2016 год</nobr>
                                        </a></li>

                                </ul>
                            </li>
                            <li class="sub-menu  c4"><a href="javascript:void(0);"
                                                        title="">Статьи</a>
                                <ul>
                                    <li class=" c4"><a
                                            href="/articles/category1/"><span>-</span>Натальная астрология</a></li>
                                    <li class=" c4"><a
                                            href="/articles/category2/"><span>-</span>Взаимоотношения</a></li>
                                    <li class=" c4"><a
                                            href="/articles/category3/"><span>-</span>Финансы</a></li>
                                    <li class=" c4"><a
                                            href="/articles/category1/"><span>-</span>Общая информация</a></li>
                                </ul>
                            </li>


                            <li class="last  c5"><a href="/reviews/"
                                                    title="">Отзывы</a>
                            </li>
                            <li class="last  c6"><a href="/contacts/"
                                                    title="">Контакты</a>
                            </li>
                            <li class="sub-menu c7" style="float: right"><a href="javascript:void(0);" title="">
                                    <img width="25" height="25" alt="ru"
                                         src="/img/ru-flag.png"/><b
                                        class="caret"></b> </a>

                                <ul>
                                    <li><a href="/language/en"><img width="25"
                                                                                height="25"
                                                                                alt="en"
                                                                                src="/img/en-flag.png"></a>
                                    </li>
                                    <li><a href="/language/fr"><img width="25"
                                                                                height="25"
                                                                                alt="fr"
                                                                                src="/img/fr-flag.png"></a>
                                    </li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
                <!-- //MENU -->            </header>


            <div class="slider_block full_width">
                <div class="flexslider top_slider">
                    <ul class="slides">
                        <li class="slide1"><img src="/img/slider/slide1_bg.jpg"/>

                            <div class="flex_caption1"><p class="FromTop captionDelay2">Nunc id cursus urna, et suscipit
                                    purus.</p><span class="FromTop captionDelay1">Aliquam tempus est sit amet orci porta condimentum. Quisque hendrerit velit erat, in bibendum eros ultricies sit amet. Sed tempor hendrerit purus vitae vestibulum</span>
                            </div>
                            <div class="flex_caption2 FromBottom captionDelay2"></div>
                        </li>
                        <li class="slide2"><img src="/img/slider/slide2_bg.jpg"/>

                            <div class="flex_caption1 FromTop"></div>
                        </li>
                        <li class="slide3"><img src="/img/slider/slide3_bg.jpg"/>

                            <div class="vertical_middle">
                                <div class="flex_caption1 FromTop">Say Something <span
                                        class="color_text">Wonderful</span> Here
                                </div>
                                <div class="flex_caption2 FromBottom">Sed fermentum nunc a ante rutrum, laoreet viverra
                                    mi feugiat. Phasellus rutrum commodo venenatis. Mauris pulvinar placerat vestibulum.
                                    Maecenas vitae felis dapibus tortor pulvinar interdum.
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


            <!-- //SLIDER --><!-- SERVICES -->
            <section class="services_block">
                <div class="clearfix" data-appear-top-offset="-100" data-animated="fadeInUp">
                    <div class="service_item center"><a href="javascript:void(0);" alt=""><i class="i1"></i>

                            <p>Unique Design</p></a></div>
                    <div class="service_item center"><a href="javascript:void(0);" alt=""><i class="i2"></i>

                            <p>Responsive Layout</p></a></div>
                    <div class="service_item center"><a href="javascript:void(0);" alt=""><i class="i3"></i>

                            <p>Dedicated Support</p></a></div>
                    <div class="service_item center"><a href="javascript:void(0);" alt=""><i class="i4"></i>

                            <p>Brand & Identity</p></a></div>
                    <div class="service_item center"><a href="javascript:void(0);" alt=""><i class="i5"></i>

                            <p>Innovations</p></a></div>
                    <div class="service_item center"><a href="javascript:void(0);" alt=""><i class="i6"></i>

                            <p>great ideas</p></a></div>
                </div>
            </section>
            <!-- //SERVICES -->


            <p>

                Наш «Звездный сайт» ждал Вас, уважаемый посетитель. Раз Вы пришли к нам, значит, у Вас возникла та или иная причина посоветоваться со звездами, узнать, что они предскажут Вам.
                <br>Представляемый Вам сайт посвящен исключительно астрологии и содержит гороскопы, книги и различные статьи по астрологии.
                <br>Главным разделом астрологии является раздел астрологических предсказаний. На страницах сайта Вы найдете:
            <ul  class="list1">
                <li>Гороскопы, характеризующие вашу жизнь (Гороскоп на сегодня, Гороскоп на неделю, месяц и год, Индивидуальный гороскоп);</li>
                <li>Гороскопы о различных видах сочетаемости людей (Любовный гороскоп на сегодня, Гороскоп совместимости, Гороскоп сексуальной совместимости, Любовный гороскоп);</li>
                <li>Гороскопы раздела «Астрология профессий» расскажут Вам о вашем истинном призвании, на кого пойти учится, какую приобрести профессию.</li>
                <li>Гороскопы раздела «Деловая астрология» расскажут о приоритетном для Вас бизнесе, предостерегут от ошибок и необдуманных решений. Специально разработан Гороскоп деловой женщины.</li>
            </ul>
            <br>
            Знакомьтесь с представленными на страницах сайта материалами и помните, что мы можем персонально для Вас составить гороскоп по любой заинтересовавшей Вас области астрологии.
            </p>
            <br><br><br>


            <!--

            <section class="projects_block"><h2 class="center">Works</h2>
                <div id="options">
                    <ul id="filter" class="option-set" data-option-key="filter">
                        <li><a class="selected" href="#filter" data-option-value="*">All</a></li>
                        <li><a href="#filter" data-option-value=".branding">Branding</a></li>
                        <li><a href="#filter" data-option-value=".illustration">illustration</a></li>
                        <li><a href="#filter" data-option-value=".web_design">web design</a></li>
                    </ul>
                </div>

                <div class="works_block columns3" data-appear-top-offset="-100" data-animated="fadeInUp">
                    <div class="element branding project_item">
                        <div class="hover_img"><img src="/img/projects/1.jpg" alt=""/><a class="zoom"
                                                                                         href="images/projects/1.jpg"
                                                                                         rel="prettyPhoto[portfolio1]"></a>
                        </div>
                    </div>
                    <div class="element illustration project_item">
                        <div class="hover_img"><img src="/img/projects/2.jpg" alt=""/><a class="zoom"
                                                                                         href="images/projects/2.jpg"
                                                                                         rel="prettyPhoto[portfolio1]"></a>
                        </div>
                    </div>
                    <div class="element web_design project_item">
                        <div class="hover_img"><img src="/img/projects/3.jpg" alt=""/><a class="zoom"
                                                                                         href="images/projects/3.jpg"
                                                                                         rel="prettyPhoto[portfolio1]"></a>
                        </div>
                    </div>
                    <div class="element branding project_item">
                        <div class="hover_img"><img src="/img/projects/4.jpg" alt=""/><a class="zoom"
                                                                                         href="images/projects/4.jpg"
                                                                                         rel="prettyPhoto[portfolio1]"></a>
                        </div>
                    </div>
                    <div class="element illustration project_item">
                        <div class="hover_img"><img src="/img/projects/5.jpg" alt=""/><a class="zoom"
                                                                                         href="images/projects/5.jpg"
                                                                                         rel="prettyPhoto[portfolio1]"></a>
                        </div>
                    </div>
                    <div class="element web_design project_item">
                        <div class="hover_img"><img src="/imgprojects/6.jpg" alt=""/><a class="zoom"
                                                                                        href="images/projects/6.jpg"
                                                                                        rel="prettyPhoto[portfolio1]"></a>
                        </div>
                    </div>
                </div>
            </section>
            --!>


            <!-- //RECENT PROJECTS --><!-- CONTENT INFO -->
            <section class="content_info clearfix"><!-- CONTENT INFO TEXT -->
                <div class="cont_info_txt" data-appear-top-offset="-100" data-animated="fadeInLeft">
                    <div class="title">say something <span class="color_text">wonderful</span> here</div>
                    <p>In dolor eros, mollis non convallis a, sollicitudin non magna. Pellentesque id nibh felis. Etiam
                        bibendum luctus lorem lobortis malesuada. Sed dui nulla, tincidunt sed accumsan ut, tempor id
                        arcu. Morbi vitae</p></div>
                <!-- CONTENT INFO TEXT --><!-- CONTENT INFO IMAGE -->
                <div class="cont_info_img" data-appear-top-offset="-100" data-animated="fadeInRight"><img
                        src="/img/cont_info_img.png" alt=""/></div>
                <!-- CONTENT INFO IMAGE --></section>
            <!-- //CONTENT INFO --><!-- FOOTER -->


            <footer class="full_width footer_block">
                <div class="row" data-animated="fadeInUp"><!-- LATEST NEWS -->
                    <div class="col-lg-3 col-md-3 col-sm-6 padbot20"><h2>Latest News</h2>
                        <ul class="recent_posts">
                            <li>
                                <div class="pull-left recent_posts_img"><img src="/imgblog/1.jpg" alt=""/></div>
                                <div class="recent_posts_content"><a class="post_title" href="blog-post.html">Mauris ut
                                        mauris sit amet nisi lobortis</a>

                                    <div class="date_block">October 22, 2020</div>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="pull-left recent_posts_img"><img src="/img/blog/2.jpg" alt=""/></div>
                                <div class="recent_posts_content"><a class="post_title" href="blog-post.html">Mauris ut
                                        mauris sit</a>

                                    <div class="date_block">October 22, 2020</div>
                                </div>
                                <div class="clear"></div>
                            </li>
                            <li>
                                <div class="pull-left recent_posts_img"><img src="/img/blog/3.jpg" alt=""/></div>
                                <div class="recent_posts_content"><a class="post_title" href="blog-post.html">Mauris ut
                                        mauris sit</a>

                                    <div class="date_block">October 22, 2020</div>
                                </div>
                                <div class="clear"></div>
                            </li>
                        </ul>
                    </div>
                    <!-- //LATEST NEWS -->
                    <div class="col-lg-3 col-md-3 col-sm-6 padbot20"><h2>Newsletter</h2>

                        <p>Vestibulum sem nulla, euismod ac facilisis in, condimentum adipiscing urna. Ut at diam mi.
                            Vivamus sed ligula odio. Vivamus mattis, justo at suscipit malesuada</p>
                        <!-- NEWSLETTER-FORM -->
                        <form id="newsletter-form" action=""><input type="text" name="Enter your Email..."
                                                                    value="Enter your Email..."
                                                                    onFocus="if (this.value == 'Enter your Email...') this.value = '';"
                                                                    onBlur="if (this.value == '') this.value = 'Enter your Email...';"/><input
                                class="contact_btn" type="submit" value=""/></form>
                        <!-- //NEWSLETTER-FORM -->

                    </div>
                    <div class="respon_clear"></div>
                    <!-- RECENT TWEETS -->
                    <div class="col-lg-3 col-md-3 col-sm-6 padbot20"><h2>Recent Tweets</h2>
                        <ul class="twitter_list tweet_module"></ul>
                    </div>
                    <!-- //RECENT TWEETS -->
                    <div class="col-lg-3 col-md-3 col-sm-6 padbot20"><h2>Useful Links</h2>
                        <ul class="foot_links">
                            <li><span class="glyphicon glyphicon-play-circle"></span><a href="javascript:void(0);">Aliquam
                                    tempus est sit amet orci</a></li>
                            <li><span class="glyphicon glyphicon-play-circle"></span><a href="javascript:void(0);">Quisque
                                    hendrerit velit erat</a></li>
                            <li><span class="glyphicon glyphicon-play-circle"></span><a href="javascript:void(0);">In
                                    bibendum eros ultricies sit amet.</a></li>
                            <li><span class="glyphicon glyphicon-play-circle"></span><a href="javascript:void(0);">Sed
                                    tempor hendrerit purus vitae</a></li>
                            <li><span class="glyphicon glyphicon-play-circle"></span><a href="javascript:void(0);">Nunc
                                    egestas justo nec enim mollis</a></li>
                        </ul>
                    </div>
                </div>

                <!-- COPYRIGHT -->
                <div class="copyright"><a class="copyright_logo" href="javascript:void(0);">cube</a> <span> &copy;
                        Copyright 2020</span></div>
                <!-- //COPYRIGHT --></footer>
            <!-- //FOOTER --></div>
        <!-- WRAPPER --></div>
    <!-- //CONTAINER --></div>
<!-- //PAGE -->










<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
