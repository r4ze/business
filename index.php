<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Главная");
?>
    <body>

        <!-- Page Header -->
        <!-- Main Content -->

            <!-- Our Services -->
            <section class="section section-padded">
                <div class="container-fluid">
                    <div class="row-fluid">
                        <div class="section-header">
                            <h1>
                                Наши услуги
                            </h1>
                        </div>
                        <ul class="unstyled row-fluid">
                            <?$APPLICATION->IncludeComponent("bitrix:news.list", "indexserv", Array(
                                "COMPONENT_TEMPLATE" => ".default",
                                "IBLOCK_TYPE" => "2",	// Тип информационного блока (используется только для проверки)
                                "IBLOCK_ID" => "2",	// Код информационного блока
                                "NEWS_COUNT" => "20",	// Количество новостей на странице
                                "SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
                                "SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
                                "SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
                                "SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
                                "FILTER_NAME" => "",	// Фильтр
                                "FIELD_CODE" => array(	// Поля
                                    0 => "",
                                    1 => "",
                                ),
                                "PROPERTY_CODE" => array(	// Свойства
                                    0 => "",
                                    1 => "",
                                ),
                                "CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
                                "DETAIL_URL" => "",	// URL страницы детального просмотра (по умолчанию - из настроек инфоблока)
                                "AJAX_MODE" => "N",	// Включить режим AJAX
                                "AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
                                "AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
                                "AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
                                "AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
                                "CACHE_TYPE" => "A",	// Тип кеширования
                                "CACHE_TIME" => "36000000",	// Время кеширования (сек.)
                                "CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
                                "CACHE_GROUPS" => "Y",	// Учитывать права доступа
                                "PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
                                "ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
                                "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
                                "SET_BROWSER_TITLE" => "Y",	// Устанавливать заголовок окна браузера
                                "SET_META_KEYWORDS" => "Y",	// Устанавливать ключевые слова страницы
                                "SET_META_DESCRIPTION" => "Y",	// Устанавливать описание страницы
                                "SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
                                "ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
                                "PARENT_SECTION" => "",	// ID раздела
                                "PARENT_SECTION_CODE" => "",	// Код раздела
                                "INCLUDE_SUBSECTIONS" => "Y",	// Показывать элементы подразделов раздела
                                "STRICT_SECTION_CHECK" => "N",	// Строгая проверка раздела для показа списка
                                "DISPLAY_DATE" => "Y",	// Выводить дату элемента
                                "DISPLAY_NAME" => "Y",	// Выводить название элемента
                                "DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
                                "DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
                                "PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
                                "DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
                                "DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
                                "PAGER_TITLE" => "Новости",	// Название категорий
                                "PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
                                "PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
                                "PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
                                "PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
                                "SET_STATUS_404" => "N",	// Устанавливать статус 404
                                "SHOW_404" => "N",	// Показ специальной страницы
                                "MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
                            ),
                                false
                            );?>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- Our work -->
            <section class="section section-alt section-padded">
                <div class="container-fluid">
                    <div class="section-header">
                        <h1>
                            Последние работы
                        </h1>
                    </div>
                    <div class="row-fluid">
                        <div class="span6">
                            <div class="flexslider margin-bottom" data-flex-directions="hide" data-flex-speed="10000" id="work">
                                <ul class="slides">
                                    <li>
                                        <img alt="some image" src="/media/i/assets/devices/imac-2.png">
                                    </li>
                                    <li>
                                        <img alt="some image" src="/media/i/assets/devices/macbook.png">
                                    </li>
                                    <li>
                                        <img alt="some image" src="/media/i/assets/devices/ipad.png">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="span6">
                            <ul class="icons">
                                <li>
                                    <h4>
                                        <a href="portfolio.html">
                                            <i class="icon-twitter"></i>
                                            Разработка социальных приложений
                                        </a>
                                    </h4>
                                    <p>
                                        Quisque et risus in lectus fringilla consectetur. In quis semper lacus. Pellentesque sed magna quis risus placerat tempor vel non lacus.
                                    </p>
                                </li>
                                <li>
                                    <h4>
                                        <a href="portfolio.html">
                                            <i class="icon-heart"></i>
                                            Приложения, которые заитересуют ваших клиентов
                                        </a>
                                    </h4>
                                    <p>
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Duis consectetur venenatis ante in adipiscing.
                                    </p>
                                </li>
                                <li>
                                    <h4>
                                        <a href="portfolio.html">
                                            <i class="icon-cog"></i>
                                            Инновации для перехода на следующий уровень
                                        </a>
                                    </h4>
                                    <p>
                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Etiam ultrices pretium nibh, ac mollis lacus congue vel.
                                    </p>
                                </li>
                                <li>
                                    <h4>
                                        <a href="portfolio.html">
                                            <i class="icon-leaf"></i>
                                            Красивый дизайн
                                        </a>
                                    </h4>
                                    <p>
                                        Nunc vitae nulla urna. Integer feugiat mauris at massa egestas vel eleifend sem commodo. Suspendisse non ante ut lacus venenatis cursus.
                                    </p>
                                </li>
                                <li>
                                    <h4>
                                        <a href="portfolio.html">
                                            <i class="icon-magic"></i>
                                            Дизайн, который имеет некоторые магии ИТ
                                        </a>
                                    </h4>
                                    <p>
                                        Nam sodales tincidunt diam, ut accumsan augue molestie eget. Nullam euismod molestie elit ut tempus.
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>


    <!-- Page Footer -->

    <script src="javascripts/jquery.min.js" type="text/javascript"></script>
    <script src="javascripts/bootstrap.js" type="text/javascript"></script>
    <script src="javascripts/jquery.flexslider-min.js" type="text/javascript"></script>
    <script src="javascripts/jquery.tweet.js" type="text/javascript"></script>
    <script src="javascripts/jquery.fancybox.pack.js" type="text/javascript"></script>
    <script src="javascripts/jquery.fancybox-media.js" type="text/javascript"></script>
    <script src="javascripts/script.js" type="text/javascript"></script>
    <script type="text/javascript">
        if (typeof gaJsHost == 'undefined') {
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        }
    </script>
    <script type="text/javascript">
        try {
            var pageTracker = _gat._getTracker("#########");
            pageTracker._trackPageview();
        } catch(err) {}</script>
    </body>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>