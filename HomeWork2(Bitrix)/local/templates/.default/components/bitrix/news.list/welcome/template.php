<?php if (!defined($constant_name = "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

?>
<div class="news-list">
    <?php foreach ($arResult['ITEMS'] as $arItem) { ?>
        <p class="news-item" id="">
            ФИО клиента: <?= $arItem['PROPERTIES']['FULLNAME']['VALUE']; ?>
        </p>
        <p class="news-item" id="">
            Телефон: <?= $arItem['PROPERTIES']['PHONE']['VALUE']; ?>
        </p>
        <p class="news-item" id="">
            Адрес: <?= $arItem['PROPERTIES']['ADRESS']['VALUE']; ?>
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