<!--page d'inscription-->
<div class="container">
    <div class='row'><br>
        <h1><img src="./image/zxj.jpg" style="width: 3rem">Inscription</h1>
        <center>
            <div class="card bg-black" style="width: 25rem;">
                <div class="card-body">
                    <form action="./?action=inscription" method="POST">
                        <div class="form-group">
                            <input type="text" name="pseudo" required="required" placeholder="Nouveau Pseudo" class="form-control bg-black text-light"/><br>
                        </div>
                        <div class="form-group">
                            <input type="password" name="mdp" required="required" placeholder="Nouveau Mot de passe" class="form-control bg-black text-light" /><br>
                        </div>
                        <div class="form-group">
                            <input type="password" name="mdp2" required="required" placeholder="Confirmez Mot de passe" class="form-control bg-black text-light" /><br>
                        </div>
                        <!--message d'erreur-->
                        <?php if(isset($message)){
                                print(" 
                                    <div class=\"form-group\">
                                        <p class=\"text-danger\">".$message."</p>
                                    </div>");
                        }?>

                        <button type="submit" class="btn btn-light">Inscription</button><br>
                        <a href="./?action=connexion">Connexion</a>
                    </form>
                </div>
            </div>
        </center>
    </div>
</div>