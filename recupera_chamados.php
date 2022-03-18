<?php
//logica que recupera os chamados
$chamados = array();

$arquivos = fopen('../../../AppHelpDesk_Dados_segurança/arquivo.txt', 'r');

while (!feof($arquivos)) {
    $registro = fgets($arquivos);
    $chamados[] = $registro;
}

fclose($arquivos);
?>