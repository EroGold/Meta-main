<?php   
    class database
    {
        public $conn =  null;
        public $pdo_stm = null;
        function __construct()
	{
		try
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=meta","root","");
			$this->conn->exec("SET NAMES UTF8");
		}
		catch(PDOException $ex)
		{
			echo "<h3>" . $ex->getMessage() . "</h3>";
			die("<h3> LỖI KẾT NỐI CSDL </h3>");
		}
	}

    function ConnectDB()
	{   $conn = NULL;
		try
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=meta","root","");
			$this->conn->exec("SET NAMES UTF8");
		}
		catch(PDOException $ex)
		{
			echo "<h3>" . $ex->getMessage() . "</h3>";
			die("<h3> ERROR CONNECT DATABASE </h3>");
		}
		return $conn;
	}

	function ThucthiSQL($sql, $data=NULL)
	{
		$this->pdo_stm = $this->conn->prepare($sql);
		$ketqua=false;
		if($data!=NULL)
			$ketqua = $this->pdo_stm->execute($data);
		else
			$ketqua = $this->pdo_stm->execute();
		return $ketqua;
	}
}
?>