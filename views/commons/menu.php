<nav class="navbar navbar-expand-md navbar-dark bg-dark perso_Size20">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle perso_ColorRoseMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        L'asso
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item perso_ColorRoseMenu" href="association">Qui sommes-nous ?</a></li>
                        <li><a class="dropdown-item perso_ColorRoseMenu" href="partenaires">Partenaires</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle perso_ColorOrangeMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Pensionnaires
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item perso_ColorOrangeMenu" href="pensionnaires&idstatus=<?= ID_STATUT_A_L_ADOPTION ?>">Ils cherchent une famille</a></li>
                        <li><a class="dropdown-item perso_ColorOrangeMenu" href="pensionnaires&idstatus=<?= ID_STATUT_FALD ?>">Famille d'accueil longue durée</a></li>
                        <li><a class="dropdown-item perso_ColorOrangeMenu" href="pensionnaires&idstatus=<?= ID_STATUT_ADOPTE ?>">Les anciens</a></li>
                        <?php if (Securite::verifAccessSession()) { ?>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item perso_ColorAdminMenu" href="genererPensionnaireAdmin">Gestion des pensionnaires</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle perso_ColorVertMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Actus
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item perso_ColorVertMenu" href="actus&type=<?= TYPE_NEWS ?>">Nouvelles des adoptés</a></li>
                            <li><a class="dropdown-item perso_ColorVertMenu" href="actus&type=<?= TYPE_EVENTS ?>">Evènements</a></li>
                            <li><a class="dropdown-item perso_ColorVertMenu" href="actus&type=<?= TYPE_ACTIONS ?>">Nos actions au quotidien</a></li>
                            <?php if (Securite::verifAccessSession()) { ?>
                                <div class="dropdown-divider"></div>
                                <li><a class="dropdown-item perso_ColorAdminMenu" href="genererNewsAdmin">Gestion des news</a></li>
                            <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle perso_ColorRougeMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Conseils
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item perso_ColorRougeMenu" href="chocolat">Le chocolat</a></li>
                        <li><a class="dropdown-item perso_ColorRougeMenu" href="educateur">Education canine</a></li>
                        <li><a class="dropdown-item perso_ColorRougeMenu" href="plantes">Les plantes toxiques</a></li>
                        <li><a class="dropdown-item perso_ColorRougeMenu" href="sterilisation">Stérilisation</a></li>
                        <li><a class="dropdown-item perso_ColorRougeMenu" href="temperature">Température</a></li>

                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle perso_ColorBleuMenu" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Contacts
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item perso_ColorBleuMenu" href="contact">Contact</a></li>
                        <li><a class="dropdown-item perso_ColorBleuMenu" href="don">Don</a></li>
                        <li><a class="dropdown-item perso_ColorBleuMenu" href="mentions">Mentions Légales</a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>