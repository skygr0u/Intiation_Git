<?php

        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $name = $_POST["name"];
            $email = $_POST["email"];
            $message = $_POST["message"];
            $date = date("Y-m-d");

            try {
                require_once "dbh.inc.php";

                $query = "INSERT INTO users(name, email, message, date) VALUES(:name, :email, :message, :date);";

                $stmt = $pdo->prepare($query);
                $stmt->bindParam(":name", $name);
                $stmt->bindParam(":email", $email);
                $stmt->bindParam(":message", $message);
                $stmt->bindParam(":date", $date);

                $stmt->execute();

                $pdo = null;
                $stmt = null;

                header("Location: ../livredor.php");
                die("");

            }catch(Exception $e){
                echo "Query Failed :" . $e->getMessage();  
            }
        }
        else {
            header("Location: ../livredor.php");
        }       


