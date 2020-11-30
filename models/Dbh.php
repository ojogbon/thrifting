<?php
include_once "DbHandler.php";
    class Dbh extends DbHandler
    {
        protected $servername;
        protected $username;
        protected $password;
        protected $dbname;
        protected $charset;

        public function dbConnect()
        {
            // $this->servername = "localhost" ;
            // $this->username = "root";
            // $this->password = "";
            // $this->dbname = "thrift";
            // $this->charset = "utf8mb4";

            $this->servername = "us-cdbr-east-02.cleardb.com" ;
            $this->username = "b1a757ed6ef1a0";
            $this->password = "0a776172";
            $this->dbname = "heroku_7edec63ace2b6c5";
            $this->charset = "utf8mb4";


            try {
                $dsn = "mysql:host=".$this->servername.";dbname=".$this->dbname.";charset=".$this->charset;
                $pdo = new PDO($dsn, $this->username, $this->password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $pdo;
            } catch (PDOException $e) {
                echo "Connection Failed: ".$e->getMessage();
            }
        }
    }

?>
