<section class="banner banner_before1"
         style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/images/banner_blog.jpg');">

    <?php

    $APPLICATION->IncludeFile(
        INCLUDE_PATH . "/html/banner_index.php",
        [],
        [
            "MODE" => "html",
        ]
    );

    ?>

</section>