<?php

// Ler arquivo zip: Ler apenas um arquivo dentro do zip
echo file_get_contents("zip://arquivos.zip#lista-cursos.txt");