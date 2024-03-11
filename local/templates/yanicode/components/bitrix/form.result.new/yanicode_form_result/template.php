<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}

$arQuestions = $arResult["QUESTIONS"];

// Напоминание - переделать этот компонент

///
echo '<pre>';

print_r($arResult);

echo '</pre>';
///
?>

<style>
    pre {
        color: white;
    }
</style>

<template id="popup-calculate-project">
    <form action="" class="js-validated-form">

        <?php

        foreach($arQuestions as $key => $question)
        {
            print_r($question["HTML_CODE"]);
        }
        ?>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Ваше имя и фамилия:</label>
            <input type="text" class="popup-feedback__input js-validated-field" data-validated_name="name" />
        </div>

        <div class="popup-feedback__double-column">
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">Телефон</label>
                <input type="tel" class="popup-feedback__input mask-phone-js js-validated-field" data-validated_name="phone" />
            </div>
            <div class="popup-feedback__input-cover">
                <label for="" class="popup-feedback__input-label">Email</label>
                <input type="mail" class="popup-feedback__input js-validated-field" data-validated_name="mail" />
            </div>
        </div>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Название компании:</label>
            <input type="text" class="popup-feedback__input" />
        </div>

        <div class="popup-feedback__input-cover">
            <label for="" class="popup-feedback__input-label">Опишите Вашу задачу:</label>
            <textarea name="" id="" class="popup-feedback__textarea"></textarea>
        </div>

        <div class="popup-feedback__consent">
            <div class="popup-feedback__consent-form-wrapper">
                <input class="popup-feedback__consent-input" id="consent1" type="checkbox" checked="checked" />
                <label class="popup-feedback__consent-form" for="consent1">
                    <a href="./article-data-processing.html" target="_blank">
                        Нажимая кнопку «Отправить», я даю свое согласие на обработку моих персональных данных, в соответствии с Федеральным законом от 27.07.2006 года №152-ФЗ «О персональных данных», на условиях и для целей, определенных в Согласии на обработку персональных данных.
                    </a>
                </label>
            </div>
            <div class="popup-feedback__consent-form-wrapper">
                <input class="popup-feedback__consent-input" id="consent2" type="checkbox" checked="checked" />
                <label class="popup-feedback__consent-form" for="consent2">
                    <a href="./article-privacy-policy.html" target="_blank">
                        Оставляя данные на Сайте, заполняя регистрационную форму, Вы соглашаетесь с настоящей Политикой конфиденциальности.
                    </a>
                </label>
            </div>
        </div>

        <div class="popup-feedback__button-cover">
            <button type="submit" class="button button_modal-gold js-button-submit">отправить</button>
        </div>
    </form>
</template>
