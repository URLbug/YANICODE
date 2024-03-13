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
            ?>
                    <div class="services__item" data-popup="services-popup"><?=$arItem['NAME']?></div>

                    <template id="<?=$arResult['NAME']?>">
                        <div class="popup-services-cover">
                            <div class="popup-services__title">
                                <?=$arType;?>
                            </div>
                            <div class="popup-services__category">
                                <?=$arItem['NAME'];?>
                            </div>
                            <div class="popup-services__desc">
                                <?=$arItem['DETAIL_TEXT'];?>
                            </div>
                        </div>
                    </template>
            <?php
                }
            }
            ?>
        </div>
    </div>
<?php
}
?>
