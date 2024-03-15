<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}

$APPLICATION->IncludeFile(
        SITE_TEMPLATE_PATH . "/html/footer.php",
        [],
        [
            "MODE" => "html",
        ]
);

$APPLICATION->IncludeComponent(
    "bitrix:form.result.new",
    "yanicode_form_result",
    Array(
        "CACHE_TIME" => "3600",
        "CACHE_TYPE" => "A",
        "CHAIN_ITEM_LINK" => "",
        "CHAIN_ITEM_TEXT" => "",
        "EDIT_URL" => "",
        "IGNORE_CUSTOM_TEMPLATE" => "N",
        "LIST_URL" => "",
        "SEF_MODE" => "N",
        "SUCCESS_URL" => "/services/success.php",
        "USE_EXTENDED_ERRORS" => "N",
        "VARIABLE_ALIASES" => array("RESULT_ID" => "RESULT_ID", "WEB_FORM_ID" => "WEB_FORM_ID"),
        "WEB_FORM_ID" => "1"
    )
);

?>

</body>

</html>
