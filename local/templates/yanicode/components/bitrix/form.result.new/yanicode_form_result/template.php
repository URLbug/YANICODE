<?php

if(!defined('B_PROLOG_INCLUDED') || !B_PROLOG_INCLUDED)
{
    die();
}

// Словарь с элементами HTML/CSS класса
$classes = [
    'textarea' => 'popup-feedback__textarea ',
    'text' => 'popup-feedback__input ',
];

// Валидация на ошибки
if($arResult['isFormErrors'] === 'Y')
{
    echo $arResult['FORM_ERROR_TEXT'];
}

// Вывод самого шаблона
// Я предполагаю, что его никто не будет менять
// Поэтому некоторые части кода были "слегка упрощены"
if($arResult['isFormNote'] !== 'Y')
{
    echo '<template id="popup-calculate-project">';

    echo str_replace(
            '<form',
            '<form class="js-validated-form"',
            $arResult['FORM_HEADER']
    ); // Добавляю класс для формы

    // Цикл для всех вопросов
    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
    {
        // Валидация на скрытые инпуты
        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'hidden')
        {
            echo $arQuestion["HTML_CODE"];
        }

        // Валидация на однострочные див
        if(
            $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] !== 'email' &&
            $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] !== 'checkbox' &&
            $arQuestion['CAPTION'] !== 'Телефон'
        ) {
            // Создаем две переменные
            // Переменная для кастомизации собственных классов class
            // Переменнная для замены текущего класса $classReplace
            $class = 'class="';
            $classReplace = 'class="input' . $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '"';

            // Добавляем класс из словаря classes
            $class .= $classes[$arQuestion['STRUCTURE'][0]['FIELD_TYPE']];

            // Валидация на обезательного поля ввода
            if($arQuestion['REQUIRED'] === 'Y')
            {
                // Добавление валидации поля через JS
                $class .= ' js-validated-field ';

                $validation = 'data-validated_name="name" required value';

                $arQuestion["HTML_CODE"] = str_replace(
                        'value',
                        $validation,
                        $arQuestion["HTML_CODE"]
                );
            }

            $class .= '"';
?>
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">
                    <?=$arQuestion["CAPTION"];?>
                </label>

                <!-- Замена текущего класса на новый -->
                <?=str_replace($classReplace, $class, $arQuestion["HTML_CODE"]);?>
            </div>
<?php
        }

        // Валидация на тип email
        if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'email')
        {
            // Тут сразу я беру все элементы из листа QUESTION
            $question = array_values($arResult['QUESTIONS']);

            // Классы для замены текущего класса в оригенальной верстке
            $classReplace = 'class="inputtext"';

            $classPhone = 'class="popup-feedback__input mask-phone-js js-validated-field" data-validated_name="phone" required';

            $classEmail = 'class="popup-feedback__input js-validated-field" data-validated_name="mail" required';
?>
            <!-- Тут я сразу вывожу поле для ввода номера телефона и почты -->
            <!-- Предполагается что изменять поля никто не собирается  -->
            <div class="popup-feedback__double-column">
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label">
                        <?=$question[1]['CAPTION']?>
                    </label>

                    <!-- Замена текущего класса на новый -->
                    <?=str_replace($classReplace, $classPhone, $question[1]["HTML_CODE"]);?>
                </div>
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label">
                        <?=$question[2]['CAPTION']?>
                    </label>

                    <!-- Замена текущего класса на новый -->
                    <?=str_replace($classReplace, $classEmail, $question[2]["HTML_CODE"]);?>
                </div>
            </div>
<?php
        }

        // Валидация на тип checkbox
        if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'checkbox')
        {
            // Я как и в предыдущей части беру сразу все элементы, но оставляю всего два значения
            $question = array_slice(array_values($arResult['QUESTIONS']), -2);

            // Массив для всех сheckbox
            $question["CHECKBOX"] = [];

            // Перебераем масив checkbox и дополняем оригенальную верстку новыми элементами из шаблона
            foreach($question as $quest)
            {
                $replaceCheckbox = 'value="' . $quest['STRUCTURE'][0]['ID'] . '"';
                $replaceLabel = '<label for="' . $quest['STRUCTURE'][0]['ID'] . '">';

                $classCheckbox = $replaceCheckbox . 'class="popup-feedback__consent-input"';

                $label = '<label for="' . $quest['STRUCTURE'][0]['ID'] . '"' . 'class="popup-feedback__consent-form">';
                $label .= '<a href="https://youtu.be/dQw4w9WgXcQ?si=wDmx0OEa-iMRpMIf">';

                $labelEnd = '</a></label>';

                $htmlCode = str_replace(
                    $replaceCheckbox,
                    $classCheckbox,
                    $quest["HTML_CODE"]
                );

                $htmlCode = str_replace(
                    $replaceLabel,
                    $label,
                    $htmlCode
                );

                $question['CHECKBOX'][] = str_replace(
                    '</label>',
                    $labelEnd,
                    $htmlCode
                );
            }
?>
            <div class="popup-feedback__consent">
                <div class="popup-feedback__consent-form-wrapper">
                    <?=$question["CHECKBOX"][0];?>
                </div>

                <div class="popup-feedback__consent-form-wrapper">
                    <?=$question["CHECKBOX"][1];?>
                </div>
            </div>

<?php
            // Сразу заканчиваю цикл для того чтобы не переберать оставшиеся(лишнии) элементы массива
            break;
        }
    }

    // Оригенальная капча
    if($arResult["isUseCaptcha"] == "Y")
    {
?>
        <?=GetMessage("FORM_CAPTCHA_TABLE_TITLE")?>

        <input type="hidden"
               name="captcha_sid"
               value="<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>" />
        <img src="/bitrix/tools/captcha.php?captcha_sid=<?=htmlspecialcharsbx($arResult["CAPTCHACode"]);?>"
             width="180" height="40" />

        <?php

        GetMessage("FORM_CAPTCHA_FIELD_TITLE");

        echo $arResult["REQUIRED_SIGN"];

        ?>

        <input type="text" name="captcha_word" size="30" maxlength="50" value="" class="inputtext" />
        <?php

    }

    ?>

    <div class="popup-feedback__button-cover">
        <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?>
                type="submit"
                name="web_form_submit"
                class="button button_modal-gold js-button-submit"
                value="отправить" />
    </div>

    <?=$arResult["FORM_FOOTER"]?>

</template>
<?php

}

?>
