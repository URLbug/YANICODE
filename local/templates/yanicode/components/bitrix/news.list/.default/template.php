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

$arTypes = [];

foreach($arResult['ITEMS'] as $arType)
{
    if(!in_array($arType, $arTypes))
    {
        $arTypes[] = $arType['PROPERTYS']['TYPE']['VALUE'];
    }
}

foreach($arTypes as $arType)
{
?>
    <div class="services">
        <h2 class="services__title">
            <?=$arType?>
        </h2>
        <div class="services-category">
            <?php

            foreach($arResult['ITEMS'] as $arItem)
            {
                if($arItem['PROPERTYS']['TYPE']['VALUE'] === $arType)
                {
                    echo '<div class="services__item" data-popup="services-popup">' . $arItem['NAME'] . '</div>';
                }
            }
            ?>
        </div>
    </div>

    <template id="popup-services">
        <div class="popup-services-cover">
            <div class="popup-services__title">
                1111
            </div>
            <div class="popup-services__category">
                <?=$arResult['NAME'];?>
            </div>
            <div class="popup-services__desc">
                <?=$arResult['DETAIL_TEXT'];?>
            </div>
        </div>
    </template>
<?php
}
?>
