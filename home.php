<?php
session_start();
include('verify_login.php');

include_once('conexao.php');

$sql = "SELECT * FROM form_test ORDER BY id DESC";

$result = $conexao->query($sql);

/*print_r($result);*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="home.css">
</head>
<body>
    <div class="pesquisa">
        <input type="search" class="pesquisar">
    </div>
    <div class="navBar">
        <img src="https://palmont2.sharepoint.com/sites/P-SIGTestes/Lists/html%20imagens/Attachments/27/Logo_Trtansparente_Branco_Final.png" id="logo">
            <div class="menu-btn">
                <div class="menu-btn_burger"></div>
            </div>
    </div>
    <div class="dd">
        <img src="https://www.espacodacriancabelem.com.br/themes/espacodacrianca/images/seta-baixo.png" id="dd_image" >
    </div>
    <div class="menu-list">
        <button class="adicionar">ADICIONAR</button>
        <a href="form.php"><button class="registrar">REGISTRAR</button></a>
        <a href="logout.php"><button class="sair">SAIR</button></a>
    </div>
    <div class="box">
        <table class="tabela">
            <div class="cabecalho">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Genêro</th>
                    <th>Data de Nascimento</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>Endereço</th>
                    <th>...</th>
                </tr>
            </div>
            <div class="corpo">
                <?php
                    while($user_data = mysqli_fetch_assoc($result))
                    {
                    echo"<tr>";
                    echo"<td>".$user_data['id']."</td>";
                    echo"<td>".$user_data['nome']."</td>";
                    echo"<td>".$user_data['email']."</td>";
                    echo"<td>".$user_data['telefone']."</td>";
                    echo"<td>".$user_data['sexo']."</td>";
                    echo"<td>".$user_data['data_nasc']."</td>";
                    echo"<td>".$user_data['cidade']."</td>";
                    echo"<td>".$user_data['estado']."</td>";
                    echo"<td>".$user_data['endereco']."</td>";
                    echo"<td>
                        <a class='btn btn-sm btn-primary' href='form_edit.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                            </svg>
                        </a>

                        <a class='btn btn-sm btn-danger' href='delete.php?id=$user_data[id]'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                            </svg>
                        </a>
                    </td>";
                    echo"</tr>";
                    }
                ?>
            </div>
        </table>
    </div>
    <div class="pesquisa">
        <input type="search" class="pesquisar">
    </div>
</body>
</html>