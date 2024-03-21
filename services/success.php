<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("SUCCESS");
?>
<section class="banner banner_before54" style="background-image: url('./assets/images/banner_services.jpg');">
    <div class="banner-wrapper">
        <div class="container">
            <div class="banner__content">
                <?php

                $APPLICATION->IncludeFile(
                    INCLUDE_PATH . "/html/services/success.php",
                    [],
                    [
                        "MODE" => "html",
                    ]
                );

                echo '<a href="/">';

                $APPLICATION->IncludeFile(
                    INCLUDE_PATH . "/html/services/button_success.php",
                    [],
                    [
                        "MODE" => "text",
                    ]
                );

                echo '</a>';

                ?>

            </div>
        </div>
    </div>
</section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>