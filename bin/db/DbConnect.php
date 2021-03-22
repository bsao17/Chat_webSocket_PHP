<?php


class DbConnect
{
    private string $host = 'localhost';
    private string $dbName = 'websocket';
    private string $user = 'root';
    private string $pwd = '';

    public function connection(): string
    {
        try {
            $conn = new PDO('mysql:host'.$this->host.$this->dbName.$this->user.$this->pwd);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $exception) {
            return 'error database connection'.$exception->getMessage();
        }
    }


}
