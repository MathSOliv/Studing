<?php
session_start();
?>


<!DOCTYPE html>
<html lang="pt-br">
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
            color: white;
        }
        .box{
            background-color: black;
            width: 25rem;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%,-50%);
            height: 22rem;
        }
       .field1{
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            top: 8rem;
            border-radius: 0.4rem;
            width: 100%;
       }
       .field2{
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            top: 11rem;
            border-radius: 0.4rem;
            width: 100%;
       }
       button{
            position: absolute;
            left: 50%;
            transform: translate(-50%);
            top: 17rem;
            outline: none;
            border: 0.1rem solid black;
            border-radius: 0.3rem;
            width: 60%;
            height: 12%;
            cursor: pointer;
       }
       button:hover{
            background-color: rgb(0, 191, 255);
       }
       .campos{
            border-radius: 0.4rem;
            width: 60%;
       }
       input{
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        width: 60%;
        height: 30px;
        outline: none;
        border: none;
        border-bottom: 1px solid black;
       }
       #logo{
        width: 50%;
        position: absolute;
        left: 50%;
        transform: translate(-50%);
        top: 1.5rem;
       }
    </style>
</head>
<body>
    <div class="box">
        <img src="https://palmont2.sharepoint.com/sites/P-SIGTestes/Lists/html%20imagens/Attachments/27/Logo_Trtansparente_Branco_Final.png" id="logo">
        <form action="login.php" method="POST">
            <div class="campos">
                <div class="field1">
                    <input name="usuario" name="usuario" placeholder="Seu usuário:" autofocus="" required>
                </div>

                <div class="field2">
                    <input name="senha" name="senha" placeholder="Sua senha:" type="password" autofocus="" required>
                </div>
            </div>
            <button type="submit">Entrar</button>
        </form>
    </div>
    <script>
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
        alert("Senha ou usuario incorretos")
        <?php
            endif;
            unset($_SESSION['nao_autenticado'])
        ?>
    </script>
</body>
</html>