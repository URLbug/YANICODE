<?php

global $APPLICATION;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Услуги");

?>

<main class="website-workarea">
    <section class="banner banner_before54" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/images/banner_services.jpg');">
        <?php

        $APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/html/banner_service.php",
            [],
            [
                "MODE" => "html",
            ]
        );

        ?>
    </section>

    <div class="container">

        <!--  Лист с услугами и их описанием  -->
        <?php

        $APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/html/our_services.php",
            [],
            [
                "MODE" => "html",
            ]
        );

        $APPLICATION->IncludeComponent(
            "bitrix:news.list",
            "yanicode_service",
            Array(
                "ACTIVE_DATE_FORMAT" => "d.m.Y",
                "ADD_SECTIONS_CHAIN" => "Y",
                "AJAX_MODE" => "N",
                "AJAX_OPTION_ADDITIONAL" => "",
                "AJAX_OPTION_HISTORY" => "N",
                "AJAX_OPTION_JUMP" => "N",
                "AJAX_OPTION_STYLE" => "Y",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "Y",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "CHECK_DATES" => "Y",
                "DETAIL_URL" => "",
                "DISPLAY_BOTTOM_PAGER" => "Y",
                "DISPLAY_TOP_PAGER" => "N",
                "FIELD_CODE" => array("",""),
                "FILTER_NAME" => "",
                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                "IBLOCK_ID" => "4",
                "IBLOCK_TYPE" => "service",
                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
                "INCLUDE_SUBSECTIONS" => "Y",
                "MESSAGE_404" => "",
                "NEWS_COUNT" => "55",
                "PAGER_BASE_LINK_ENABLE" => "N",
                "PAGER_DESC_NUMBERING" => "N",
                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                "PAGER_SHOW_ALL" => "N",
                "PAGER_SHOW_ALWAYS" => "N",
                "PAGER_TEMPLATE" => ".default",
                "PAGER_TITLE" => "Новости",
                "PARENT_SECTION" => "",
                "PARENT_SECTION_CODE" => "",
                "PREVIEW_TRUNCATE_LEN" => "",
                "PROPERTY_CODE" => array("SERVICES_TYPE",""),
                "SET_BROWSER_TITLE" => "Y",
                "SET_LAST_MODIFIED" => "N",
                "SET_META_DESCRIPTION" => "Y",
                "SET_META_KEYWORDS" => "Y",
                "SET_STATUS_404" => "N",
                "SET_TITLE" => "Y",
                "SHOW_404" => "N",
                "SORT_BY1" => "ACTIVE_FROM",
                "SORT_BY2" => "SORT",
                "SORT_ORDER1" => "DESC",
                "SORT_ORDER2" => "ASC",
                "STRICT_SECTION_CHECK" => "N"
            )
        );

        $APPLICATION->IncludeFile(
            SITE_TEMPLATE_PATH . "/html/button_project.php",
            [],
            [
                "MODE" => "html",
            ]
        );

        ?>
    </div>
</main>

<?=require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>