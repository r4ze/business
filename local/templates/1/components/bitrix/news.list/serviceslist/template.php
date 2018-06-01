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
            <div class="round-box box-big">
                <span class="box-inner">
                    <?
                    $renderImage =
                    CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
                            Array("width" => "200", "height" => "200"),
                            BX_RESIZE_IMAGE_EXACT,
                            false);
                    ?>
                  <img alt="some image" class="img-circle" src="<?=$renderImage["src"]?>">
                  <i class="icon-beaker"></i>
                </span>
            </div>
            <h2 class="text-center"><?=$arItem["NAME"]?></h2>
    <p class="lead text-center">
       <?=$arItem["PREVIEW_TEXT"]?>
    </p>
    </li>
<?endforeach;?>

