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

                    <li class="span3 filter-forest" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                        <figure class="round-box box-huge no-rounded">
                            <?$renderImage =
                                CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
                                    Array("width" => "208", "height" => "138"),
                                    BX_RESIZE_IMAGE_EXACT,
                                    false);
                            ?>
                            <a class="box-inner fancybox" href="<?=$renderImage["src"]?>" rel="group" title="<?=$arItem["PROPERTIES"]["TITLE"]["VALUE"]?>">
                                <img alt="some image" class="img-circle" src="<?=$renderImage["src"]?>">
                                <i class="plus-icon"></i>
                            </a>
                            <figcaption>
                                <h4>
                                    <a href="<?=$arItem["DETAIL_PAGE_URL"]?>">
                                        <?=$arItem["NAME"]?>
                                    </a>
                                </h4>
                                <p>
                                    <?=$arItem["PREVIEW_TEXT"]?>
                                </p>
                            </figcaption>
                        </figure>
                    </li>



<?endforeach;?>
