<?php

namespace App\Table;
use App\App;


class Admin
{
    public static function addAdmin($pseudo, $mdp, $email, $rank, $date=null) {
        if($date===null) $date=date("Y-m-d H:i:s");
        $request = "INSERT INTO admin VALUES ($pseudo, $mdp, $email, $date, $rank);";
        return App::getDatabase()->query($request, __CLASS__);
    }
}