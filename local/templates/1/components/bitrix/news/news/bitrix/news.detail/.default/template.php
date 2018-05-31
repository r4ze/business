<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<section class="section section-padded">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <article class="post row-fluid">

                    <div class="span12 post-body">
                        <div class="section-header">
                            <h1>
                                <?=$arResult["NAME"]?>
                            </h1>
                        </div>

                        <p class="lead">
                            <?=$arResult["DETAIL_TEXT"]?>
                        </p>
                        </div>
                    </div>
                </article>
                <nav class="post-navigation" id="nav-below">
                    <ul class="pager">
                        <li class="previous">
                            <a href="#" rel="prev">
                                <i class="icon-angle-left"></i>
                                Предыдущая
                            </a>
                        </li>
                        <li class="next">
                            <a href="#" rel="next">
                                Следующая
                                <i class="icon-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>

        </div>
    </div>
</section>