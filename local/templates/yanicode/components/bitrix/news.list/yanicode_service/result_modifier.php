<?php

$arResult['SERVICES'] = [];

foreach($arResult['ITEMS'] as $arItem)
{
    $arItem = $arItem['PROPERTIES']['SERVICES_TYPE'];
    $arItem = [
        'VALUE_XML_ID' => $arItem['VALUE_XML_ID'],
        'VALUE' => $arItem['VALUE'],
        'VALUE_SORT' => $arItem['VALUE_SORT'],
    ];
    
    if(!in_array($arItem, $arResult['SERVICES']))
    {
        $arResult['SERVICES'][] = $arItem;
    }

}

usort($arResult['SERVICES'], function($a, $b)
{
    return $a['VALUE_SORT'] > $b['VALUE_SORT'];
});
