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

// Переменная для подсчета абзацев/столбцов
$column = 0;

// Ожидается, что других усулг не будет
// Словарь с типом услуги и количеством абзацев/столбцов
$arTypes = [
    'БРЕНДИНГ' => 3,
    'МАССОВЫЕ КОММУНИКАЦИИ' => 3,
    'DIGITAL БРЕНДИНГ' => 0,
    'ЛИЧНЫЙ БРЕНД' => 0,
];

echo '<div class="services-cover">';

foreach($arTypes as $arType => $arColumn)
{
?>
    <div class="services">
        <h2 class="services__title">
            <?=$arType?>
        </h2>
            <?php

            foreach($arResult['ITEMS'] as $arItem)
            {
                // Валидация на тип услуги для данных
                if($arItem['PROPERTIES']['SERVICES_TYPE']['VALUE'] === $arType)
                {
                    // Эрмитраж для комплнента
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

                    // Валидация на то что нельзя делить на ноль
                    if($arColumn !== 0)
                    {
                        if (($column % $arColumn) === 0)
                        {
                            echo '<div class="services-category">';
                        }
                    }
            ?>
                <div class="services__item"
                     onclick="servicesPopup('<?=$arItem['NAME']?>')"
                     id="<?=$this->GetEditAreaId($arItem['ID']);?>"
                >
                    <?=$arItem['NAME']?>
                </div>

                <template id="<?=$arItem['NAME']?>">
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
                // Валидация на то что нельзя делить на ноль
                // Закрывающея версия
                if($arColumn !== 0)
                {
                    if (($column % $arColumn) === 0)
                    {
                        echo '</div>';
                    }
                }

                $column += 1;
            }
        }
        ?>
    </div>
<?php

}

echo '</div>';

?>

<script>

    // В этой части была проблема с фронтендом
    // Пришлось немного переделать оригенальную функцию
    // Также пришлось поправлять стиль кода так как старая версия была нечитаемой
    function servicesPopup(id)
    {
        // Я нахожу оригинальный ID элемента
        let el = document.getElementById(id);

        // Затем открываю окно элемента
        let popup = legancyPopup({
            content: el,
            title: false,
            onAfterAppend: function onAfterAppend(result) {}
        });

        popup.open();
    }
</script>
