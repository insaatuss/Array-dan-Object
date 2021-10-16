<?php

$Fashion = (object) [
    'Barang' => 'Celana',
    'Jenis_Kain' => [
        'Katun' => 'Rayon',
        'Linen' => 'Halus',
        'Rayon' => 'Jersey',
    ],
    'ukuran' => [
        'S' => '25-28',
        'M' => '27-30',
        'L' => '30-32',
        'XL' => '32-35',
        'XXL' => '35-38',
    ],
    'harga' => [
        'Katun' => [
            'S' => '65.000',
            'M' => '75.000',
            'L' => '85.000',
            'XL' => '95.000',
            'XXL' => '105.000',
        ],
        'Linen' => [
            'S' => '45.000',
            'M' => '50.000',
            'L' => '55.000',
            'XL' => '60.000',
            'XXL' => '65.000',
        ],
        'Rayon' => [
            'S' => '50.000',
            'M' => '60.000',
            'L' => '70.000',
            'XL' => '80.000',
            'XXL' => '90.000',
        ]
    ]
];

//mengonversi data array ke object
$Fashion = (object)$Fashion;
$Fashion->jenis_Kain = (object)$Fashion->Jenis_Kain;
$Fashion->ukuran = (object)$Fashion->ukuran;
$Fashion->harga = (object)$Fashion->harga;
$Fashion->harga->Katun = (object)$Fashion->harga->Katun;
$Fashion->harga->Linen = (object)$Fashion->harga->Linen;
$Fashion->harga->Rayon = (object)$Fashion->harga->Rayon;


//melihat object multidimensi
echo "<pre>";
print_r($Fashion);
echo "<pre>"

?>