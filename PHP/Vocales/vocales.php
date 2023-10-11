<?php
function reemplazarVocales($frase, $vocalReemplazo) {
    $vocales = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];

    // Reemplazamos todas las vocales por la vocal de reemplazo
    $fraseReemplazada = str_replace($vocales, $vocalReemplazo, $frase);

    return $fraseReemplazada;
}

$fraseOriginal = "Mi moto alpina derrapante";

echo "Frase original: $fraseOriginal<br>";

$vocalesReemplazo = ['a', 'e', 'i', 'o', 'u'];

foreach ($vocalesReemplazo as $vocal) {
    $fraseReemplazada = reemplazarVocales($fraseOriginal, $vocal);
    echo "$fraseReemplazada<br>";
}
?>
