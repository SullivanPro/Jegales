<?php
namespace App;

use \PDO;

class Database{

    private $dbName;
    private $dbUser;
    private $dbPassword;
    private $dbHost;
    private $pdo;

    public function __construct($dbName, $dbUser = 'root', $dbPassword = '', $dbHost = 'localhost') {
        $this->dbName = $dbName;
        $this->dbUser = $dbUser;
        $this->dbPassword = $dbPassword;
        $this->dbHost = $dbHost;
    }

    private function getPDO() {
        if($this->pdo === NULL) { //eviter plusieurs connexion à la db, contre fuite de mémoire
            $pdo = new PDO('mysql:dbname=jeugales;host=localhost', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //rapport erreur
            $this->pdo = $pdo;
        }
        return $this->pdo;
    }

    public function query($statement, $className){
        $req = $this->getPDO()->query($statement);
        $datas = $req->fetchAll(PDO::FETCH_CLASS, $className); //execute la requette et charge la classe
        return $datas;
    }

    public function prepare($statement, $values, $className, $one = false) {
        $req = $this->getPDO()->prepare($statement);
        $req->execute($values);
        $req->setFetchMode(PDO::FETCH_CLASS, $className);
        if($one) {
            $datas = $req->fetch(); //premiere reponse du tableau
        } else {
            $datas = $req->fetchAll(); //totalite du tableau
        }
        return $datas;

    }
}