<?php
    class Db {
        protected function connect() {
            try {
                $host = "localhost";
                $dbname = "ooplogin";
                $username = "root";
                $password = "";
                
                return new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $username, $password);
            } catch (PDOException $e) {
                echo "Error " . $e->getMessage() . "<br/>";
                die();
            }
        }
    }
?>