<?php

namespace Ylab;

class Helpers
{
    public static function getIBlockIdByCode($code)
    {
        if (!\Bitrix\Main\Loader::includeModule($moduleName ='iblock')) {  // Возможно в moduleName нужна $ и =
            return;
        }
        $IB = \Bitrix\Iblock\IblockTable::getList([
            'select' => ['ID'],
            'filter' => ['CODE' => $code],
            'limit' => '1',
            'cache' => ['ttl' => 3600],
        ]);
        $return = $IB->fetch();
        if (!$return) {
            throw new \Exception($message = 'IBlock with code"' . $code . '" not found');
        }

        return $return['ID'];
    }
}