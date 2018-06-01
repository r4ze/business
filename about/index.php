<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("О нас");
?>

    <section class="section section-padded">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="section-header">
                    <h1>
                        Руководство
                    </h1>
                </div>
            </div>
            <div class="row-fluid">
                <?
                $renderImage =
                    CFile::ResizeImageGet($arItem["PREVIEW_PICTURE"],
                        Array("width" => "434", "height" => "434"),
                        BX_RESIZE_IMAGE_EXACT,
                        false);
                ?>
                <div class="span6">
                    <img alt="some image" class="push-bottom" src="/media/i/assets/people/woman-2-800x800.jpg">
                </div>
                <div class="span6">
                    <p class="lead">
                        Pellentesque vulputate blandit condimentum. Etiam <strong>porttitor</strong> laoreet velit, quis mollis libero eleifend id. Sed in hendrerit libero. Donec vulputate placerat libero, sed convallis justo venenatis eu. Mauris ante ligula, consequat id <strong>condimentum</strong> at, ullamcorper sit amet justo. Sed odio sem, sodales vel tempor sed, sollicitudin et ipsum.
                    </p>
                    <ul class="icons lead icons-small">
                        <li>
                            <i class="icon-ok gray"></i>
                            Donec velit augue
                        </li>
                        <li>
                            <i class="icon-ok gray"></i>
                            Pellentesque vulputate blandit
                        </li>
                        <li>
                            <i class="icon-ok gray"></i>
                            Ullamcorper sit amet
                        </li>
                        <li>
                            <i class="icon-ok gray"></i>
                            Etiam porttitor laoreet
                        </li>
                        <li>
                            <i class="icon-ok gray"></i>
                            Sollicitudin et ipsum
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Our people -->
    <section class="section section-alt section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Наша команда
                </h1>
            </div>
            <ul class="unstyled row-fluid">
                <?$APPLICATION->IncludeComponent("bitrix:news.list", "ourCompany", Array(
                    "COMPONENT_TEMPLATE" => ".default",
                    "IBLOCK_TYPE" => "2",	// Тип информационного блока (используется только для проверки)
                    "IBLOCK_ID" => "4",	// Код информационного блока
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
                        0 => "FACEBOOK",
                        1 => "GOOGLE",
                        2 => "PINTEREST",
                        3 => "TWITTER",
                        4 => "OFFICE",
                        5 => "",
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
    </section>
    <!-- Join us -->
    <section class="section section-padded">
        <div class="container-fluid">
            <div class="section-header">
                <h1>
                    Хотите в команду?
                </h1>
            </div>
            <p class="lead text-center">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Cras lobortis congue tempus. Mauris non justo nec arcu suscipit lacinia aliquet sed purus.
            </p>

        </div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>