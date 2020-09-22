<?php
require("../bd/conexao.php");

    //print_r($_GET);

    $query = "update atendimento set aStatus = 'cancelado' where id = " . $_GET['id'];

    $result = mysqli_query($connect,$query);

    header('Location: ../atendimento.php');
?>