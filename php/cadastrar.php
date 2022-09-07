<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/navbar.css">
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/cadastrar.css">
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
    <div class="d-flex flex-column justify-content-center w-100 h-100">
    <main>
    <br><br>
        <b>Cadastro de Produtos</b>
    <b>
    </b>
   <br>
    <form name="cliente" method="POST" action="">
        <fieldset id="a">
            <legend><b>Dados do Produto:</b></legend>
            <p>Nome: <input name="txtnome" type="text" size="40" maxlenght="40" placeholder="Nome do Produto"></p>
            <p>Estoque: <input name="txtestoq" type="text" size="40" maxlenght="40" placeholder="0"></p>
        </fieldset>
        <br>
        <fieldset id="b">
            <legend><b>Opções: </b></legend>
            <br>
            <input class="btn-fieldset" name="btnenviar" type="submit" value="Cadastrar">&nbsp; &nbsp;
            <input class="btn-fieldset" name="limpar" type="reset" value="Limpar">
        </fieldset>
    </form>
    <?php
	
    extract($_POST, EXTR_OVERWRITE);
	
    if(isset($btnenviar))
		
    {
        include_once 'produto.php';
		
        $pro = new Produto();
		
        $pro->setNome($txtnome);
		
        $pro->setEstoque($txtestoq);
		
        echo "<h1><br><br>" . $pro->salvar() . "</h1>";
    }
	
    ?>
    </main>
	<div class="d-flex flex-column justify-content-center align-items-center">
		
	</div>
</div>
</div>
    
    <br>
    
</body>
</html>