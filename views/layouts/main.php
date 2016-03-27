<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;
use app\components\Helper;

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
                                                       title=""><?= \Yii::t('main', 'Horoscopes');?></a><!-- Mega Menu -->
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
                            <li class="sub-menu <?=Helper::classActivePath('moon');?>  c3"><a href="javascript:void(0);"
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


                            <li class="last <?=Helper::classActivePath('review');?>  c5"><a href="/reviews/"
                                                    title="">Отзывы</a>
                            </li>
                            <li class="last <?=Helper::classActivePath('contacts');?>  c6"><a href="/contacts/"
                                                    title=""><?= \Yii::t('main', 'Contacts');?></a>
                            </li>

                            <li class="sub-menu c7" style="float: right"><a href="javascript:void(0);" title="">
                                    <img width="25" height="25" alt="ru"
                                         src="/img/<?=Yii::$app->params['lang'];?>-flag.png"/><b
                                        class="caret"></b> </a>

                                <ul>
                                    <? foreach(Yii::$app->params['supportLang'] as $key=>$val) {
                                        if($key!=Yii::$app->params['lang']){
                                         print
                                         "<li><a href=\"/lang/set?lang=".$key."\"><img width=\"25\"
                                                                                height=\"25\"
                                                                                alt=\"".$key."\"
                                                                                src=\"/img/".$key."-flag.png\"></a>
                                    </li>";
                                        }
                                    }
                                    ?>

                                </ul>
                            </li>



                        </ul>


                    </div>
                </div>
                <!-- //MENU -->            </header>





            <?= $content ?>






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
