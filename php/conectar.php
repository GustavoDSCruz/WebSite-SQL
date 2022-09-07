<html>
<head>
<meta charset ="UTF-8">
<title></title>
</head>
<body>

<?php 
class Conectar extends PDO{
	private static $instancia;
	private $query;
	private $host= "127.0.0.1"; //ender servidor da etec
	private $usuario = "root"; //usuario servidor da etec
	private $senha= ""; // senha servidor etec 
	private $db = "exemplocurso"; //banco do msql 
	
public function __construct() 
{
	parent:: __construct("mysql:host=$this->host;dbname=$this->db","$this->usuario","$this->senha");
}
    public static function getInstance()
{
	if (!isset (self::$instancia))
	{
		try 
	{
		self::$instancia= new Conectar;
        echo 'conectado com sucesso!!!';
	}
      	
      catch (Exception $e)
	  {
		echo 'Erro ao conectar';
		exit();
	  }
	}
	  return self::$instancia;
}
    public function sql ($query)
	{
		$this->getInstance();
		$this->query = $query;
		$stmt= $pdo->prepare($this->query);
		$stmt->execute();
		$pdo= null;
	}
}
?>

</body>

</html>