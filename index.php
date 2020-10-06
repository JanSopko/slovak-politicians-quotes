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
    [
        'text' => 'Bude to drahé.',
        'politician' => $pellegrini
    ],
    [
        'text' => 'Riško, drž balónik a čakaj',
        'politician' => $radicova
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



