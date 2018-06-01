<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>
    <section class="section section-alt">
        <div id="map"><?$APPLICATION->IncludeComponent(
                "bitrix:map.yandex.view",
                "contactmap",
                array(
                    "CONTROLS" => array(
                        0 => "ZOOM",
                        1 => "MINIMAP",
                        2 => "TYPECONTROL",
                        3 => "SCALELINE",
                    ),
                    "INIT_MAP_TYPE" => "MAP",
                    "MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:41.283203543028584;s:10:\"yandex_lon\";d:69.26644907359605;s:12:\"yandex_scale\";i:19;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:69.266436668339;s:3:\"LAT\";d:41.283222512394;s:4:\"TEXT\";s:6:\"Micros\";}}}",
                    "MAP_HEIGHT" => "500",
                    "MAP_ID" => "",
                    "0" => "800",
                    "OPTIONS" => array(
                        0 => "ENABLE_SCROLL_ZOOM",
                        1 => "ENABLE_DBLCLICK_ZOOM",
                        2 => "ENABLE_DRAGGING",
                    ),
                    "COMPONENT_TEMPLATE" => "contactmap",
                    "MAP_WIDTH" => "1250"
                ),
                false
            );?></div>
    </section>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>