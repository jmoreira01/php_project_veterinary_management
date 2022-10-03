
<container>
    <div class="administracao">
<h1>Administração</h1>
        <br>

<?php 
if($_SESSION['tipoUtilizador']!=1){
    header('Location: index.php?p=404');
    exit();
}?>

    <div class="row">
        <div class="col"></div>
        <div class="col">ID</div>
        <div class="col">Username</div>
        <div class="col">Password</div>
        <div class="col">Tipo</div>
        <div class="col"></div>
        <div class="col"></div>
    </div>
    <?php include('db/selectUtilizador.php');?>
</div>
</container>



