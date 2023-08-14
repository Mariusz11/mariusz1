<?php

class DbConnect
{
    private string $host = 'localhost';
    private string $username = 'root';
    private string $password = '1234';
    private string $dbName = 'articlesdb';
    public function getConnection()
    {
        return mysqli_connect($this->host,$this->username,$this->password,$this->dbName);
    }
}