<html>

<head>
    <meta charset="UTF-8">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>

<body>
    <nav>
        <!--conexao com o banco-->
        <?php
        require_once 'conexao.php'
        ?>

        <div class="nav-wrapper">

            <!--Menu-->
            <img src="img/logofogo.png" class="logo">
            <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="#">PAGINA INICIAL</a></li>
                <li><a href="#">MEU PERFIL</a></li>
                <!--modal Login-->
                <li><a data-target="modal1" class="modal-trigger" href="#modal1"><i class="medium material-icons">person</i></a></li>
                <div id="modal1" class="modal">
                    <div class="modal-content">
                        <!-- inicio do login-->
                        <h1>Login</h1>
                        <form class="formLogin" method="POST" action="#">
                            <input autocomplete="off" class="inputLogin" type="email" name="email" placeholder="E-mail">
                            <input class="inputLogin " type="password" name="senha" placeholder="Senha">
                            <input type="submit" value="Entrar" name="login" id="btnLogar" class="btn btnEntrar">
                        </form>
                        <!-- fim do login-->
                        <?php
                        ?>
                    </div>
                </div>
                <!--fim modal login-->

                <!--modal Cadastro-->
                <li><a data-target="modal2" class="modal-trigger" href="#modal2"><i class="medium material-icons">person_add</i></a></li>
                <div id="modal2" class="modal">
                    <div class="modal-content">
                        <!-- inicio do cadastro-->
                        <h1>Cadastre-se</h1>
                        <form method="POST" action="" enctype="multipart/form-data">
                            <!-- input name-->
                            <input type="text" name="nome" autocomplete="off" placeholder="Insira seu nome">
                            <!-- input sexo-->
                            <select class="browser-default SelectSexo" name="sexo">
                                <option value="" disabled selected>Selecione seu Sexo</option>
                                <option value="m">Masculino</option>
                                <option value="f">Feminino</option>
                            </select>
                            <!-- input email-->
                            <input type="email" autocomplete="off" name="email" placeholder="E-mail">
                            <!-- input senha-->
                            <input type="password" name="senha" placeholder="Senha">
                            <br><br>
                            <!-- finalizar cadastro-->
                            <input type="submit" value="Finalizar Cadastro" name="fimCadastro" id="btnLogar" class="btn btnFinalizar right"> <br>
                        </form>
                        <!-- fim do cadastro-->

                    </div>
                </div>
                <!--fim modal cadastro-->
            </ul>
        </div>
    </nav>

    <script src="js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>


</body>

</html>

<?php
//cadastro

if (isset($_POST["fimCadastro"])) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = "INSERT INTO `website`.`usuario` (`nomeUsuario`, `nivel`, `statusUsuario`, `sexo`, `email`, `senha`) 
                            VALUES ('$nome', '1', '1', '$sexo', '$email', '$senha')";

    $queryexec = mysqli_query($conexao, $query);
    echo    "<script>
                    alert('Cadastro finalizado');
                    location.href = 'index.php';
            </script>";
}

?>