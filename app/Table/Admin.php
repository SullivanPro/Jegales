<?php

namespace App\Table;
use App\App;


class Admin
{
    public static function addAdmin($pseudo, $mdp, $email, $rank, $date=null) {
        if($date===null) $date=date("Y-m-d H:i:s");
        $statement = "INSERT INTO admin VALUES (?, ?, ?, ?, ?);";
        $values = explode(", ","$pseudo, $mdp, $email, $date, $rank");
        if(App::getDatabase()->prepare($statement,$values,Admin::class,"rowCount") == 1) return true;
        return false;




        /*$request = "INSERT INTO admin VALUES ($pseudo, $mdp, $email, $date, $rank);";
        return App::getDatabase()->query($request, __CLASS__);*/
    }
}