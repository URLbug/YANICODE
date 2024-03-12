<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}
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

<section class="container">
    <div class="blog-list">
        <?php

        foreach($arResult['ITEMS'] as $arItem)
        {

            $this->AddEditAction(
                $arItem['ID'],
                $arItem['EDIT_LINK'],
                CIBlock::GetArrayByID(
                    $arItem["IBLOCK_ID"],
                    "ELEMENT_EDIT"
                )
            );

            $this->AddDeleteAction(
                $arItem['ID'],
                $arItem['DELETE_LINK'],
                CIBlock::GetArrayByID(
                    $arItem['IBLOCK_ID'],
                    'ELEMENT_DELETE'),
                [
                    'CONFIRM' => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM'),
                ]
            );
            ?>
            <a href="<?=$arItem['DETAIL_PAGE_URL']?>"
               class="blog"
               id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                <div class="blog__img">
                    <img width="100%"
                         height="100%"
                         src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>"
                         alt="">
                </div>
                <div class="blog__desc">
                    <div class="blog__title">
                        <?=$arItem['NAME'];?>
                    </div>
                    <div class="blog__date">
                        <?=$arItem['DISPLAY_ACTIVE_FROM'];?>
                    </div>
                    <div class="blog_article">
                        <?=$arItem['PREVIEW_TEXT'];?>
                    </div>
                </div>
            </a>
            <?php
        }
        ?>
    </div>
</section>
