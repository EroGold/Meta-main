<?php
    require_once("database.php");

    class product{
        public $db;
	    public $data;
	    function __construct()
	    {
		    $this->db = new database();
		    $this->data = array();
	    }

        function LayDanhSachSanpham($trangthai=2, $list_id=0, $tukhoa="")
            {
                $sql = "SELECT sp.*, list.list_name, list.list_status
                        from product as sp Inner join list as list
                        ON sp.list_id=list.list_id WHERE 1 ";
                    
                    if($list_id!=0)
                        $sql = $sql . " AND Sp.list_id = " . $list_id;
                        if($trangthai!=2) 
                        {
                            $sql = $sql . " AND status = " . $trangthai;
                            $sql = $sql . " AND list_status = " . $trangthai;
                        }
                        
                        if($tukhoa!="")
                            $sql = $sql . " AND Sp.info LIKE '%" . $tukhoa . "%'";
                            
                        $ketqua = $this->db->ThucthiSQL($sql);

                        $this->data=NULL;
                        if($ketqua==TRUE)
                            $this->data = $this->db->pdo_stm->fetchAll();
                        return $ketqua;
            }

    	function LayDanhSachSP($trangthai=2, $list_id=0, $tukhoa="")
            {
                $conn = ConnectDB();
                if($conn == null)
                    return -1;
            }


    }
?>