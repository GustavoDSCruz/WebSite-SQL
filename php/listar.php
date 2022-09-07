<html>
<head>
<meta charset ="UTF-8">
<link rel="stylesheet" href="../css/listar.css">
<link rel="stylesheet" href="../css/main.css" >
<link rel="stylesheet" href="../css/navbar.css" >
<link rel="stylesheet" href="../css/fundo2.css">
<title></title>

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
   <main class="produtos"><br>
   <h1>RELAÇÃO DE PRODUTOS CADASTRADOS</h1><br>

      <?php 
         include_once 'produto.php';
         $p= new produto();
         $pro_bd=$p->listar();
      ?>

   <titulos>
      <h2>Id</h2>         
      <h2>Estoque</h2>   
      <h2>Nome</h2>
   </titulos>
   
      <?php
         
         foreach($pro_bd as $pro_mostrar)
         {
      ?>
         
      <conteudo>
         <campo><?php echo $pro_mostrar[0]; ?> </campo>  
         <campo><?php echo $pro_mostrar[2]; ?> </campo>
         <campo><?php echo $pro_mostrar[1]; ?> </campo>
      </conteudo>
         <?php
      }
         echo "";
         ?>
   
   </main>
</body> 
</html> 