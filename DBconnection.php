<?php

define("_DBTYPE", "mysql");
define("_HOST", "localhost");
define("_DB", "proveedoresCarrito");
define("_USSER", "root");
define("_PASS", "root");

class DBconnection {

    private static $_instance;

    protected function getConnection() {
        if(!self::$_instance) {
            self::$_instance = new mysqli(_HOST, _USSER, _PASS, _DB);
            DBconnection::checkConnection(@self::$_instance);
        }
        return self::$_instance;
    }

    public function checkConnection($_connection){
        if($_connection->connect_errno){
            echo "Error numero: " . $_connection->connect_errno . "<br>";
            echo "Error: " . $_connection->connect_error . "<br>";
            exit();
        }
    }

    public function disconnect(){ $this->_connection->close(); }
}