<?php


namespace lib;


class MySQL
{
    private $hostName = 'localhost';
    private $userName = 'root';
    private $password = '';
    private $database = 'notas';
    private $conn;

    public function __construct()
    {
        $this->conn = $this->connect();
    }


    public
    function connect()
    {
        return mysqli_connect($this->hostName, $this->userName, $this->password, $this->database);
    }

    public
    function query(
        $sql
    ) {
        return mysqli_query($this->conn, $sql);
    }

    public
    function insert_id()
    {
        return mysqli_insert_id($this->conn);
    }

    public
    function fetch_object(
        $query
    ) {
        return mysqli_fetch_object($query);
    }
}