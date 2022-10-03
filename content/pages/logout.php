<?php
session_unset();
session_destroy();

if(isset($_GET['r'])){
    if($_GET['r']=='deleteok'){
        header('Location: index.php?p=inicio&r=deleteok');
        exit();
    }   
}

header('Location: index.php?p=inicio');