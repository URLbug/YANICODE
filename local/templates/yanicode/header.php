<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}
use Bitrix\Main\Page\Asset;

global $APPLICATION;

$ASSET = Asset::getInstance();
?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <title><?=$APPLICATION->ShowTitle()?></title>

    <?=$ASSET->addCss(SITE_TEMPLATE_PATH . "/assets/template_styles.css");?>
</head>

<body>

<div id="panel"><?=$APPLICATION->ShowPanel()?></div>

<header class="header">
    <div class="container">
        <div class="header-wrapper">
            <a href="/" class="header__logo">
                <img width="300" height="92" src="<?=SITE_TEMPLATE_PATH?>/assets/images/svg/logo-yanicode.svg" alt="yanicode">
            </a>
            <div class="header__burger header__burger_close">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>

            <div class="header-nav">

                <?php

                $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "yanicode_main_menu",
                        [
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "top",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => [
                                    0 => "",
                                ],
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                        ],
                        false);
                ?>

                <div class="header__phone">
                    <!-- Предполагаю, что контентредактор/админ будет редактировать номер телефона-->
                    <a href="tel:+79114510616">+79114510616</a>
                </div>
            </div>

        </div>
    </div>
</header>
