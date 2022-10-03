<?php
//echo $_SERVER['HTTP_REFERER'];  //informa de que url vimos

//VALIDA SE RECEBE CÓDIGO DE RESULTADO E APRESENTA ALERT CONSOANTE O MESMO
if(isset($_GET['r'])){
  $r = $_GET['r'];
  if($r == 'deleteok'){ ?>

    <div class="alert alert-success" role="alert">
      Conta eliminada com sucesso
    </div>

    <?php
  }
}?>


