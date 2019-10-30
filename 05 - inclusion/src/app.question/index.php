<!DOCTYPE html>
<html>

<head>
    <?php require_once './include/head.php'; ?>
</head>

<body>

    <div class="container">

        <div class="jumbotron">
            <h1 class="display-4">APP (Première application PHP)</h1>
            <p class="lead">Exemple d'une application avec plusieurs pages.</p>
            <p>L'objectif est de démontrer la réutilisation du contenu en utilisant les mécanismes d'inclusion.</p>
            <hr class="my-4">
            <p>Note: La page d'identification contient seulement la présentation dans cette version.</p>
            <a class="btn btn-primary btn-lg" href="login.php" role="button">Connection</a>
        </div>

    </div>

    <?php require_once './include/footer.php'; ?>
</body>

</html>