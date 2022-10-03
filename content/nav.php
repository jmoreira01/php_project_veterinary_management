<nav class="navbar navbar-expand-lg">
<div class="container-fluid">
    <a class="navbar-brand" href="#">PETGEST, SA <br> <h6> <strong> by Jorge e Sofia</strong></h6></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="index.php?p=inicio">Home</a>
        </li>
        <?php 
        session_start();
        if(empty($_SESSION['username'])){
            ?>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=login">Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=registo">Registo</a>
            </li>
            
            <?php
        } else { ?>
        
        <li class="nav-item">
        <a class="nav-link" href="index.php?p=minhaconta">Minha Conta</a>
        </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=registoanimais">Registo: Animal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?p=listaanimais">Gestão</a>
            </li>

        <?php 
        if($_SESSION['tipoUtilizador'] == 1){ //APRESENTA ADMINISTRAÇÃO DE FOR USER ADMIN?>
            <li class="nav-item">
            <a class="nav-link" href="index.php?p=administracao">Administração</a>
            </li>
            <?php 
        } ?>

        <li class="nav-item-logout">
        <a class="nav-link" href="index.php?p=logout">Logout</a>
        </li>
        <?php } ?>
    </ul>
    </div>
</div>
</nav>
<main>