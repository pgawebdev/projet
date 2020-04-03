<?php

    require_once 'config.php';

    class Database
{

    private $dsn;
    private $username;
    private $pwd;
    private $options;

    public $conn;

    public function __construct()
    {
        $this->dsn = DSN;
        $this->username = USERNAME;
        $this->pwd =PWD;
        $this->options = OPTIONS;
    }

    function connect()
    {
        try
        {
            $this->conn = new PDO($this->dsn, $this->username, $this->pwd, $this->options);
           
        }
        catch(PDOException $error)
        {
            echo 'Error:' .$error->getMessage();
        }

        return $this->conn;   
    }
}
