<?php
    require("../bd/conexao.php");
    
    $nome = "'" . $_POST['nome'] . "'";
    $telefone = "'" . $_POST['telefone'] . "'";
    $atividade = "'" . $_POST['atividade'] . "'";
    $atendimento = "'" . date("Y-m-d") . "'";
    $status = "'espera'";
    
    $query = 'insert into atendimento(nome,telefone,atividade,atendimento,aStatus)value('.$nome.','.$telefone.',' .$atividade.','. $atendimento .','. $status.')';
    $result = mysqli_query($connect,$query);
    
    header("Location: ../atendimento.php");

?>