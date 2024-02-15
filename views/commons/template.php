<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $description; ?>">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= URL ?>public/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= URL ?>public/css/main.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Copse&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container p-0 mt-2 rounded perso_shadow">
        <header class="bg-dark text-white rounded-top perso_titre">
            <div class="row align-items-center m-0">
                <div class="col-2 p-2 text-center">
                    <a href="accueil">
                        <img src="<?= URL ?>public/sources/images/Autres/logoNANA2.jpg" class="rounded-circle img-fluid perso_logoSize" alt="logo">
                    </a>
                </div>
                <div class="col-8 m-0 p-0">
                    <?php include('menu.php'); ?>
                </div>
                <div class="col-2 text-right pt-1 pe-4 d-none d-lg-block">
                    N.A.N.A <br /> Clermont (09)
                </div>
            </div>
        </header>

        <!-- -- Contenu du site -- -->

        <div class="border p-1 perso_minCorpSize px-5">

            <?= $content; ?>

        </div>

        <!-- Fin du Contenu du site -->

        <footer class="bg-dark text-white text-center rounded-bottom">
            <p class="p-2">&copy; Association N.A.N.A 2019-2019</p>
        </footer>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="<?= URL ?>public/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>