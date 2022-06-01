<?php
require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
$APPLICATION->SetTitle($title = "Выполнение ДЗ");
?>

<?php
$APPLICATION->IncludeComponent(
    $componentName = "bitrix:news.list",
    $componentTemplate = "welcome",
    Array (
        "IBLOCK_TYPE" => "contacts",
        "IBLOCK_ID" => "4",

        // "PROPERTY_CODE" => ["", ""],
        
        "PROPERTY_CODE" => array(
			0 => "",
			1 => "ФИО",
			2 => "Телефон",
			3 => "Адрес",
			4 => "Город",
            5 => "Улица",
            6 => "Номер дома",
            7 => "Номер квартиры",
            8 => "",
		),
        "COMPONENT_TEMPLATE" => "contacts",
        

        
        "PAGER_TITLE" => "Контакты",

        "DISPLAY_DATE" => "Y",
        "DISPLAY_NAME" => "Y",
        "DISPLAY_PICTURE" => "N",
        "DISPLAY_PREVIEW_TEXT" => "Y",
        "NEWS_COUNT" => "3",
        "SORT_BY1" => "ACTIVE_FROM",
        "SORT_ORDER1" => "DESC",
        "SORT_BY2" => "SORT",
        "SORT_ORDER2" => "ASC",
        "FILTER_NAME" => "",
        "FIELD_CODE" => ["", ""],

        "DETAIL_URL" => "",
        "PREVIEW_TRUNCATE_LEN" => "0",
        "ACTIVE_DATE_FORMAT" => "d.m.Y",
        "DISPLAY_PANEL" => "N",
        "SET_TITLE" => "N",
        "INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
        "CACHE_TIME" => "3600",
        "CACHE_FILTER" => "N",
        "DISPLAY_TOP_PAGER" => "N",
        "DISPLAY_BOTTOM_PAGER" => "N",
        "PAGER_SHOW_ALWAYS" => "N",
        "PAGER_TEMOLATE" => "",
        "PAGER_DESC_NUMBERING" => "N",
        "PAGER_SHOW_ALL" => "N"    
    ),
    false
);
?>

<?php require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php'; ?>