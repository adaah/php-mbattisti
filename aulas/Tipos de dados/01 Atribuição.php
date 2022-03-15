<?php

$pessoa = [
    'Nome' => 'Eduarda',
    'Idade' => 18,
    'Profissão' => 'Desenvolvedora',
    'Universidade' => 'UFBA'
];

$maioridade = 18;

if ($pessoa['Idade'] >= $maioridade) {
    echo 'É maior de idade';
} else {
    echo 'É menor de idade';
}

?>