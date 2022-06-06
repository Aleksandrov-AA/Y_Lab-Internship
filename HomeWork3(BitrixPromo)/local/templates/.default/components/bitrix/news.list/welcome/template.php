<?php if (!defined($constant_name = "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<div class="news-list">
    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
        <p class="news-item" id="">
            ФИО клиента: <?= $arItem['PROPERTIES']['NAME']['VALUE'] ?>
        </p>
        <p class="news-item" id="">
            Телефон: <?= $arItem['PROPERTIES']['PHONE']['VALUE'] ?>
        </p>
        <p class="news-item" id="">
            Адрес: <?= $arItem['PROPERTY_ADDRESS_PROPERTY_CITY_VALUE'] ?>
                   <?= $arItem['PROPERTY_ADDRESS_PROPERTY_STREET_VALUE'] ?>
                   <?= $arItem['PROPERTY_ADDRESS_PROPERTY_HOUSE_VALUE'] ?>
                   <?= $arItem['PROPERTY_ADDRESS_PROPERTY_FLAT_VALUE'] ?>
        </p>
        <!-- <p class="news-item" id="">
            Город: <?= $arItem['PROPERTIES']['CITY']['VALUE']; ?>
        </p>
        <p class="news-item" id="">
            Улица: <?= $arItem['PROPERTIES']['STREET']['VALUE']; ?>
        </p>
        <p class="news-item" id="">
            Номер дома: <?= $arItem['PROPERTIES']['HOUSE']['VALUE']; ?>
        </p> -->
    <?php } ?>
</div>