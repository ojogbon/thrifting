<?php
    include "init.php";

    include ($_SERVER['DOCUMENT_ROOT']. '/thrifting/models/User.php');

    $user = new User();


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
    insertUser($key,$user);
}
elseif ($methods == "selectall" || $methods == "getall"){
    $username = $_GET["username"];
    $password = $_GET["password"];
    $sql = "select id from users where email='".$username."' and password ='".$password."'";
    if(count($user->getAllUserBySql($sql)[0]) > 0){
        $_SESSION["user_id"] =  $user->getAllUserBySql($sql)[0]["id"];
        $_SESSION["user_email"] =  $username;
        echo 1;
    }else{
        echo 0;
    }
}elseif ($methods == "select" || $methods == "get"){
    $id = $_GET["id"];
    if (!empty($id)) {
        echo json_encode($user->getUserById($id));
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

function insertUser($key,$user){

    if ($key == "1234567opiuyt") {

        $firstName = $_POST["firstName"];
        $lastName = $_POST["lastName"];
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $confirmPass = $_POST["confirmPass"];
        $phoneNumber = $_POST["phoneNumber"];


//        $documentPath = "";
//        $document = "";
//        $count_size = count($_FILES["myFiles"]["tmp_name"]);
//        $counts = 0;
//        foreach ($_FILES["myFiles"]["tmp_name"] as $myFile => $value) {
//            $targePath = "../models/forAllImage/".basename($_FILES["myFiles"]["name"][$myFile]);
//            $counts ++;
//            if($counts == $count_size){
//                $documentPath .= $targePath ;
//                $document .= basename($_FILES["myFiles"]["name"][$myFile]) ;
//            }else {
//                $documentPath .= $targePath . ",";
//                $document .= basename($_FILES["myFiles"]["name"][$myFile]) . ",";
//            }
//            move_uploaded_file($value, $targePath);
//        }

        if (empty($firstName)
            || empty($lastName)
            || empty($email)
            || empty($pass)
            || empty($confirmPass)
            || empty($phoneNumber)
        ){
            echo "Fields can't be empty";
        }else{
            if ($pass != $confirmPass ){
                echo "Please check Password Confirmation";
            }else {
                if($user->saveUser("`users`(`id`, `firstname`, `lastname`, `email`, `password`, `phonenumber`, `date`, `status`) ",
                    "VALUES (null,'$firstName','$lastName','$email','$pass','$phoneNumber',now(),'0')")){
                    echo "Successful";
                }else{
                    echo "Failed";
                }
            }
        }
    }
}




?>
