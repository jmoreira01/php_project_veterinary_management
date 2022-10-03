<?php
include('conn.php');


$sql = "SELECT * FROM animal";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row['id']?></td>
                <td><?= $row['name']?></td>
                <td><?= $row['data_nascimento']?></td>
                <td><?= $row['especie']?></td>
                <td><?= $row['raca']?></td>
                <td><?= $row['cor']?></td>
                <td><?= $row['peso_kg']?></td>
                <td><?= $row['comprimento_cm']?></td>
                <td><?= $row['nome_dono']?></td>
                <td><?= $row['contato_dono']?></td>
                <td><?= $row['contribuinte_dono']?></td>
                <td><?= $row['email_dono']?></td>
                <td><?= $row['comentario']?></td>
                <td>
                    <a class="btn btn-success" type="button" href="index.php?p=animaledit&id=<?=$row['id']?>&name=<?=$row['name']?>&data_nascimento=<?=$row['data_nascimento']?>&especie=<?=$row['especie']?>&raca=<?=$row['raca']?>&cor=<?=$row['cor']?>&peso_kg=<?=$row['peso_kg']?>&comprimento_cm=<?=$row['comprimento_cm']?>&nome_dono=<?=$row['nome_dono']?>&contato_dono=<?=$row['contato_dono']?>&contribuinte_dono=<?=$row['contribuinte_dono']?>&email_dono=<?=$row['email_dono']?>&comentario=<?=$row['comentario']?>">EDITAR</a>
                    <br>
                    <a class="btn btn-danger" type="button" href="db/deleteAnimais.php?id=<?= $row['id']?>">ELIMINAR</a>
                </td>
            </tr>
        <?php
    }
} else {
    echo "0 results";
}
$conn->close();
?>