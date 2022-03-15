<?php

$nome = 'Eduarda';
$idade = 18;
$gostos = [
    'Cor favorita' => 'Preto',
    'Comida favorita' => 'Feijão',
    'Música' => 'Eclética'
];

echo "A $nome tem $idade anos";
echo "\nGosta muito de " . $gostos['Cor favorita'] . ", ama " . $gostos['Comida favorita'] . " e não consegue escolher uma música favorita porque é " . $gostos['Música'];

?>