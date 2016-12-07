<?php
use App\Table\Admin;
if (isset($_POST['submit']))
{
    if(Admin::addAdmin($_POST['pseudo'],$_POST['mdp'],$_POST['email'],0)){

    }
}
?>
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <form action="admin.php" method="post">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" class="form-control" id="password" placeholder="Mot de passe">
                </div>
                <div class="form-group">
                    <label for="pseudo">Pseudo</label>
                    <input type="text" class="form-control" id="pseudo" placeholder="Pseudo">
                </div>
                <button name="submit" type="submit" class="btn btn-default">Submit</button>
            </form>
        </div>
    </div>
</div>