<?php
class ProductModel extends dbProduct
{
    public function getRecords($tablename)
    {
        $qr = "SELECT * FROM $tablename";
        return mysqli_query($this->con, $qr);
    }
    public function getRecordsbyField($tablename,$field,$keyword)
    {
        $sql = "SELECT * FROM $tablename where $field = 'keyword'";
        return mysqli_query($this->con,$sql);
    }
}
?>