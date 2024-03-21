<section class="banner banner_before54"
         style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/images/banner_blog.jpg');">
    <?php

    $APPLICATION->IncludeFile(
        INCLUDE_PATH . "/html/services/banner_service.php",
        [],
        [
            "MODE" => "html",
        ]
    );

    ?>
</section>
