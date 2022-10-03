<container>

    <div class="login-formulario">
        <h1>Registo</h1>
        <br>
<form action="db/insertUtilizador.php" method="post">
  <div class="mb-3">
    <label for="form-username" class="form-label">Username</label>
    <input type="text" class="form-control" id="form-username" name="form-username" required>
  </div>
  <div class="mb-3">
    <label for="form-password" class="form-label">Password</label>
    <input type="password" class="form-control" id="form-password" name="form-password" required>
  </div>
  <div class="mb-3">
    <label for="form-password1" class="form-label">Confirme a Password</label>
    <input type="password" class="form-control" id="form-password1" name="form-password1" required>
  </div>
  <button type="submit" class="btn btn-primary">Registar</button>
</form>
    </div>
</container>
