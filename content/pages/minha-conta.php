
<?php include('db/selectUtilizadorByUsername.php');?>

<container>
    <div class="minhaconta-cabecalho">
        <h1>Gestão Conta Pessoal</h1>
<form action="db/updateUtilizador.php" method="post">
    <div>
        <label for="form-username">Username:</label>
        <input type="text" name="form-username" id="form-username" value="<?= $row['username']?>">
    </div>
    <div>
        <label for="form-password">Password:</label>
        <input type="text" name="form-password" id="form-password" value="<?= $row['password']?>">
    </div>
    <div>
        <label for="form-email">Email:</label>
        <input type="text" name="form-email" id="form-email" value="<?= $row['email']?>">
    </div>
    <br>
    <input type="submit" class="btn btn-info" value="Editar conta">
    <br>
    <br>
    <a href="db/deleteUtilizador.php" type="button" class="btn btn-danger">Eliminar Conta</a>
</form>
    </div>
</container>