<?php

if(!defined("B_PROLOG_INCLUDED") || !B_PROLOG_INCLUDED)
{
    die();
}

if(!empty($arResult)):
?>
<nav class="nav-list">
    <a href="/" class="nav-list__item">ГЛАВНАЯ</a>

    <?php

    foreach($arResult as $arItem)
    {
        if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
        {
            continue;
        }

        echo '<a href="' . $arItem["LINK"] . '" class="nav-list__item">' . $arItem["TEXT"] . '</a>';
    }
    ?>

</nav>
<?php

endif;

?>