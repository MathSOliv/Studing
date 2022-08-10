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
    <style>
        body{
            background-image: url(https://palmont2.sharepoint.com/sites/P-SIGTestes/Lists/html%20imagens/Attachments/30/Sem%20Título-12.jpg);
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Arial, Helvetica, sans-serif;
        }
        .nav_bar{
            width: 100%;
            height: 5rem;
            position: absolute;
            left: 0px;
            top: 0px;
            background-color: black;
        }
        #logo{
            height: 4rem;
        }
        .imagem{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
        }
        .tabela{
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            text-align: center;
        }
        td{
            border: 1px solid black;
            padding: 3px;
            font-size: 12px;
            background-color: white;
            color: black;
            height: 30px;
        }
        th{
            border: 1px solid black;
            padding: 3px;
            font-size: 12px;
            background-color: grey;
            color: white;
            width: 150px;
        }
        table {
            border-collapse: collapse;
            border-radius: 15px 15px 0px 0px;
        }
        #sair{
            width: 60px;
            height: 40px;
            background-color: red;
            color: white;
            border: 1px solid white;
            border-radius: 200px;
            position: absolute;
            right: 120px;
            top: 20px;
            color: white;
        }
        .menu-btn{
        position: relative;
        left: 1795px;
        top: 16px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 40px;
        height: 40px;
        cursor: pointer;
        transition: all .5s ease-in-out;
        border: 3px solid white;
        border-radius: 100%;

        
}
    .menu-btn_burger{
        width: 30px;
        height: 3px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(255, 101, 47, .2);
        transition: all .5s ease-in-out;
    }
    .menu-btn_burger::before,
    .menu-btn_burger::after {
        content: '';
        position: absolute;
        width: 30px;
        height: 3px;
        background-color: #fff;
        transition: all 1s ease-in-out;
        border-radius: 5px;
    }
    .menu-btn_burger::before{
        transform: translateY(-8px);
    }
    .menu-btn_burger::after{
        transform: translateY(8px);
    }
    .menu-list{
        background: #fff;
        position: absolute;
        right: 0px;
        text-align: center;
        width: 300px;
        height:9rem;
        transition: transform 2s;
        visibility: hidden;
    }
    .adicionar, .registrar, .sair{
        padding-top: 2px;
        cursor: pointer;
        width: 100%;
        height: 3rem;
        background: white;
        outline:none;
        border: none;
    }
    .adicionar:hover{
        background-color: black;
        animation: escuro .2s;
        color: white;
    }
    .registrar:hover{
        background-color: black;
        animation: escuro .2s;
        color: white;
    }
    .sair:hover{
        background-color: black;
        color: white;
        animation: escuro .2s;
        
    }
    #dd-icon:hover ~ .menu-list{
        visibility: visible;
        animation: fade 5s;
    }
    


    /*animation*/

    .menu-btn.open .menu-btn_burger {
        transform: translate(-50px);
        background: transparent;
        box-shadow: none;
    }
    .menu-btn.open .menu-btn_burger::before{
        transform: rotate(45deg) translate(35px, -35px);
        background-color: red;
    }
    .menu-btn.open .menu-btn_burger::after{
        transform: rotate(-45deg) translate(35px, 35px);
        background-color: red;
    }
    .menu-btn.open{
        border: 3px solid red;
    }
    @keyframes anime {
        0% {opacity: 0% ; }
        40% {opacity: 40%; }
        80% {opacity: 80%; }
        100% {opacity: 100%; }
    }
    .menu-btn.open .menu-list{
        visibility: visible;
    }
    @keyframes escuro {
            0% { background-color: rgba(0, 0, 0, 0); }
            20% { background-color: rgba(0, 0, 0, 0.2); }
            40% { background-color: rgba(0, 0, 0, 0.4);}
            60% { background-color: rgba(0, 0, 0, 0.6);}
            80% { background-color: rgba(0, 0, 0, 0.8);}
            100% { background-color: rgba(0, 0, 0, 1);}
        }
        .menu{
            height: 9rem;
            width: 3rem;
            position: absolute;
            right: 0px;
            top: 80px;
            background-color: white;
        }
        #dd-icon{
            position: absolute;
            right: 2rem;
            top: 1rem;
            width: 30px;
        }
        .dd{
            position: absolute;
            right: 3rem;
            top: 0rem;
            height: 100%;
            width: 100px;
            background-color: white;
        }

    </style>
</head>
<body>
    <!---<h2>Olá, <?php echo $_SESSION['usuario'];?></h2>
    <h2><a href="logout.php">Sair</a></h2> -->
    <div class="nav_bar">
        <!---<div class="menu-btn">
            <div class="menu-btn_burger"></div>
        </div> -->
        <div class="imagem">
            <img src="https://palmont2.sharepoint.com/sites/P-SIGTestes/Lists/html%20imagens/Attachments/27/Logo_Trtansparente_Branco_Final.png" id="logo">
        </div>
        <div class="dd"><img src="https://palmont2.sharepoint.com/sites/P-SIGTestes/Lists/html%20imagens/Attachments/34/pngwing.com.png" id="dd-icon"></div>
    </div>
    <div class="menu">
        <div class="menu-list">
            <button class="adicionar">ADICIONAR</button>
            <a href="form.php"><button class="registrar">REGISTRAR</button></a>
            <a href="logout.php"><button class="sair">SAIR</button></a>
        </div>
    </div>
    <div class="tabela">
        <table>
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    E-mail
                </th>
                <th>
                    Telefone
                </th>
                <th>
                    Genêro
                </th>
                <th>
                    Data de Nascimento
                </th>
                <th>
                    Cidade
                </th>
                <th>
                    Estado
                </th>
                <th>
                    Endereço
                </th>
                <th>
                    ...
                </th>
            </tr>
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
                    echo"<td>teste</td>";
                    echo"</tr>";
                }
            ?>
        </table>
    </div>
    <script src="main.js"></script>
</body>
</html>