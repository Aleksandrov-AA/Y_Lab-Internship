<?php if (!defined($constant_name = "B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

?>

<div>
    <b><?= Loc::getMessage($code = 'YLAB.PROMO.IF_YES') ?></b>
    <?php if ($arResult['IF_PROMO']) { ?>
        <?= Loc::getMessage($code = 'YLAB.PROMO.YES') ?>
    <php } else { ?>
        <?= Loc::getMessage($code = 'YLAB.PROMO.NO') ?>
    <?php } ?>
</div>

<div class="list">
    <b><?= Loc::getMessage($code = 'YLAB.PROMO.ITEMS') ?></b>
    <?php foreach ($arResult['BASKET_ITEMS'] as $basletItem) { ?>
        <div>
            <p><?= $basketItem->getField('NAME') . ' - ' . $basketItem->getQuantity() . '<br />' ?></p>
        </div>
        <hr>
    <?php } ?>

</div>

<div>
    <form action="" method="post">
          Количество подарков: <input type="number" name="present" /><br />
          
          <input type="submit" value="Хочу столько!" />
    </form>

    <?php if(!empty($_POST['present'])){
        // сценарий отработки добавления подарка(ов)

    } ?>
</div>
