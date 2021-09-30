<?php
$berakaian = (object)[
    'kepala' => [
        'topi' => [
            'jenis1' => 'Trilby',
            'jenis2' => 'Dad Hat',
            'jenis3' => 'Newsboy',
            'jenis4' => 'Beanie'
        ],
        'peci' => [
            'jenis1' => 'Peci Havi',
            'jenis2' => 'Peci Mercan',
            'jenis3' => 'Peci Samase',
            'jenis4' => 'Peci Wadimor'
        ],
        'tidak_memili' => 'none'
    ],
    'baju' => [
        'kaos' => [
            'pendek' => [
                'jenis1' => 'Kaos Polos O-Neck',
                'jenis2' => 'Kaos Polo',
                'jenis3' => 'Kaos Distro'
            ],
            'panjang' => [
                'jenis1' => 'Kaos Raglan',
                'jenis2' => 'Long Sleeve Shirt',
                'jenis3' => 'Kaos Berkancing'
            ]
        ],
        'kemeja' => [
            'umum' => [
                'pendek' => [
                    'jenis1' => 'Camp-collar short sleeve shirt',
                    'jenis2' => 'Kemeja Print',
                    'jenis3' => 'Camp Shirt',
                    'jenis4' => 'Guayabera'
                ],
                'panjang' => [
                    'jenis1' => 'Oxford shirt',
                    'jenis2' => 'Flannel shirt',
                    'jenis3' => 'Cotton twill overshirt',
                    'jenis4' => 'Denim shirt'
                ],
            ],
            'muslim' => [
                'jenis1' => 'Baju muslim kurta',
                'jenis2' => 'Baju Takwa',
                'jenis3' => 'Baju Koko',
                'jenis4' => 'Baju Koko Panjang',
                'jenis5' => 'Baju Koko 3/4'
            ]
        ],
        'jaket' => [
            'jenis1' => 'Hoodie',
            'jenis2' => 'Jaket Kulit',
            'jenis3' => 'Jaket trucker',
            'jenis4' => 'Jaket denim '
        ],
        'jas' => [
            'jenis1' => 'Dinner Suits',
            'jenis2' => 'Single Breasted',
            'jenis3' => 'Ornith Black Suit'
        ],
        'tidak_memili' => 'none'
    ],
    'tangan' => [
        'jam' => [
            'jenis1' => 'Jam Tangan Klasik',
            'jenis2' => 'Jam Tangan Sporty',
            'jenis3' => 'Jam Tangan Pintare',
            'jenis4' => 'Jam Tangan Formal'
        ],
        'tidak_memili' => 'none'
    ],
    'celana' => [
        'celana_panjang' => [
            'jenis1' => 'Straight cut',
            'jenis2' => 'Skinny Fit',
            'jenis3' => 'Boot Cut',
            'jenis4' => 'Slim Fit',
            'jenis5' => 'Joger'
        ],
        'celana_pendek' => [
            'jenis1' => 'unisex Duraking',
            'jenis2' => 'surfing',
            'jenis3' => 'pleated',
            'jenis4' => 'jeans pendek',
        ],
        'celana_olahraga' => [
            'jenis1' => 'Slacks',
            'jenis2' => 'Adidas zne',
            'jenis3' => 'Adidas Workout Pant WV',
            'jenis4' => 'Cotton On',
            'jenis5' => 'Puma'
        ],
        'sarung' => [
            'jenis1' => 'Rabbani',
            'jenis2' => 'Al Hidayah Ronaco',
            'jenis3' => 'Intresse Gunpowder'
        ],
        'tidak_memili' => 'none'
    ],
    'kaki' => [
        'sandal' => [
            'jenis1' => 'Birkenstock',
            'jenis2' => 'Flip Flop',
            'jenis3' => 'Shower Slides',
            'jenis4' => 'Sandal Gunung'
        ],
        'sepatu_olahraga' => [
            'jenis1' => 'Sepatu Gym',
            'jenis2' => 'Sepatu Hikingn',
            'jenis3' => 'Sepatu Futsale',
            'jenis4' => 'Sepatu Larir'
        ],
        'sepatu_kerja' => [
            'jenis1' => 'Penny loafers',
            'jenis2' => 'Moccasin shoes',
            'jenis3' => 'lain toe',
            'jenis4' => 'Oxford'
        ],
        'sepatu_santai' => [
            'jenis1' => 'Sneakers',
            'jenis2' => 'Slip on',
            'jenis3' => 'Boat Shoes',
            'jenis4' => 'Navara'
        ],
        'tidak_memili' => 'none'
    ],
];

$berakaian = (array)$berakaian;

echo "<pre>";
print_r($berakaian);
echo "<pre>";

echo "<h3>Pemagilan Index sesuai yang dibutukan saja</h3>";

echo 'Kepala =' . $berakaian['kepala']['topi']['jenis2'] . '<br>';
echo 'Baju =' .  $berakaian['baju']['kemeja']['umum']['panjang']['jenis2'] . '<br>';
echo 'Tangan =' . $berakaian['tangan']['jam']['jenis1'] . '<br>';
echo 'Celana =' . $berakaian['celana']['celana_panjang']['jenis2'] . '<br>';
echo 'Kaki =' . $berakaian['kaki']['sepatu_santai']['jenis1'] . '<br>';
