<?php

function debug($text) {
    echo '<pre>' . print_r($text, 1) . '</pre';
}

$array = [

'SKLAD1' => [

    'EDA' => [

        'TOVAR1' => [

            'NAME' => '....',

            'PRICE' => 5555 //1234 везде равные, поменяю на разные для проверки

        ],

        'TOVAR2' => [

            'NAME' => '....',

            'PRICE' => 1234

        ],

        // и т.д.

    ],

    'NAPITKI' => [

        'TOVAR55' => [

            'NAME' => '....',

            'PRICE' => 3333

        ],

        'TOVAR54' => [

            'NAME' => '....',

            'PRICE' => 1111

        ],

        // и т.д.

    ],

    // и т.д.

],

'SKLAD2' => [

    'EDA' => [

        'TOVAR66' => [

            'NAME' => '....',

            'PRICE' => 1515

        ],

        'TOVAR67' => [

            'NAME' => '....',

            'PRICE' => 7777

        ],

        // и т.д.

    ],

    'NAPITKI' => [

        'TOVAR77' => [

            'NAME' => '....',

            'PRICE' => 8888

        ],

        'TOVAR78' => [

            'NAME' => '....',

            'PRICE' => 7875

        ],

        // и т.д.

    ],

    // и т.д.

],

// и т.д.

];

function mySort($key) {
    return function($a, $b) use ($key) {
        return $a[$key] <=> $b[$key];
    };
}



usort($array, mySort('PRICE'));

debug($array);


