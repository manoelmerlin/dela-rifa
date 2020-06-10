<?php
namespace database;

class Database {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'dela-rifa';
    private $conection;

    public function __construct()
    {
        $this->conection = $this->connect();
    }

    public function connect()
    {
        $conection = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        return (!$conection) ?  mysqli_connect_error() : $conection;
    }

    public function save(array $data, $table)
    {
        $columnsToInsert = '';
        $insetData = '';
        $arrayLength = count($data);
        $countLoop = 0;
        foreach ($data as $key => $value) {
            $countLoop ++;
            $columnsToInsert .= ($arrayLength - $countLoop < 1) ? $key : $key . ',';
            $insetData .= ($arrayLength - $countLoop < 1) ? '"' . $value . '"' : '"' . $value . '",';
        }
        $stmt = $this->conection->prepare("INSERT INTO $table ($columnsToInsert) VALUES ($insetData)");
        $stmt->execute();
        return ($stmt->affected_rows === 1) ? true : false;
    }

    public function select($table, $param, $value) 
    {
        $query = "SELECT * FROM $table WHERE " . $param . " = '" . $value . "'";
        $result = $this->conection->query($query);
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function selectAll($table)
    {
        $query = "SELECT * FROM $table";
        $result = $this->conection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function makeQuery($query)
    {
        $result = $this->conection->query($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

}