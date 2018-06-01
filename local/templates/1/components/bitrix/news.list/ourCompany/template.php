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

<?foreach($arResult["ITEMS"] as $arItem):?>
	<?
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
    <li class="span4" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
        <?
        $renderImage =
        CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
            Array("width" => "200", "height" => "200"),
            BX_RESIZE_IMAGE_EXACT,
            false);
        ?>
        <div class="round-box box-big">
                <span class="box-inner">
                  <img alt="some image" class="img-circle" src="<?=$renderImage["src"]?>">
                </span>
        </div>
        <h3 class="text-center">
            <?=$arItem["NAME"]?>
            <small class="block">
                <?=$arItem["PROPERTIES"]["OFFICE"]["VALUE"]?>
            </small>
        </h3>
        <p>
            <?=$arItem["PREVIEW_TEXT"];?>
        </p>
        <ul class="inline text-center big social-icons">
            <? if($arItem["PROPERTIES"]["TWITTER"]["VALUE"]): ?>
            <li>
                <a data-iconcolor="#00a0d1" href="<?=$arItem["PROPERTIES"]["TWITTER"]["VALUE"]?>">
                    <i class="icon-twitter"></i>
                </a>
            </li>
            <? endif; ?>

            <? if($arItem["PROPERTIES"]["FACEBOOK"]["VALUE"]):?>
            <li>
                <a data-iconcolor="#3b5998" href="<?=$arItem["PROPERTIES"]["FACEBOOK"]["VALUE"]?>">
                    <i class="icon-facebook"></i>
                </a>
            </li>
            <? endif; ?>

            <? if($arItem["PROPERTIES"]["PINTEREST"]["VALUE"]):?>
            <li>
                <a data-iconcolor="#910101" href="<?=$arItem["PROPERTIES"]["PINTEREST"]["VALUE"]?>">
                    <i class="icon-pinterest"></i>
                </a>
            </li>
            <? endif; ?>

            <? if($arItem["PROPERTIES"]["GOOGLE"]["VALUE"]): ?>
            <li>
                <a data-iconcolor="#E45135" href="<?=$arItem["PROPERTIES"]["GOOGLE"]["VALUE"]?>">
                    <i class="icon-google-plus"></i>
                </a>
            </li>
            <? endif; ?>

            <? if($arItem["PROPERTIES"]["LINKEDIN"]["VALUE"]):?>
            <li>
                <a data-iconcolor="#5FB0D5" href="<?=$arItem["PROPERTIES"]["LINKEDIN"]["VALUE"]?>">
                    <i class="icon-linkedin"></i>
                </a>
            </li>
            <? endif; ?>

        </ul>
    </li>

<?endforeach;?>

