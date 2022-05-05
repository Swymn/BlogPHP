<?php

class DataBase {

    private string $hostname = "localhost";
    private string $usernameDB = "root";
    private string $passwordDB = "";

    private PDO $dbh;


    public function __construct(string $dbname) {
        $dsn = "mysql:dbname=$dbname;host=". $this -> hostname;

        try {
            
            $this -> dbh = new PDO($dsn, $this -> usernameDB, $this -> passwordDB);
            $this -> dbh -> exec("SET NAMES utf8");
            $this -> dbh -> setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        } catch (PDOException $e) {
            die("Error ! ". $e -> getMessage() . "<br />");
        }
    }

    private function prepareRequest(string $query): PDOStatement {
        return $this -> dbh -> prepare($query);
    }

    public function addUser(string $username, string $email, string $password) {

        $result = $this -> prepareRequest("INSERT INTO users(username, email, password) VALUES (:username, :email, :password)");

        $result -> bindValue(":username", $username, PDO::PARAM_STR);
        $result -> bindValue(":email", $email, PDO::PARAM_STR);
        $result -> bindValue(":password", $password, PDO::PARAM_STR);

        $result -> execute();

        if ($result)
            return $result -> fetch();
        else
            die("Query FAILED");
    }

}