<?php
use App\Table\Admin;
if (isset($_POST['submit']))
{
    if(Admin::addAdmin($_POST['pseudo'],$_POST['mdp'],$_POST['email'],0)){
        require "admin.php";
    }
}
echo "Erreur: l'admin n'a pas été créé";
?>