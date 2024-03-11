<?php

global $APPLICATION;

require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");

$APPLICATION->SetTitle("YANICODE");

?>

<main class="website-workarea">

    <section class="banner banner_before1" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/images/banner_blog.jpg');">
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner__content">
                    <p>Более 20-ти лет управляю<br />
                        творческими проектами в<br />
                        брендинге.</p>
                    <p><b class="text_gold">
                            Моя личная миссия: </b>делать<br />
                        вас богаче, а ваших<br />
                        клиентов счастливее!</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="stages">
                <div class="stages__item">
                    <div class="stages__step">01</div>
                    <div class="stages__desc-step">АУДИТ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">02</div>
                    <div class="stages__desc-step">СТРАТЕГИЯ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">03</div>
                    <div class="stages__desc-step">КОНЦЕПЦИЯ</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">04</div>
                    <div class="stages__desc-step">ДИЗАЙН</div>
                </div>
                <div class="stages__item">
                    <div class="stages__step">05</div>
                    <div class="stages__desc-step">КОММУНИКАЦИИ</div>
                </div>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="blog-list">
            <a href="./blog-details.html" class="blog">
                <div class="blog__img">
                    <img width="100%" height="100%" src="<?=SITE_TEMPLATE_PATH?>/assets/images/test_blog-img1.jpg" alt="">
                </div>
                <div class="blog__desc">
                    <div class="blog__title">
                        Что такое продакш-студия и для чего она нужна?
                    </div>
                    <div class="blog__date">
                        07.12.2020
                    </div>
                    <div class="blog_article">
                        Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения. Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения.
                    </div>
                </div>
            </a> <a href="./blog-details.html" class="blog">
                <div class="blog__img">
                    <img width="100%" height="100%" src="<?=SITE_TEMPLATE_PATH?>/assets/images/test_blog-img2.jpg" alt="">
                </div>
                <div class="blog__desc">
                    <div class="blog__title">
                        Личный бренд и что такое продакш- студия
                    </div>
                    <div class="blog__date">
                        07.12.2020
                    </div>
                    <div class="blog_article">
                        Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения. Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения.
                    </div>
                </div>
            </a> <a href="./blog-details.html" class="blog">
                <div class="blog__img">
                    <img width="100%" height="100%" src="<?=SITE_TEMPLATE_PATH?>/assets/images/test_blog-img3.jpg" alt="">
                </div>
                <div class="blog__desc">
                    <div class="blog__title">
                        Что такое продакш-студия и для чего она нужна?
                    </div>
                    <div class="blog__date">
                        07.12.2020
                    </div>
                    <div class="blog_article">
                        Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения. Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения.
                    </div>
                </div>
            </a> <a href="./blog-details.html" class="blog">
                <div class="blog__img">
                    <img width="100%" height="100%" src="<?=SITE_TEMPLATE_PATH?>/assets/images/test_blog-img4.jpg" alt="">
                </div>
                <div class="blog__desc">
                    <div class="blog__title">
                        Личный бренд и что такое продакш- студия
                    </div>
                    <div class="blog__date">
                        07.12.2020
                    </div>
                    <div class="blog_article">
                        Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения. Визуальный брендинг тематического ресторана «Базилик»: разработка логотипа, дизайн-концепт фирменного стиля и проработка его в носителях, таких как вывески, дизайн меню и карты вин, плейсметы, а также авторский надзор на стадии внедрения.
                    </div>
                </div>
            </a>
        </div>
    </section>
</main>

<?=require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>
