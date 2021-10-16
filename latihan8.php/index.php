<?php
$baju = (object)[
    'nama'=> 'Kemeja',
    'bahan'=> [
        'wolfis'=>'campuran kain sutra',
        'katun'=>'serat alami dari kapas'
    ],
    'model' => [
        'Pria'=>'kemeja panjang',
        'cewek'=>'tunik'

    ],
    'ukuran' =>[
        'M'=>'50 X 70 ',
        'L'=>'52 X 72 ',
        'XL'=> '54 x 74'
    ],
    'harga' =>[
        'M'=>'Rp 100.000,-',
        'L'=> 'Rp 150.000,-',
        'XL'=>'Rp 200.000,-'

    ]

    ];

    //mengonversi data arrayy menjadi obbject
    $baju->bahan =(object)$baju->bahan;
    $baju->model=(object)$baju->model;
    $baju->ukuran=(object)$baju->ukuran;
    $baju->harga=(object)$baju->harga;

    //melihat object multidimensi
    echo "<pre>";
    print_r($baju);
    echo "<pre>";
    
    ?>