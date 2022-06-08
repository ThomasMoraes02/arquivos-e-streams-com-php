<?php 

/**
 * Modes
 * r = read = Leitura
 */

// Abrir arquivo
$arquivo = fopen('lista-cursos.txt', 'r');

// 1)
// Ler até o fim do arquivo
// while(!feof($arquivo)) {
//     // Ler até o final da linha
//     $curso = fgets($arquivo);
//     echo $curso;
// }
// fclose($arquivo);

// 2)
// $tamanhoDoArquivo = filesize('lista-cursos.txt');
// $cursos = fread($arquivo, $tamanhoDoArquivo);
// echo $cursos;
// // Terminar de trabalhar com o arquivo
// fclose($arquivo);


// 3) Retorna uma string
// $cursos = file_get_contents('lista-cursos.txt');
// echo $cursos;


// 4) Retorna um array
$cursos = file('lista-cursos.txt');
var_dump($cursos);

// PHP só lê até 128megabytes