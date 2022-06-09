<?php 

// Ler o teclado
$teclado = fopen("php://stdin", "r");

$novoCurso = fgets($teclado);

// Editar arquivo 1 - Conteudo 2 - Com a flag de adicionar no fim
file_put_contents("cursos-php.txt", "\n$novoCurso", FILE_APPEND);