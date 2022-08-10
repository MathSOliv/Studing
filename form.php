<?php

if(isset($_POST['submit']))
{
    /*
    print_r($_POST['nome']);
    print_r('<br>');
    print_r($_POST['email']);
    print_r('<br>');
    print_r($_POST['telefone']);
    print_r('<br>');
    print_r($_POST['genero']);
    print_r('<br>');
    print_r($_POST['data_nascimento']);
    print_r('<br>');
    print_r($_POST['cidade']);
    */
    
    include_once('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['genero'];
    $data_nasc = $_POST['data_nascimento'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    $endereco = $_POST['endereco'];

    $result = mysqli_query($conexao, "INSERT INTO form_test(nome,email,telefone,sexo,data_nasc,cidade,estado,endereco)
    VALUES('$nome','$email','$telefone','$sexo','$data_nasc','$cidade','$estado','$endereco')");
    
}

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preencher formulário</title>
    <style>
        
        body{
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            
        }
        .box{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 1rem;
            border-radius: 1rem;
            width: 20%;
            color: white;
        }
        fieldset{
            border: 0.1rem solid dodgerblue;
        }
        legend{
            border: 0.1rem solid dodgerblue;
            padding: 0.8rem;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 0.5rem;
            
        }
        .inputBox{
            position: relative;
        }
        .inputUser{
            background: none;
            border: none;
            border-bottom: 0.1rem solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 1px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }
        .inputUser:focus ~ .labelInput,
        .inputUser:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }
        #data_nascimento{
            border:none;
            padding: 8px;
            border-radius: 10px;
            outline: none;
            font-size: 15px;
        }
        #submit{
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 13px;
            cursor: pointer;
            border-radius: 10px;
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(90, 20, 220));
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(0, 80, 172), rgb(80, 19, 195));
        }


    </style>
</head>
<body>
    <div class="box">
        <form action="form.php" method = "POST">
            <fieldset>
                <legend><b>Formulário de Clientes</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="email" name="email" id="email" class="inputUser" required>
                    <label for="email" class="labelInput">Email</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                    <label for="telefone" class="labelInput">Telefone</label>
                </div>
                <br>
                <p>Sexo:</p>
                <input type="radio" id="feminimo" name="genero" value="feminino" required>
                <label for="feminimo">Feminino</label>

                <br>

                <input type="radio" id="masculino" name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>

                <br>

                <input type="radio" id="outro" name="genero" value="outro" required>
                <label for="outro">Outro</label>

                <br><br>

                
                <label for="data_nascimento"><b>Data de Nascimento</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento"  required>
                    


                <br><br><br>

                <div class="inputBox">
                    <input type="text" name="cidade" id="cidade" class="inputUser" required>
                    <label for="cidade" class="labelInput">Cidade</label>
                </div>
                <br>
                <div class="inputBox">
                    <input type="text" name="estado" id="estado" class="inputUser" required>
                    <label for="estado" class="labelInput">Estado</label>
                </div>
                    <br>
                    <div class="inputBox">
                    <input type="text" name="endereco" id="endereco" class="inputUser" required>
                    <label for="endereco" class="labelInput">Endereço</label>
                </div>

                    <br><br>

                    <a href="home.php"><input type="submit" name="submit" id="submit"></a>
                    
                </fieldset>
            </form>
        </div>
    </body>
</html>