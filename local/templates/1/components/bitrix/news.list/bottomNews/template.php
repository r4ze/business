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
        <div class="row-fluid">
            <div class="span4">
                <div class="round-box box-small">
                    <?$renderImage =
                        CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
                            Array("width" => "208", "height" => "138"),
                            BX_RESIZE_IMAGE_EXACT,
                            false);
                    ?>
                    <a class="box-inner" href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <img alt="some image" class="img-circle" src="<?=$renderImage["src"]?>">
                    </a>
                </div>
                <h5 class="text-center light">
                    12 Дек 2012
                </h5>
            </div>
            <div class="span8">
                <h3>
                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                        <?=$arItem["NAME"]?>
                    </a>
                </h3>
                <p>
                    <?=$arItem["PREVIEW_TEXT"]?>
                </p>
            </div>
        </div>
    </li>

<?endforeach;?>

