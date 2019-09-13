<?php

error_reporting(E_ALL);
ini_set('display_errors','On');

// je récupère mon Pdo
require_once ('Pdo.php');

class  ForTheUser
{
    
    public function __construct(){
        global $pdo;
        $this->pdo = $pdo;
    }

    // public function insert(){
    //     $sql = 'INSERT INTO Service ( Service_Name, Description,) VALUES(?, ?)';
    //     $prp = $this->pdo->prepare($sql);
    //     $prp->execute();

    // }
    public function myArray(){
        try {
            $sql = 'SELECT * FROM Utilisateur';
            $stmt = $this->pdo->prepare($sql);
            $aReussiAExecuter = $stmt->execute();
            $prpFetch = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $prpFetch;
        }
        catch (PDOException $e) {
            print $e->getMessage();
        }
    }
}


    
  