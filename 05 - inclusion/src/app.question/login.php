<!DOCTYPE html>
<html>

<head>
    <?php require_once './include/head.php'; ?>
</head>

<body>

    <div class="container">

        <div class="login">
            <form>
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Courriel</label>
                    <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Courriel">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Mot de passe">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col text-center">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </div>
            </form>
        </div>

        <p>
            Utiliser les liens suivant pour l'instant puisque l'identification n'est pas fonctionnelle.
            <ul>
                <li><a href="user">Utilisateur</a></li>
                <li><a href="admin">Administrateur</a></li>
            </ul>
        </p>
    </div>

    <?php require_once './include/footer.php'; ?>
</body>

</html>