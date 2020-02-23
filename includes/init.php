<?php

use http\Client;

session_start();

    include ($_SERVER['DOCUMENT_ROOT']. '/thrifting/models/MainModel.php');
    $mainModel = new MainModel();
