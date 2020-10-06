<?php
require_once './Politician.php';

$fico = new Politician('Róbert Fico');
$danko = new Politician('Andrej Danko');
$kotleba = new Politician('Marian Kotleba');
$matovic = new Politician('Igor Matovič');
$kollar = new Politician('Boris Kollár');
$sulik = new Politician('Richard Sulík');
$bugar = new Politician('Béla Bugár');
$prochazka = new Politician('Radoslav Procházka');
$zaborska = new Politician('Anna Záborská');
$slota = new Politician('Ján Slota');
$mihal = new Politician('Jozef Mihál');
$pellegrini = new Politician('Peter Pellegrini');
$truban = new Politician('Michal Truban');
$radicova = new Politician('Iveta Radičová');

$quotes = [
//    [
//        'text' => 'Bude to drahé.',
//        'politician' => $pellegrini
//    ],
//    [
//        'text' => 'Riško, drž balónik a čakaj!',
//        'politician' => $radicova
//    ],
//    [
//        'text' => 'Tá choroba existuje, ale je vymyslená a je to ďalší druh chrípky.',
//        'politician' => $kotleba
//    ],
//    [
//        'text' => 'Prosím vás neotravujte, tu sme pri žatve!',
//        'politician' => $fico
//    ],
//    [
//        'text' => 'To nebola zlodejina, to bol galaktický lup.',
//        'politician' => $slota
//    ],
//    [
//        'text' => 'Vám musí jebať chalani, fakt, vám musí jebať.',
//        'politician' => $prochazka
//    ],
//    [
//        'text' => 'Pôžičku si musíme zobrať na dve zásadné veci. Ďiaľnice a nemocnice. Nemočnišňuši.',
//        'politician' => $danko
//    ],
//    [
//        'text' => 'Žiaden človek nedokáže dať toľko lásky človeku, ako dokáže dať len človek človeku.',
//        'politician' => $danko
//    ]
    [
        'text' => 'Ľúbim Lucku Poláčkovú.',
        'politician' => new Politician('Ján Sopko')
    ]
];

try {
    $randomQuote = $quotes[random_int(0, count($quotes) - 1)];
} catch (Exception $e) {
    $randomQuote = ['text' => 'Poprosím vás, taktom, že, že äää, dobre taktom.', 'politician' => $danko];
}

?>
<html>
    <head>
        <title>
            Citáty slovenských politikov
        </title>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>

        <div class="wrapper">
            <div class="quote">
                <?=$randomQuote['text']?>
            </div>
            <div class="politician">
                - <?=$randomQuote['politician']->getName()?>
            </div>
        </div>

    </body>
</html>



