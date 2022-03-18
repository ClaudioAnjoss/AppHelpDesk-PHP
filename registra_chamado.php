<?php

    session_start();

    //Recuperandos dados preenchidos no formulario    
    $titulo = str_replace('#' , '', $_POST['titulo']);
    $categoria = str_replace('#' , '', $_POST['categoria']);
    $descricao = str_replace('#' , '', $_POST['descricao']);
    
    $texto = $titulo . '#' . $categoria . '#' . $descricao . '#' . $_SESSION['id'] . PHP_EOL;

    //Gravando dados recuperados no arquivo.txt
    $arquivos = fopen('../../../AppHelpDesk_Dados_segurança/arquivo.txt' , 'a');
    
    fwrite($arquivos, $texto);

    header('location: abrir_chamado.php');
?>