<?php

if(!defined('B_PROLOG_INCLUDED') || !B_PROLOG_INCLUDED)
{
    die();
}

$classes = [
    'textarea' => 'popup-feedback__textarea ',
    'text' => 'popup-feedback__input ',
];

if($arResult['isFormErrors'] === 'Y')
{
    echo $arResult['FORM_ERROR_TEXT'];
}

if($arResult['isFOrmNote'] !== 'Y')
{
    echo '<template id="popup-calculate-project">';

    echo str_replace(
            '<form',
            '<form class="js-validated-form"',
            $arResult['FORM_HEADER']
    );

    foreach ($arResult["QUESTIONS"] as $FIELD_SID => $arQuestion)
    {
        if ($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'hidden')
        {
            echo $arQuestion["HTML_CODE"];
        }

        if(
            $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] !== 'email' &&
            $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] !== 'checkbox' &&
            $arQuestion['CAPTION'] !== 'Телефон'
        ) {
            $class = 'class="';
            $classReplace = 'class="input' . $arQuestion['STRUCTURE'][0]['FIELD_TYPE'] . '"';

            $class .= $classes[$arQuestion['STRUCTURE'][0]['FIELD_TYPE']];

            if($arQuestion['REQUIRED'] === 'Y')
            {
                $class .= ' js-validated-field ';

                $validation = 'data-validated_name="name" value';

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

                <?=str_replace($classReplace, $class, $arQuestion["HTML_CODE"]);?>
            </div>
<?php
        }

        if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'email')
        {
            $question = array_values($arResult['QUESTIONS']);

            $classReplace = 'class="inputtext"';

            $classPhone = 'class="popup-feedback__input mask-phone-js js-validated-field" data-validated_name="phone"';

            $classEmail = 'class="popup-feedback__input js-validated-field" data-validated_name="mail"';
?>
            <div class="popup-feedback__double-column">
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label"><?=$question[1]['CAPTION']?></label>
                    <?=str_replace($classReplace, $classPhone, $question[1]["HTML_CODE"]);?>
                </div>
                <div class="popup-feedback__input-cover">
                    <label for="" class="popup-feedback__input-label"><?=$question[2]['CAPTION']?></label>
                    <?=str_replace($classReplace, $classEmail, $question[2]["HTML_CODE"]);?>
                </div>
            </div>
<?php
        }

        if($arQuestion['STRUCTURE'][0]['FIELD_TYPE'] === 'checkbox')
        {
            $question = array_slice(array_values($arResult['QUESTIONS']), -2);

            $question["CHECKBOX"] = [];

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
            break;
        }
    }
?>

<?php

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

    } // isUseCaptcha

    ?>

    <div class="popup-feedback__button-cover">
        <input <?=(intval($arResult["F_RIGHT"]) < 10 ? "disabled=\"disabled\"" : "");?>
                type="submit"
                name="web_form_submit"
                class="button button_modal-gold js-button-submit"
                value="отправить" />
    </div>
    </form>
</template>

<p>
    <?=$arResult["REQUIRED_SIGN"];?> - <?=GetMessage("FORM_REQUIRED_FIELDS")?>
</p>

<?=$arResult["FORM_FOOTER"]?>

<?php

}

?>