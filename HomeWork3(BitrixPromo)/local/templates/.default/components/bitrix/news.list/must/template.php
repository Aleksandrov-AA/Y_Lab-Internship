<?php if (! defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>

<?php if (! empty($arResult)) {
    $arFilter = ['IBLOCK_ID' => 4];
    $arSelectFields = [
        'ID',
        'PROPERTY_CITY',
        'PROPERTY_STREET',
        'PROPERTY_HOUSE',
        'PROPERTY_FLAT',
    ];
    $addressesFromBD = CIBlockElement::GetList(
        false,
        $arFilter,
        false,
        false,
        $arSelectFields,
    );
    while($item = $addressesFromBD->GetNext()){
        $addresses[$item['ID']] = $item;
    } ?>
    <table class="table m-0">
        <thead>
            <tr>
                <th>№</th>
                <th>ФИО</th>
                <th>Телефон</th>
                <th>Город</th>
                <th>Улица</th>
                <th>Дом</th>
                <th>Квартира</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($arResult['ITEMS'] as $item) { ?>
            <tr>
                <th scope="row"><?=$item['ID'];?></th>
                <td><?=$item['PROPERTIES']['FULLNAME']['VALUE'];?></td>
                <td><?=$item['PROPERTIES']['PHONE']['VALUE'];?></td>
                <td><?=$addresses[$item['PROPERTIES']['ADDRESS']['VALUE']]['PROPERTY_CITY_VALUE'];?></td>
                <td><?=$addresses[$item['PROPERTIES']['ADDRESS']['VALUE']]['PROPERTY_STREET_VALUE'];?></td>
                <td><?=$addresses[$item['PROPERTIES']['ADDRESS']['VALUE']]['PROPERTY_HOUSE_VALUE'];?></td>
                <td><?=$addresses[$item['PROPERTIES']['ADDRESS']['VALUE']]['PROPERTY_FLAT_VALUE'];?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }