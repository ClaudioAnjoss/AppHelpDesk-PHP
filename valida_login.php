<?php 

session_start();

//variavel de verificaçao de autenticação foi realizada
$usuario_autenticado = false;
$usuario_id = null;
$usuario_pefil = null;

$usuarios_app = array(
    array('id' => 1 , 'email' => 'adm@teste.com.br', 'senha' => '123456' , 'perfil' => 1),
    array('id' => 2 , 'email' => 'user@teste.com.br', 'senha' => '123456' , 'perfil' => 1),
    array('id' => 3 , 'email' => 'beatriz@teste.com.br', 'senha' => '123456' , 'perfil' => 2),
    array('id' => 4 , 'email' => 'claudio@teste.com.br', 'senha' => '123456' , 'perfil' => 2),
);

$perfil_usuario = array('adm' => 1, 'user' => 2);


foreach($usuarios_app as $user) {

    if($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
        $usuario_autenticado = true;
        $usuario_id = $user['id'];
        $usuario_pefil = $user['perfil'];
    }
}

if($usuario_autenticado) {
    $_SESSION['autenticado'] = 'sim';
    $_SESSION['id'] = $usuario_id;
    $_SESSION['perfil'] = $usuario_pefil;
    header('location: home.php');
} else {
    $_SESSION['autenticado'] = 'nao';
    header('location: index.php?login=erro');
}




?>