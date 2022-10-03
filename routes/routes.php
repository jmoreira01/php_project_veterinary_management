<?php 

if(isset($_GET['p'])){
    $pag=$_GET['p'];

    if($pag == 'inicio')
        include('content/pages/inicio.php');

    else if($pag == 'login')
        include('content/pages/login.php');

    else if($pag == 'registo')
        include('content/pages/registo.php');

    else if($pag == 'registoanimais')
        include('content/pages/registo-animais.php');

    else if($pag == 'minhaconta')
        include('content/pages/minha-conta.php');

    else if($pag == 'listaanimais')
        include('content/pages/lista-animais.php');

    else if($pag == 'animaledit')
        include('content/pages/animaledit.php');

    else if($pag == 'administracao')
        include('content/pages/administracao.php');

    else if($pag == 'logout')
        include('content/pages/logout.php');
    else
        include('content/pages/404.php');
}else{
    include('content/pages/inicio.php');
}
?>