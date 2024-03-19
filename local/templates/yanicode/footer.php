<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}

?>

<footer class="footer">
    <div class="container">
        <div class="footer-wrapper">
            <a href="/" class="footer__logo">
                <img width="232" height="71" src="<?=SITE_TEMPLATE_PATH?>/assets/images/svg/logo-yanicode.svg" alt="yanicode">
            </a>
            <div class="footer__feedback">
                <div class="footer__mail">
                    <a href="mailto:<?php

                    $APPLICATION->IncludeFile(
                        INCLUDE_PATH . "/html/email.php",
                        [],
                        [
                            "SHOW_BORDER" => false,
                            "MODE" => "php",
                        ]
                    );

                    ?>">
                    <?php

                    $APPLICATION->IncludeFile(
                        INCLUDE_PATH . "/html/email.php",
                        [],
                        [
                            "MODE" => "text",
                        ]
                    );

                    ?>
                    </a>
                </div>
                <div class="footer__networks">
                    <a href="">
                        <svg width="40" height="40" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M25.7319 0C11.5434 0 0 11.5434 0 25.7319C0 39.9193 11.5434 51.4638 25.7319 51.4638C39.9193 51.4638 51.4638 39.9193 51.4638 25.7319C51.4638 11.5434 39.9214 0 25.7319 0ZM32.1312 26.6378H27.9448C27.9448 33.3262 27.9448 41.5591 27.9448 41.5591H21.7414C21.7414 41.5591 21.7414 33.406 21.7414 26.6378H18.7926V21.3641H21.7414V17.953C21.7414 15.51 22.9023 11.6926 28.0018 11.6926L32.5986 11.7103V16.8295C32.5986 16.8295 29.8053 16.8295 29.2622 16.8295C28.719 16.8295 27.9469 17.101 27.9469 18.266V21.3652H32.6732L32.1312 26.6378Z" fill="white" />
                        </svg>
                    </a>
                    <a href="">
                        <svg width="40" height="40" viewBox="0 0 53 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M31.3727 25.7319C31.3727 28.4521 29.1677 30.6571 26.4475 30.6571C23.7273 30.6571 21.5222 28.4521 21.5222 25.7319C21.5222 23.0117 23.7273 20.8066 26.4475 20.8066C29.1677 20.8066 31.3727 23.0117 31.3727 25.7319Z" fill="white" />
                                <path d="M37.9658 17.0177C37.729 16.3761 37.3513 15.7954 36.8605 15.3188C36.3839 14.828 35.8035 14.4503 35.1616 14.2135C34.6409 14.0113 33.8588 13.7706 32.4182 13.705C30.8598 13.634 30.3926 13.6187 26.4474 13.6187C22.5018 13.6187 22.0345 13.6336 20.4766 13.7046C19.036 13.7706 18.2534 14.0113 17.7332 14.2135C17.0912 14.4503 16.5105 14.828 16.0343 15.3188C15.5435 15.7954 15.1657 16.3758 14.9286 17.0177C14.7264 17.5384 14.4857 18.3209 14.4201 19.7615C14.3491 21.3194 14.3337 21.7867 14.3337 25.7323C14.3337 29.6775 14.3491 30.1448 14.4201 31.7031C14.4857 33.1437 14.7264 33.9259 14.9286 34.4465C15.1657 35.0885 15.5431 35.6688 16.0339 36.1454C16.5105 36.6362 17.0908 37.0139 17.7328 37.2507C18.2534 37.4533 19.036 37.694 20.4766 37.7596C22.0345 37.8306 22.5014 37.8456 26.447 37.8456C30.393 37.8456 30.8602 37.8306 32.4178 37.7596C33.8584 37.694 34.6409 37.4533 35.1616 37.2507C36.4502 36.7536 37.4687 35.7351 37.9658 34.4465C38.168 33.9259 38.4087 33.1437 38.4747 31.7031C38.5457 30.1448 38.5606 29.6775 38.5606 25.7323C38.5606 21.7867 38.5457 21.3194 38.4747 19.7615C38.4091 18.3209 38.1684 17.5384 37.9658 17.0177ZM26.4474 33.3192C22.2568 33.3192 18.8597 29.9225 18.8597 25.7319C18.8597 21.5413 22.2568 18.1446 26.4474 18.1446C30.6376 18.1446 34.0347 21.5413 34.0347 25.7319C34.0347 29.9225 30.6376 33.3192 26.4474 33.3192ZM34.3347 19.6178C33.3554 19.6178 32.5615 18.8238 32.5615 17.8446C32.5615 16.8654 33.3554 16.0715 34.3347 16.0715C35.3139 16.0715 36.1078 16.8654 36.1078 17.8446C36.1074 18.8238 35.3139 19.6178 34.3347 19.6178Z" fill="white" />
                                <path d="M26.4475 0C12.2383 0 0.715576 11.5227 0.715576 25.7319C0.715576 39.941 12.2383 51.4638 26.4475 51.4638C40.6566 51.4638 52.1793 39.941 52.1793 25.7319C52.1793 11.5227 40.6566 0 26.4475 0ZM41.1341 31.8236C41.0626 33.3966 40.8125 34.4704 40.4473 35.4104C39.6797 37.3952 38.1107 38.9641 36.126 39.7318C35.1864 40.0969 34.1121 40.3466 32.5396 40.4185C30.964 40.4903 30.4606 40.5076 26.4478 40.5076C22.4347 40.5076 21.9317 40.4903 20.3557 40.4185C18.7832 40.3466 17.7089 40.0969 16.7693 39.7318C15.783 39.3607 14.8902 38.7792 14.152 38.0273C13.4005 37.2896 12.819 36.3963 12.448 35.4104C12.0828 34.4708 11.8327 33.3966 11.7612 31.824C11.6886 30.248 11.6717 29.7446 11.6717 25.7319C11.6717 21.7191 11.6886 21.2158 11.7609 19.6401C11.8323 18.0672 12.082 16.9933 12.4472 16.0534C12.8182 15.0675 13.4001 14.1742 14.152 13.4364C14.8898 12.6845 15.783 12.103 16.7689 11.732C17.7089 11.3669 18.7828 11.1171 20.3557 11.0453C21.9313 10.9734 22.4347 10.9562 26.4475 10.9562C30.4602 10.9562 30.9636 10.9734 32.5392 11.0457C34.1121 11.1171 35.186 11.3669 36.126 11.7316C37.1119 12.1027 38.0051 12.6845 38.7433 13.4364C39.4948 14.1746 40.0767 15.0675 40.4473 16.0534C40.8129 16.9933 41.0626 18.0672 41.1344 19.6401C41.2063 21.2158 41.2232 21.7191 41.2232 25.7319C41.2232 29.7446 41.2063 30.248 41.1341 31.8236Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="51.4638" height="51.4638" fill="white" transform="translate(0.715576)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <a href="">
                        <svg width="40" height="40" viewBox="0 0 52 52" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0)">
                                <path d="M22.9578 30.5527L31.328 25.7319L22.9578 20.9111V30.5527Z" fill="white" />
                                <path d="M26.1628 0C11.9536 0 0.430908 11.5227 0.430908 25.7319C0.430908 39.941 11.9536 51.4638 26.1628 51.4638C40.3719 51.4638 51.8947 39.941 51.8947 25.7319C51.8947 11.5227 40.3719 0 26.1628 0ZM42.2413 25.7582C42.2413 25.7582 42.2413 30.9767 41.5793 33.4931C41.2083 34.8705 40.1222 35.9566 38.7449 36.3272C36.2284 36.9896 26.1628 36.9896 26.1628 36.9896C26.1628 36.9896 16.1234 36.9896 13.5807 36.3009C12.2034 35.9302 11.1173 34.8438 10.7463 33.4664C10.0839 30.9767 10.0839 25.7319 10.0839 25.7319C10.0839 25.7319 10.0839 20.5137 10.7463 17.9973C11.1169 16.6199 12.2297 15.5072 13.5807 15.1366C16.0971 14.4742 26.1628 14.4742 26.1628 14.4742C26.1628 14.4742 36.2284 14.4742 38.7449 15.1629C40.1222 15.5335 41.2083 16.6199 41.5793 17.9973C42.268 20.5137 42.2413 25.7582 42.2413 25.7582Z" fill="white" />
                            </g>
                            <defs>
                                <clipPath id="clip0">
                                    <rect width="51.4638" height="51.4638" fill="white" transform="translate(0.430908)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
                <div class="footer__phone">
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
            <div class="footer__law">
                <?php

                $APPLICATION->IncludeFile(
                    INCLUDE_PATH . "/html/licension.php",
                    [],
                    [
                        "MODE" => "html",
                    ]
                );
                ?>
            </div>
        </div>
    </div>
</footer>

<?php

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
