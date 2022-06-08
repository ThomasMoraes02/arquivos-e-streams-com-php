<?php

/**
 * Modes
 * w = write = escrita
 * a = append = escreve no final do arquivo
 * r+ / a+ / w+ = leitura e escrita
 */

//  1)
// $arquivo = fopen("cursos-php.txt", "a");

// $curso =  "\n Design Patterns com PHP 3";

// fwrite($arquivo, $curso);
// fclose($arquivo);


// 2)
$curso = "Design Patterns com PHP 3\n";

file_put_contents('cursos-php.txt', $curso, FILE_APPEND);