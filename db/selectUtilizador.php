<?php

include('conn.php');

$sql = "SELECT * FROM medicovet";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    ?> 
    <div class="row">
        <div class="col"><button class="btn btn-success">EDITAR</button></div>
        <div class="col"><?= $row['id']?></div>
        <div class="col"><?= $row['username']?></div>
        <div class="col"><?= $row['password']?></div>
        <div class="col">
            <?php 
            if($row['tipoUtilizador_id']==1){ ?>
                <i class="bi bi-person-check-fill" 
                    onclick="location.replace('db/updateTipoUtilizador.php?id='+<?= $row['id']?>+'&tipo=2')"></i>
            <?php }else{ ?>
                <i class="bi bi-person-fill"
                    onclick="location.replace('db/updateTipoUtilizador.php?id='+<?= $row['id']?>+'&tipo=1')"></i>
            <?php }
            ?>
        </div>

        <div class="col"><a class="btn btn-primary" href="db/resetPassword.php?id=<?= $row['id']?>&email=<?= $row['email']?>&username=<?= $row['username']?>">RESET PWD</a></div>
        <div class="col"><button class="btn btn-danger">ELIMINAR</button>
        </div>
    </div>
    <?php
  }
} else {
  echo "0 results";
}
$conn->close();
?>