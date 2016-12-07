<?php
namespace App;

class App {

    const DBNAME = 'jeugales';
    const DBUSER = 'root';
    const DBPASS = '';
    const DBHOST = 'localhost';

    private static $database;

    public static function getDatabase() {
        if (self::$database === NULL) {
            self::$database = new Database(self::DBNAME, self::DBUSER, self::DBPASS, self::DBHOST);
            return self::$database;
        }

        return self::$database;

    }

}