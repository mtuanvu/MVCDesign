<?php
class Database
{
    private $host = 'localhost:3306';

    private $username = 'root';

    private $password = '';

    private $database = 'fptaptechdb';

    private $connection;


    public function __construct()
    {
        $this->connect();
    }

    private function connect()
    {
        $this->connection = new mysqli($this->host, $this->username, $this->password, $this->database, $this->connection);

        if ($this->connection->connect_error) {
            die('Connection failed: ' . $this->connection->connect_error);
        }
    }

    public function query($sql)
    {
        $result = $this->connection->query($sql);

        if (!$result) {
            die('Query failed: ' . $this->connection->error);
        }

        return $result;
    }

    public function fetchAll($result)
    {
        $rows = [];
        while ($row = $result->fetch_assoc()) {
            $rows[] = $row;
        }

        return $rows;
    }

    public function close()
    {
        $this->connection->close();
    }
}
