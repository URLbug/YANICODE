<?php

global $APPLICATION;

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

$APPLICATION->SetTitle("Услуги");

?>

<main class="website-workarea">
    <section class="banner banner_before54" style="background-image: url('<?=SITE_TEMPLATE_PATH?>/assets/images/banner_services.jpg');">
        <div class="banner-wrapper">
            <div class="container">
                <div class="banner__content">
                    <p><b class="text_gold">НАША МИССИЯ: </b>создаем и внедряем<br />
                        инновационные ценностные<br />
                        предложения и концепции, влияющие на<br />
                        формирование рынка потребительских<br />
                        предпочтений и способствующие<br />
                        достижению бизнес-целей</p>
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

    <div class="container">
        <h1 class="container-title">
            НАШИ УСЛУГИ
        </h1>
        <div class="services-cover">
            <div class="services">
                <h2 class="services__title">
                    БРЕНДИНГ
                </h2>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Аудит бренда</div>
                    <div class="services__item" data-popup="services-popup">Цлевая аудитория</div>
                    <div class="services__item" data-popup="services-popup">Позиционирование</div>
                    <div class="services__item" data-popup="services-popup">Концепция/Легенда</div>
                </div>
                <div class="services-category">
                    <a href="123/" class="services__item" data-popup="services-popup">Нейминг</a>
                    <div class="services__item" data-popup="services-popup">Логотип</div>
                    <div class="services__item" data-popup="services-popup">Регистрация товарного знака</div>
                    <div class="services__item" data-popup="services-popup">Фирменный стиль</div>
                    <div class="services__item" data-popup="services-popup">Бренд-бук</div>
                </div>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Дизайн-концепт упаковки</div>
                    <div class="services__item" data-popup="services-popup">Дизайн упаковки</div>
                    <div class="services__item" data-popup="services-popup">Digital</div>
                    <div class="services__item" data-popup="services-popup">Внедрение</div>
                </div>
            </div>

            <div class="services">
                <h2 class="services__title">
                    МАССОВЫЕ КОММУНИКАЦИИ
                </h2>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Аудит коммуникаций бренда</div>
                    <div class="services__item" data-popup="services-popup">Целевая аудитория</div>
                    <div class="services__item" data-popup="services-popup">Коммуникационная стратегият</div>
                    <div class="services__item" data-popup="services-popup">Креативный концепт</div>
                    <div class="services__item" data-popup="services-popup">Тактические рекламные кампании</div>
                    <div class="services__item" data-popup="services-popup">Медипланирование</div>
                </div>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Видеопродакшн</div>
                    <div class="services__item" data-popup="services-popup">Фотопродакшн</div>
                    <div class="services__item" data-popup="services-popup">Дизайн</div>
                </div>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Внедрение</div>
                    <div class="services__item" data-popup="services-popup">Сопровождение</div>
                </div>
            </div>

            <div class="services">
                <h2 class="services__title">
                    DIGITAL БРЕНДИНГ
                </h2>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Аудит ситуации</div>
                    <div class="services__item" data-popup="services-popup">Позиционирование</div>
                    <div class="services__item" data-popup="services-popup">Фирменный стиль</div>
                    <div class="services__item" data-popup="services-popup">Разработка уникального контента</div>
                    <div class="services__item" data-popup="services-popup">Фотосессия</div>
                    <div class="services__item" data-popup="services-popup">Видеовизитка</div>
                    <div class="services__item" data-popup="services-popup">Оформление соц сетей</div>
                    <div class="services__item" data-popup="services-popup">Контент-план</div>
                    <div class="services__item" data-popup="services-popup">Сайт</div>
                    <div class="services__item" data-popup="services-popup">Продвижение</div>
                </div>
            </div>

            <div class="services">
                <h2 class="services__title">
                    ЛИЧНЫЙ БРЕНД
                </h2>
                <div class="services-category">
                    <div class="services__item" data-popup="services-popup">Аудит ситуации</div>
                    <div class="services__item" data-popup="services-popup">Целевая аудитория</div>
                    <div class="services__item" data-popup="services-popup">Позиционирование</div>
                    <div class="services__item" data-popup="services-popup">Личная легенда </div>
                    <div class="services__item" data-popup="services-popup">Стратегия продвижения</div>
                    <div class="services__item" data-popup="services-popup">Оформление соцсетей</div>
                    <div class="services__item" data-popup="services-popup">Контент-план</div>
                    <div class="services__item" data-popup="services-popup">Фотосессия</div>
                    <div class="services__item" data-popup="services-popup">Подбор специалистов</div>
                    <div class="services__item" data-popup="services-popup">Сайт</div>
                </div>
            </div>
        </div>

        <div class="button-wrapper  button-wrapper_center">
            <div class="button button_gold button-open-calculate-project" data-popup="calculate-project-popup">
                РАССЧИТАТЬ ПРОЕКТ
            </div>
        </div>
    </div>

    <template id="popup-services">
        <div class="popup-services-cover">
            <div class="popup-services__title">
                БРЕНДИНГ
            </div>
            <div class="popup-services__category">
                Аудит бренда
            </div>
            <div class="popup-services__desc">
                <p>
                    Это диагностика его ключевых параметров и характеристик для понимания дальнейших путей развития. Прежде всего, он дает ответ на вопрос: что сохранить и что изменить при ребрендинге.
                </p>
                <p>
                    В базовой версии аудита мы анализируем восприятие бренда; целостность его образа в различных точках контакта с потребителем; заметность бренда в конкурентном окружении. Особое внимание мы уделяем анализу фирменного стиля и коммуникаций, поскольку это именно та сфера, в которой нам предстоит работать. По итогам аудита мы даем рекомендации по возможным направлениям развития фирменного стиля бренда.
                </p>
                <p>
                    Если на момент проведения аудита маркетинговая стратегия уже сформирована, мы сопоставляем цели и планы компании с текущим образом бренда.
                </p>
                <p>
                    В расширенных версиях может быть проведен анализ ассортиментного портфеля, пути потребителя, представленности в тех или иных каналах продаж и коммуникаций и т.д. Набор параметров для анализа определяется индивидуально для каждого проекта.
                </p>
            </div>
        </div>
    </template>
</main>

<?=require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>