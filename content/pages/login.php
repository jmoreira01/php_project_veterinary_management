<container>
    <div class="login-formulario">
    <h1>Login</h1>
        <br>
    <form action="db/login.php" method="post">
        <div class="mb-3">
    <label for="form-username" class="form-label">Username</label>
    <input type="text" class="form-control" id="form-username" name="form-username" required>
  </div>
  <div class="mb-3">
    <label for="form-password" class="form-label">Password</label>
    <input type="password" class="form-control" id="form-password" name="form-password" required>
  </div>
  <button type="submit" class="btn btn-primary">Entrar</button>
</form>
</div>
</container>
<?php 
//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'registook'){ ?>

    <div class="alert alert-success" role="alert">
      Registo efetuado com sucesso, faça login
    </div>

    <?php
  }else if($r == 'camposemfalta'){ ?>

    <div class="alert alert-danger" role="alert">
      Preencha todos os campos para se autenticar
    </div>

    <?php
  }else if($r == 'loginerrado'){ ?>
    
    <div class="alert alert-danger" role="alert">
      Login Errado
    </div>

    <?php
  }
}?>