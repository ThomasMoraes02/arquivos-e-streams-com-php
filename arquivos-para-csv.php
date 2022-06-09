<?php 

$meusCursos = file("cursos-php.txt");
$outrosCursos = file("lista-cursos.txt");

$arquivoCsv = fopen("cursos.csv", "w");

foreach($meusCursos as $curso) {
    $linha = [trim($curso), "Sim"];

    fputcsv($arquivoCsv, $linha, ";");
}

foreach($outrosCursos as $curso) {
    $linha = [trim($curso), "Nao"];

    fputcsv($arquivoCsv, $linha, ";"); 
}

fclose($arquivoCsv);