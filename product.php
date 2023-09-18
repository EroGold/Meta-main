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
                $sql = "SELECT * FROM product";
                if($trangthai!=2)
                    $sql = $sql . " WHERE prod_status = " . $trangthai;
                else if($order == 1)
                    $sql .= " ORDER BY prod_ord ASC";
                if($order == -1)
                    $sql .= " ORDER BY prod_ord DESC";
                    $ketqua = $this->db->ThucthiSQL($sql);

                $this->data=NULL;
                if($ketqua==TRUE)
                    $this->data = $this->db->pdo_stm->fetchAll();
                return $ketqua;
            }

        function addCatetory($discount, $image, $info, $price, $prod_ord, $prod_status)
            {
                $sql = "INSERT INTO product values ( NULL, ?, ?, ?, ?, ?, ?,)";
                $data[] = $discount;
                $data[] = $image;
                $data[] = $info;
                $data[] = $price;
                $data[] = $prod_ord;
                $data[] = $prod_status;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
                return $ketqua;
            }

        function fixCatetory($discount, $image, $info, $price, $prod_ord, $prod_status)
            {
                $sql = "UPDATE product SET discount = ?, info = ?, price = ?, prod_ord = ?, prod_status = ? WHERE prod_id=?";
                $data[] = $discount;
                $data[] = $image;
                $data[] = $info;
                $data[] = $price;
                $data[] = $prod_ord;
                $data[] = $prod_status;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
		        return $ketqua;
            }

        function removeCatetory($prod_id)
            {
                $sql = "DELETE FROM product WHERE cat_id=?";
                $data[] = $prod_id;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
		        return $ketqua;
            }

        function findCatetoryID($prod_id)
            {
                $sql = "SELECT * from product Where prod_id =?";
                $data[] = $prod_id;
 		        $ketqua = $this->db->ThucthiSQL($sql,$data);

                $this->data=NULL;
                if($ketqua==TRUE)
                    $this->data = $this->db->pdo_stm->fetch();
                return $ketqua;
            }

        function changeCatetoryStatus($prod_id, $prod_status)
            {
                $sql = "UPDATE product SET prod_status = ? WHERE prod_id=?";
                $data[] = $prod_id;
                $data[] = $prod_status;
                $ketqua = $this->db->ThucthiSQL($sql,$data);
                return $ketqua;
            }
    }

?>