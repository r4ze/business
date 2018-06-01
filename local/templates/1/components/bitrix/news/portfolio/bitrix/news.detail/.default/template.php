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
                        <div style="display: flex; flex-wrap: wrap; justify-content: space-between;">
                        <figure class="round-box box-huge">
                            <?$renderImage =
                                CFile::ResizeImageGet($arResult["DETAIL_PICTURE"],
                                    Array("width" => "250", "height" => "250"),
                                    BX_RESIZE_IMAGE_EXACT,
                                    false);
                            ?>
                            <a class="box-inner fancybox" href="<?=$renderImage["src"]?>" rel="group" title="Thats a nice landscape">
                                <img alt="some image" class="img" src="<?=$renderImage["src"]?>">
                                <i class="plus-icon"></i>
                            </a>
                        <p class="lead">
                            <?=$arResult["DETAIL_TEXT"]?>
                        </p>
                        </div>
                    </div>
            </div>
            </article>
        </div>

    </div>
</section>