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
			$this->conn->exec("SET NAMES UTF8");//Thiết lập làm việc với unicode
		}
		catch(PDOException $ex)
		{
			echo "<h3>" . $ex->getMessage() . "</h3>";
			die("<h3> LỖI KẾT NỐI CSDL </h3>");
		}
	}

    function ConnectDB()
	{   $conn = NULL;
		try//kết nối CSDL và lưu vào thuộc tính conn
		{
			$this->conn = new PDO("mysql:host=localhost;dbname=meta","root","");
			$this->conn->exec("SET NAMES UTF8");//Thiết lập làm việc với unicode
		}
		catch(PDOException $ex)
		{
			echo "<h3>" . $ex->getMessage() . "</h3>";
			die("<h3> ERROR CONNECT DATABASE </h3>");
		}
		return $conn; //trả về đối tượng PDO
	}
    }