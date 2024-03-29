<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}

use Bitrix\Main\Page\Asset;

$ASSET = Asset::getInstance();

// Мета данные
$ASSET->addString('<meta charset="utf-8">');
$ASSET->addString('<meta http-equiv="x-ua-compatible" content="ie=edge">');
$ASSET->addString('<meta class="js-meta-viewport" name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">');
$ASSET->addString('<meta name="format-detection" content="telephone=no">');

// CSS код
$ASSET->addCss(SITE_TEMPLATE_PATH . '/assets/template_styles.css');

// JS код
$ASSET->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/inputmask.min.js');
$ASSET->addJs(SITE_TEMPLATE_PATH . '/assets/js/vendor/swiper-bundle.min.js');
$ASSET->addJs(SITE_TEMPLATE_PATH . '/assets/js/build.js');


?>

<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID?>">

<head>
    <title><?=$APPLICATION->ShowTitle()?></title>

    <?=$APPLICATION->ShowHead();?>
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
                        Array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "top",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(0 => ""),
                            "MENU_CACHE_TIME" => "3600",
                            "MENU_CACHE_TYPE" => "N",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N",
                        ),
                        false);
                ?>

                <div class="header__phone">
                    <a href="tel:<?php

                    $APPLICATION->IncludeFile(
                        INCLUDE_PATH . "/html/phone.php",
                        [],
                        [
                            "SHOW_BORDER" => false,
                            "MODE" => "php",
                        ]
                    );

                    ?>"><?php

                        $APPLICATION->IncludeFile(
                            INCLUDE_PATH . "/html/phone.php",
                            [],
                            [
                                "MODE" => "text",
                            ]
                        );

                        ?>
                    </a>
                </div>

            </div>

        </div>
    </div>
</header>
<main class="website-workarea">
