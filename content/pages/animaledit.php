<form action="db/updateAnimal.php" method="post">
    <div class="mb-3">
        <label for="form-id"></label>
        <input type="number" name="form-id" id="form-id" value="<?=$_GET['id']?>" hidden>
    </div>
    <div class="mb-3">
        <label for="form-name">NOME</label>
        <input type="text" name="form-name" id="form-name" value="<?=$_GET['name']?>">
    </div>
    <div class="mb-3">
        <label for="form-data-nascimento">DATA NASCIMENTO</label>
        <input type="date"  name="form-data-nascimento" id="form-data-nascimento" value="<?=$_GET['data_nascimento']?>">
    </div>
    <div class="mb-3">
        <label for="form-especie">ESPECIE</label>
        <input type="text"  name="form-especie" id="form-especie" value="<?= $_GET['especie']?>">
    </div>
    <div class="mb-3">
        <label for="form-raca">RACA</label>
        <input type="text"  name="form-raca" id="form-raca" value="<?= $_GET['raca']?>">
    </div>
    <div class="mb-3">
        <label for="form-cor">COR</label>
        <input type="text" name="form-cor" id="form-cor" value="<?=$_GET['cor']?>">
    </div>
    <div class="mb-3">
        <label for="form-peso-kg" >PESO</label>
        <input type="number" name="form-peso-kg" id="form-peso-kg" value="<?= $_GET['peso_kg']?>">
    </div>
    <div class="mb-3">
        <label for="form-comprimento-cm" >COMPRIMENTO</label>
        <input type="number" name="form-comprimento-cm" id="form-comprimento-cm" value="<?=$_GET['comprimento_cm']?>">
    </div>
    <div class="mb-3">
        <label for="form-nome-dono">DONO</label>
        <input type="text" name="form-nome-dono" id="form-nome-dono" value="<?= $_GET['nome_dono']?>">
    </div>
    <div class="mb-3">
        <label for="form-contato-dono" >DONO: CONTATO</label>
        <input type="tel"  name="form-contato-dono" id="form-contato-dono" value="<?= $_GET['contato_dono']?>">
    </div>
    <div class="mb-3">
        <label for="form-contribuinte-dono">DONO: CONTRIBUINTE</label>
        <input type="number"   name="form-contribuinte-dono" id="form-contribuinte-dono" value="<?=$_GET['contribuinte_dono']?>">
    </div>
    <div class="mb-3">
        <label for="form-email-dono" >DONO: EMAIL</label>
        <input type="email"  name="form-email-dono" id="form-email-dono" value="<?=$_GET['email_dono']?>">
    </div>
    <div class="mb-3">
        <label for="form-comentario">COMENTARIOS</label>
        <input type="text"  name="form-comentario" id="form-comentario" value="<?= $_GET['comentario']?>">
    </div>

    <button type="submit" class="btn btn-primary">SUBMETER</button>
</form>

