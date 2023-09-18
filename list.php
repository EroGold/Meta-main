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

        function catetoryList($trangthai =2, $order =0)
            {
                $sql = "SELECT * FROM list";
                if($trangthai!=2)
                    $sql = $sql . " WHERE list_status = " . $trangthai;
                else if($order == 1)
                    $sql .= " ORDER BY list_ord ASC";
                if($order == -1)
                    $sql .= " ORDER BY list_ord DESC";
                    $ketqua = $this->db->ThucthiSQL($sql);

                $this->data=NULL;
                if($ketqua==TRUE)
                    $this->data = $this->db->pdo_stm->fetchAll();
                return $ketqua;
            }

        function addCatetory($list_name, $list_ord, $list_status)
            {
                $sql = "INSERT INTO product values ( NULL, ?, ?, ?)";
                $data[] = $list_name;
                $data[] = $list_ord;
                $data[] = $list_status;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
                return $ketqua;
            }

        function fixCatetory($list_name, $list_ord, $list_status)
            {
                $sql = "UPDATE product SET list_name = ?, list_ord = ?, list_status = ? WHERE prod_id=?";
                $data[] = $list_name;
                $data[] = $list_ord;
                $data[] = $list_status;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
                return $ketqua;
            }

        function removeCatetory($list_id)
            {
                $sql = "DELETE FROM product WHERE cat_id=?";
                $data[] = $list_id;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
		        return $ketqua;
            }

        function findCatetoryID($list_id)
            {
                $sql = "SELECT * from product Where prod_id =?";
                $data[] = $list_id;
 		        $ketqua = $this->db->ThucthiSQL($sql,$data);

                $this->data=NULL;
                if($ketqua==TRUE)
                    $this->data = $this->db->pdo_stm->fetch();
                return $ketqua;
            }

        function changeCatetoryStatus($list_id, $list_status)
            {
                $sql = "UPDATE product SET prod_status = ? WHERE prod_id=?";
                $data[] = $list_id;
                $data[] = $list_status;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
                return $ketqua;
            }
    }

?>