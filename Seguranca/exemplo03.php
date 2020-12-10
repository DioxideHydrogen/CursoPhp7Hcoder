<?php
$pasta = "arquivos";
$perm = 0775;/*
0 nada
1 Execução
2 Escrita
3 escrita e execução
4 Leitura
5 Leitura e execução
6 Leitura e escrita
7 Leitura, Escrita e Execução
*/ 
if(!is_dir($pasta)) mkdir($pasta, $perm);