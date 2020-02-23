<?php
    include "init.php";

    include ($_SERVER['DOCUMENT_ROOT']. '/thrifting/models/Transaction.php');

    $transaction = new Transaction("thrifttransaction");


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
        insertTransaction($key,$transaction);
    }
    elseif ($methods == "selectall" || $methods == "getall"){
        $transaction->getAllTransaction();
    }elseif ($methods == "select" || $methods == "get"){
            $id = $_GET["id"];
            if (!empty($id)) {
                echo json_encode($transaction->getTransactionById($id));
            }else{
                echo "Not there!";
            }
    }


    /***
     *  this is the controller method for inserting all school
     * into the database (dbname = add_new_school).
     * it check key value for auth, then also test for fields emptiness, then
     * send to mainModel for the real insertion. this method
     * then return success or failure after all process.
     * @Param Key,Transaction object
    ***/

function insertTransaction($key,$transaction){
    $user_id = $_SESSION["user_id"];
    if ($key == "1234567opiuyt") {


        $note = $_POST["note"];
        $amountPaid = $_POST["amountPaid"];



        $documentPath = "";
        $document = "";
        $counts = 0;
        $file_size = count($_FILES["myFiles"]["tmp_name"]);
        foreach ($_FILES["myFiles"]["tmp_name"] as $myFile => $value) {
            $counts++;
            $targePath = "../models/forAllImage/".basename($_FILES["myFiles"]["name"][$myFile]);

            if($file_size == $counts){
                $document .=basename($_FILES["myFiles"]["name"][$myFile]);
                $documentPath .=$targePath;
            }else{
                $document .=basename($_FILES["myFiles"]["name"][$myFile]).",";
                $documentPath .=$targePath.",";
            }

            move_uploaded_file($value, $targePath);
        }


        if (empty($note)
            || empty($amountPaid)
            || empty($document)
          ) {
                    echo "Fields can't be empty";
            }else{
                if (empty($user_id)){
                    echo "Please Login";
                }else {

                    if ($transaction->saveTransaction("`thrifttransaction`(`id`, `user_id`, `officer_in_charge`, `amount_paid`, `evidence_of_payment`, `path`, `date`, `status`, `deleted`, `note`)",
                        "VALUES (null,'$user_id','0','$amountPaid','$document','$documentPath',now(),'0','0','$note')")) {
                        echo "Successful";
                    } else {
                        echo "Failed";
                    }
                }
        }
    }
}




?>
