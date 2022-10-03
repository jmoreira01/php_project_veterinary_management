<container>
    <div class="container-lista-animais">
        <h1>GESTÃO DA LISTA DE ANIMAIS</h1>
        <br>
        <br>
        <table>
            <tr>
                <th>ID</th>
                <th>NOME ANIMAL</th>
                <th>DATA NASCIMENTO</th>
                <th>ESPECIE</th>
                <th>RAÇA</th>
                <th>COR</th>
                <th>PESO <br> (kg) </th>
                <th>COMPRIMENTO <br> (cm)</th>
                <th>DONO</th>
                <th>DONO: CONTATO</th>
                <th>DONO: CONTRIBUINTE</th>
                <th>DONO: EMAIL</th>
                <th>COMENTÁRIOS</th>
                <th>GESTÃO</th>
            </tr>

    <?php include('db/selectAnimais.php');?>
    </table>
</div>
</container>