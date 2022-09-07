<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/remover.css">
    <link rel="stylesheet" href="../css/fundo2.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <button class="icon-home"><a href="../index.html">
            <img 
            src="../img/logo.png"
            class="img-nav"
            >SHOP
        </a></button>
        <button><a href="cadastrar.php">Cadastrar</a></button>
        <button><a href="listar.php">Listar</a></button>
        <button><a href="alterar.php">Alterar</a></button>
        <button><a href="remover.php">Remover</a></button>     
        <button class="icon-sql"><a target="blank_" href="http://localhost/phpmyadmin/">
            <img class="img-sql" src="../img/sql.png" alt="">
        </a></button>
    </nav>
    <main>
        <br><br>
        <b>Exclusão de Produtos Cadastrados</b>
    <b>
    </b>
   <br>
    
        <form name ="cliente" method="POST" action="">
            <fieldset id="a">
                <legend><b>Informe o ID do produto desejado:</b></legend>
                <p>Id: <input name="txtid" type="text" size="20" maxlength="5" placeholder="Id do Produto" ></p>
                <br><br>
        </fieldset>
        <br><br>    
        <fieldset id="b">
                <input class="btn-fieldset" name="btnenviar" type="submit" value="Excluir">&nbsp;&nbsp;
                <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
        </fieldset>
        <fieldset id="c">
            <legend><b>Resultado: </b></legend>
            <?php
        extract($_POST, EXTR_OVERWRITE);
        if(isset($btnenviar))
        {
            include_once 'produto.php';
            $p = new Produto();
            $p ->setId($txtid);
            echo "<b>" . $p-> exclusao(). "</b>"; //chamada de método - o $p é o parâmetro enviado
        }
    ?>
        </fieldset>
    
    </form>
    </main>
</body>
</html>