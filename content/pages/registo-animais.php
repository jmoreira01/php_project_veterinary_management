
<container>
<div class ="registoanimais">
    <h1>REGISTO de ANIMAIS</h1>
<form action="db/insertAnimais.php" method="post">
    <div class="mb-3">
        <label for="form-name" class="form-label">NOME ANIMAL</label>
        <input type="text" class="form-control" id="form-name" name="form-name" required>
    </div>
    <div class="mb-3">
        <label for="form-data-nascimento" class="form-label">DATA NASCIMENTO</label>
        <input type="date" class="form-control" id="form-data-nascimento" name="form-data-nascimento" required>
    </div>
    <div class="mb-3">
        <label for="form-especie" class="form-label">ESPECIE</label>
        <input type="text" class="form-control" id="form-especie" name="form-especie" required>
    </div>
    <div class="mb-3">
        <label for="form-raca" class="form-label">RACA</label>
        <input type="text" class="form-control" id="form-raca" name="form-raca" required>
    </div>
    <div class="mb-3">
        <label for="form-cor" class="form-label">COR</label>
        <input type="text" class="form-control" id="form-cor" name="form-cor" required>
    </div>
    <div class="mb-3">
        <label for="form-peso-kg" class="form-label">PESO</label>
        <input type="number" class="form-control" id="form-peso-kg" name="form-peso-kg" required>
    </div>
    <div class="mb-3">
        <label for="form-comprimento-cm" class="form-label">COMPRIMENTO</label>
        <input type="number" class="form-control" id="form-comprimento-cm" name="form-comprimento-cm" required>
    </div>
    <div class="mb-3">
        <label for="form-nome-dono" class="form-label">DONO</label>
        <input type="text" class="form-control" id="form-nome-dono" name="form-nome-dono" required>
    </div>
    <div class="mb-3">
        <label for="form-contato-dono" class="form-label">DONO: CONTATO</label>
        <input type="tel" class="form-control" id="form-contato-dono" name="form-contato-dono" required>
    </div>
    <div class="mb-3">
        <label for="form-contribuinte-dono" class="form-label">DONO: CONTRIBUINTE</label>
        <input type="number" class="form-control" id="form-contribuinte-dono" name="form-contribuinte-dono" required>
    </div>
    <div class="mb-3">
        <label for="form-email-dono" class="form-label">DONO: EMAIL</label>
        <input type="email" class="form-control" id="form-email-dono" name="form-email-dono" required>
    </div>
    <div class="mb-3">
        <label for="form-comentario" class="form-label">COMENTARIOS</label>
        <input type="text" class="form-control" id="form-comentario" name="form-comentario" required>
    </div>

    <button type="submit" class="btn btn-primary">SUBMETER</button>
</form>
</div>
</container>