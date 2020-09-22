<?php
    require ('bd/conexao.php');
?>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atendimento</title>
    <link rel="stylesheet" href="css/atendimento.css">
</head>
<body>
        <div id="main">
            <div id="formulario">
                <form action="controller/bdControllTable.php" method='POST' >
                    <label for="nome">Nome:</label>
                    <input type="text" name='nome' id="telefone">
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone">
                    <label for="atividade">Atividade</label>
                    <select name="atividade" id="atividade">
                        <option value="Segunda_via">Segunda Via de Conta</option>
                        <option value="Mudanca_endereco">Mudança de Endereço</option>
                        <option value="Suspensao_servico">Suspensão do Serviço</option>
                        <option value="Negociacao_debitos">Negociação de Débitos</option>
                    </select>
                    <input type="submit">
                </form>

                </div>

                <div id="exibicao">
                <?php
                    $query = "select id from atendimento where aStatus = 'espera' order by id asc";
                    $result = mysqli_query($connect,$query);
                    $list = $result->fetch_array(MYSQLI_NUM);
                ?>
                    <h1><?=$list[0]?></h1>
                    <a href="controller/atender.php?id=<?=$list[0]?>">Atender</a>
                </div>

                <div id="consulta">
                <table>
                <thead>
                    <tr>
                        <th>Senha</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Atv</th>
                        <th>Data/hora</th>
                        <th>Status</th>
                        <th>Ações</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $query = 'select * from atendimento';
                    $result = mysqli_query($connect,$query);
                    $list2 = mysqli_fetch_all($result);
                    //print_r($list2);
                ?>
                <?php  foreach($list2 as $key => $item){?>
                    <tr>
                        <td><?=$item[0]?></td>
                        <td><?=$item[1]?></td>
                        <td><?=$item[2]?></td>
                        <td><?=$item[3]?></td>
                        <td><?=$item[4]?></td>
                        <td><?=$item[6]?></td>
                        <?php if($item[6] == 'espera'){?>
                            <td><a href="controller/cancelar.php?id=<?=$item[0]?>">cancelar</a></td>
                        <?php }?>
                     </tr>
                <?php }?>
                    
                </tbody>
                </table>
                </div>
            </div>
</body>
</html>