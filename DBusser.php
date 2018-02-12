<?php

class DBusser extends DBquery {
    public $_connection;

    function __construct() {

        $this->_connection = DBconnection::getConnection();
    }

    public function getConnection() { return $this->_connection; }
    public function setConnection($connection) { $this->_connection = $connection; }
}