<div class="well" class="pagination-centered">
    <h2 class="text-center">Entrez vos identifiants</h2> <br>>

    <form class="form-signin form-horizontal" role="form" action="connexion.php" method="post">
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="text" name="loginad" class="form-control" placeholder="Votre login" required autofocus>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <input type="password" name="passwordad" class="form-control" placeholder="Votre mot de passe" required>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <select name="gamename" class="form-control" required>
                    <option disabled value="J0" selected="selected"> Jeu à administrer</option>
                    <option value="J1"> Là où rêvent nos pères</option>
                    <option disabled value="J2"> Jeu 2 </option>
                    <option disabled value="J3"> Jeu 3</option>
                </select></div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
                <button type="submit" id="bouton" class="btn btn-default btn-primary"> Se connecter</button>
            </div>
        </div>

    </form>
</div>
</div> 