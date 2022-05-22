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

function myArraySort (&$input) {
	$firstItem = reset($input);
	if (isset($firstItem['PRICE'])) {
		usort($input, function ($item_a, $item_b) {
			return ($item_a['PRICE'] < $item_b['PRICE']) ? -1 : 1; // ASC (по возрастанию)
			// return ($item_a['PRICE'] < $item_b['PRICE']) ? 1 : -1; // DESC (по убыванию)
		});
		return;
	}
	array_walk($input, 'myArraySort');
}

array_walk($array, 'myArraySort');
debug($array);
