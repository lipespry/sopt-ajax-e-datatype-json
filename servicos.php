<?php

$dados = array(
    0 => array(
        'id' => 0,
        'nome' => 'jao',
        'status' => 1
    ),
    1 => array(
        'id' => 1,
        'nome' => 'juca',
        'status' => 1
    ),
    2 => array(
        'id' => 2,
        'nome' => 'ze',
        'status' => 0
    )
);

// exibe matriz de objetos
// echo json_encode($dados);

// exibe um único objeto
echo json_encode($dados[$_GET['id']]);
