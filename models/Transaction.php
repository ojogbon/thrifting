<?php error_reporting( E_ALL ); ?>
<?php

/**
 *
 */
class Transaction extends MainModel
{
//    public $db ;
//    public function __construct($db)
//    {
//        $this->db = $db;
//    }

    public function getInfo () {
  $infos = $this->selectALl("contact");

  foreach ($infos as $info) {
    // code...
    //echo $info["id"];
  }
}

public function saveTransaction($table,$values)
{
    $insert = $this->insertToTables($table,$values);
    if ($insert) {
      // code...
      return $insert;
    }
    return false;
}




    public function getAllTransaction()
    {
        $sql = "select * from thrifttransaction ";

        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getAllTransactionBySql($sql)
    {
        $result = $this->db->getAll($sql);
            return $result;
    }

    public function getTransactionById($id)
    {
        $sql = "select * from  thrifttransaction where id = '".$id."'";
        $result = $this->db->getOne($sql);
            return $result;
    }

    public function UpdateTransaction ($sql){

         $update = $this->UpdateAll($sql);
          $update;
    }




}


 ?>
