<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Page\Asset;
?>

<head>
    <?$APPLICATION->ShowHead();?>
    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <title>MD :: <?$APPLICATION->ShowTitle();?></title>
    <meta content="Bootsrap based theme" name="description">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <link href="/media/i/favicon.ico" rel="shortcut icon">
    <link href="apple-touch-icon-144x144-precomposed.png" rel="apple-touch-icon-precomposed" sizes="144x144">
    <link href="apple-touch-icon-114x114-precomposed.png" rel="apple-touch-icon-precomposed" sizes="114x114">
    <link href="apple-touch-icon-72x72-precomposed.png" rel="apple-touch-icon-precomposed" sizes="72x72">
    <link href="apple-touch-icon-57x57-precomposed.png" rel="apple-touch-icon-precomposed">
    <link href="/media/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/media/css/responsive.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/media/css/font-awesome-all.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/media/css/fancybox.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/media/css/theme.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="/media/css/fonts.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<?$APPLICATION->ShowPanel();?>
<body>
<div class="wrapper">
    <!-- Page Header -->

<header id="masthead">

    <nav class="navbar navbar-static-top">
        <div class="navbar-inner">
            <div class="container-fluid">
                <a class="btn btn-navbar" data-target=".nav-collapse" data-toggle="collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <?$APPLICATION->IncludeComponent("bitrix:main.include", ".default", array(
                    "AREA_FILE_SHOW" => "file",
                    "PATH" => "/media/include_areas/ar_logo.php",
                    "EDIT_TEMPLATE" => "template.php"
                ),
                    false
                );?>
                <div class="nav-collapse collapse">
                    <ul class="nav pull-right">

                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
</header>

    <div id="content" role="main">
        <!-- Promo Section -->
        <section class="section section-alt">
            <div class="row-fluid">
                <div class="flexslider" data-flex-animation="slide" data-flex-controlsalign="center" data-flex-controlsposition="inside" data-flex-directions="hide" data-flex-speed="7000" id="intro">
                    <ul class="slides">
                        <li>
                            <div class="super-hero-unit">
                                <figure>
                                    <img alt="some image" src="/media/i/assets/landscapes/landscape-2-1250x420.jpg">
                                    <figcaption class="flex-caption">
                                        <h1 class="super">
                                            Bold
                                            <span class="lighter">

                        </span>
                                            Beautiful
                                        </h1>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="super-hero-unit">
                                <figure>
                                    <img alt="some image" src="/media/i/assets/landscapes/landscape-3-1250x420.jpg">
                                    <figcaption class="flex-caption">
                                        <h1 class="super">
                                            Creative
                                            <span class="lighter">
                          &amp;
                        </span>
                                            Responsive
                                        </h1>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                        <li>
                            <div class="super-hero-unit">
                                <figure>
                                    <img alt="some image" src="/media/i/assets/landscapes/landscape-1-1250x420.jpg">
                                    <figcaption class="flex-caption">
                                        <h1 class="super">
                                            Adaptive
                                            <span class="lighter">
                          &amp;
                        </span>
                                            Awesome
                                        </h1>
                                    </figcaption>
                                </figure>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>