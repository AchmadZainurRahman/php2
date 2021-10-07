<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>php2</title>
</head>
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

// pemangilan bila array
// echo "<h3>Pemagilan Index sesuai yang dibutukan saja</h3>";
// echo "<h3>Memili Pakaian</h3>";
// echo 'Kepala =' . $berakaian['kepala']['topi']['jenis2'] . '<br>';
// echo 'Baju =' .  $berakaian['baju']['kemeja']['umum']['panjang']['jenis2'] . '<br>';
// echo 'Tangan =' . $berakaian['tangan']['jam']['jenis1'] . '<br>';
// echo 'Celana =' . $berakaian['celana']['celana_panjang']['jenis2'] . '<br>';
// echo 'Kaki =' . $berakaian['kaki']['sepatu_santai']['jenis1'] . '<br>';

//    pemangilan objek
// echo "<h3>Pemagilan Index sesuai yang dibutukan saja</h3>";
// echo "<h3>Memili Pakaian</h3>";
// echo 'Kepala =' . $berakaian->kepala->topi->jenis2 . '<br>';
// echo 'Baju =' .  $berakaian->baju->kemeja->umum->panjang->jenis2 . '<br>';
// echo 'Tangan =' . $berakaian->tangan->jam->jenis1 . '<br>';
// echo 'Celana =' . $berakaian->celana->celana_panjang->jenis2 . '<br>';
// echo 'Kaki =' . $berakaian->kaki->sepatu_santai->jenis1 . '<br>';
?>

<body>
    <div class="kotak">
        <div class="col1">
            <div class="ob1">
                <h3>Sebelum Menjadi Objek</h3>
                <?php
                echo "<pre>";
                print_r($berakaian);
                echo "<pre>";
                ?>

            </div>
            <!-- merubah manjadi objek semua -->
            <?php
            $berakaian->kepala = (object)$berakaian->kepala;
            $berakaian->kepala->topi = (object)$berakaian->kepala->topi;
            $berakaian->kepala->peci = (object)$berakaian->kepala->peci;

            $berakaian->baju = (object)$berakaian->baju;
            $berakaian->baju->kaos = (object)$berakaian->baju->kaos;
            $berakaian->baju->kaos->pendek = (object)$berakaian->baju->kaos->pendek;
            $berakaian->baju->kaos->panjang = (object)$berakaian->baju->kaos->panjang;
            $berakaian->baju->kemeja = (object)$berakaian->baju->kemeja;
            $berakaian->baju->kemeja->umum = (object)$berakaian->baju->kemeja->umum;
            $berakaian->baju->kemeja->umum->pendek = (object)$berakaian->baju->kemeja->umum->pendek;
            $berakaian->baju->kemeja->umum->panjang = (object)$berakaian->baju->kemeja->umum->panjang;
            $berakaian->baju->kemeja->muslim = (object)$berakaian->baju->kemeja->muslim;
            $berakaian->baju->jaket = (object)$berakaian->baju->jaket;
            $berakaian->baju->jas = (object)$berakaian->baju->jas;

            $berakaian->tangan = (object)$berakaian->tangan;
            $berakaian->tangan->jam = (object)$berakaian->tangan->jam;

            $berakaian->celana = (object)$berakaian->celana;
            $berakaian->celana->celana_panjang = (object)$berakaian->celana->celana_panjang;
            $berakaian->celana->celana_pendek = (object)$berakaian->celana->celana_pendek;
            $berakaian->celana->celana_olahraga = (object)$berakaian->celana->celana_olahraga;
            $berakaian->celana->sarung = (object)$berakaian->celana->sarung;

            $berakaian->kaki = (object)$berakaian->kaki;
            $berakaian->kaki->sandal = (object)$berakaian->kaki->sandal;
            $berakaian->kaki->sepatu_olahraga = (object)$berakaian->kaki->sepatu_olahraga;
            $berakaian->kaki->sepatu_kerja = (object)$berakaian->kaki->sepatu_kerja;
            $berakaian->kaki->sepatu_santai = (object)$berakaian->kaki->sepatu_santai;
            ?>
            <div class="ob2">
                <h3>Setelah Menjadi Objek</h3>
                <?php
                echo "<pre>";
                print_r($berakaian);
                echo "<pre>";
                ?>
            </div>
        </div>
        <div class="col2">
            <h3>Pemagilan Index sesuai yang dibutukan saja</h3>
            <table>
                <tr>
                    <th colspan="2">
                        Berpakaian
                    </th>
                </tr>
                <tr>
                    <th>Bagian</th>
                    <th>Pakaian</th>
                </tr>
                <tr>
                    <td>Kepala</td>
                    <td><?php echo $berakaian->kepala->topi->jenis2; ?></td>
                </tr>
                <tr>
                    <td>Baju</td>
                    <td><?php echo $berakaian->baju->kemeja->umum->panjang->jenis2; ?></td>
                </tr>
                <tr>
                    <td>Tangan</td>
                    <td><?php echo $berakaian->tangan->jam->jenis1; ?></td>
                </tr>
                <tr>
                    <td>Celana</td>
                    <td><?php echo $berakaian->celana->celana_panjang->jenis2; ?></td>
                </tr>
                <tr>
                    <td>Kaki</td>
                    <td><?php echo $berakaian->kaki->sepatu_santai->jenis1; ?></td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>