<?php
    include "init.php";

    include ($_SERVER['DOCUMENT_ROOT']. '/thrifting/models/Transaction.php');

    $transaction = new Transaction();


$key = "";
$methods = "";

if (!empty($_GET)) {
    // code...
    $key = $_GET["key"];
    $methods = $_GET["method"];
}else {
    // code...
    $key = "";
    $methods = "";

}





if ($methods == "insert" || $methods == "post"){
//    insertUser($key,$user);
}
elseif ($methods == "selectall" || $methods == "getall"){
    $id= $_GET["id"];
    $users = $_SESSION["adminID"];
    updateTransaction($transaction,$key,$users,$id);
}elseif ($methods == "select" || $methods == "get"){
    $id = $_GET["id"];
    if (!empty($id)) {
        echo json_encode($user->getUserById($id));
    }else{
        echo "Not there!";
    }
}


/***
 *  this is the controller method for updating transactions
 * into the database (dbname = transaction table).
 * @Param Key
 * @param user
 * @param value
 ***/

function updateTransaction($transaction,$key,$user,$value){

    if ($key == "1234567opiuyt") {

        if (empty($value)){
            echo "Fields can't be empty";
        }else{
            $sql = "UPDATE `thrifttransaction` SET `officer_in_charge` = '".$user."',`status`= 'marked' WHERE id ='".$value."'";

                if($transaction->UpdateTransaction($sql) == ""){
                    echo "Successful";
                }else{
                    echo "Failed";
                }

        }
    }
}




?>
