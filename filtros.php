<?php

$arquivosDeCursos = fopen("cursos-php.txt", 'r');

// filtro de caracteres em letra maiuscula
stream_filter_append($arquivosDeCursos, 'string.toupper');

echo fread($arquivosDeCursos, filesize('cursos-php.txt'));

