<?php
    $title = 'ETC Rouen';
    include('_inc/header.php');
?>
<main>
    <div class="imgBack imgBackETC"></div>
    <div class="container-fluid hero">
        <div class="row pt-4 pt-md-5 pt-lg-4">
            <div class="heroText col-12">
                <h1 class="mt-4 mb-4 mb-md-5 mb-lg-4 strokeText">ETC Rouen</h1>
            </div>
            <div class="heroText col-10 col-lg-7">
                <p>ETC Rouen est un bureau d'étude thermique situé à Grand-Quevilly et l'entreprise dans laquelle j'ai effectué mon stage de fin de deuxième année de DUT, afin de valider mon diplôme. J'y ai accompli différentes missions dans le domaine du web et du design graphique. </p>
            </div>
        </div>
        <div class="row pt-2 pt-md-5 pt-lg-4 pl-lg-4">
            <div class="heroText col-6 col-lg-4">
                <h2><small>Logiciels utilisés :</small></h2>
                <ul>
                    <li><small>Adobe Photoshop</small></li>
                    <li><small>Adobe Illustrator</small></li>
                    <li><small>Adobe XD</small></li>
                </ul>
            </div>
            <div class="heroText col-6 col-lg-4">
                <h2><small>Technologie utilisées :</small></h2>
                <ul>
                    <li><small>HTML</small></li>
                    <li><small>CSS (SASS)</small></li>
                    <li><small>Bootstrap</small></li>
                    <li><small>jQuery</small></li>
                    <li><small>PHP</small></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid content">
        <div class="row pt-4 pt-lg-5">
            <div class="contentImg col-12 col-lg-6 d-flex justify-content-center">
                <img src="img/etc/flyer.png" alt="">
            </div>
            <div class="contentText col-12 col-lg-6 pt-4 pt-lg-0 d-flex flex-column justify-content-center">
                <h2>Mes missions - Flyer Audit Energétique</h2>
                <p>La toute première mission qui m'a été confié au sein de l'entreprise a été la création de flyer pour leur service d'audit énergétique. La composition devait réutiliser l'image choisie pour la précédente version du flyer, mais aussi la couleur pour tout ce qui est thermique dans l'entreprise, à savoir le orange.</p>
                <p>Après être passé par de nombreuses versions, quelques réunions avec l'équipe de direction ainsi qu'un tour des bureaux pour avoir un avis général, la version retenue est celle ci-contre. On retrouve le orange et les informations essentiels pour comprendre l'audit, et pour faire savoir au particulier qu'une aide existe en Normandie pour les accompagner.</p>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="contentText col-12 col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h2>Plaquette Numérisation 3D</h2>
                <p>Ma seconde mission a été de réaliser une plaquette pour leur service de numérisation 3D des bâtiments. J'ai repris l'idée de multitude de points générés par le scanner 3D pour représenter un lieu et l'ai intégré à le recto de la plaquette. Pour ce qui est du verso, j'ai reproduit un des versos d'une de leur précédente plaquette en l'agrémentant un peu et en utilisant le gris, couleur s'intégrant bien pour ce service et faisant partie de la charte graphique de l'entreprise. Pour cette plaquette, j'ai réalisé une version alternative, avec un recto différent.</p>
            </div>
            <div class="contentImg col-12 col-lg-6 order-1 order-lg-2 d-flex justify-content-center">
                <img src="img/etc/plaquette.png" alt="">
            </div>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="contentImg col-12 col-lg-6 d-flex justify-content-center">
                <img src="img/etc/maquette.png" alt="">
            </div>
            <div class="contentText col-12 col-lg-6 pt-4 pt-lg-0 d-flex flex-column justify-content-center">
                <h2>Site web</h2>
                <p>Ma mission principale était la refonte graphique de leur site web avec l'intégration par la suite. J'ai donc choisi de travailler de la manière suivante :</p>
                <div class="contentLi">
                    <ul>
                        <li>Wireframe</li>
                        <li>Maquette</li>
                        <li>Intégration</li>
                    </ul>
                </div>
                <p>Cela m'a permis de définir des besoins nécessaires dans le design (comme l'accès à l'espace client devant être accessible en tout temps) et l'UX générale du projet. J'ai donc créé 5 wireframes différents à proposer à l'équipe de direction. Après réflexion, 2 de ces wireframes ont été choisis pour être réalisé en maquette. Enfin, le choix devait être fait entre ces deux versions, et l'entreprise à demander un mix des deux, que j'ai réalisé et qui est finalement devenu la maquette que j'ai intégré par la suite.</p>
            </div>
        </div>
        <div class="row mt-4 mt-lg-5">
            <div class="contentText col-12 col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <p>J'ai commencé lors de l'intégration par créer des patterns pour la mise en forme de mes pages et les différents éléments qui y seront placés. Le but était d'avoir d'abord une grande image en hero avec du texte (ou un design particulier avec des photos défilantes pour l'accueil sur PC). Pour le responsive, j'ai adapté les contenus et photos aux tailles d'écrans, pour afficher l'essentiel des informations.</p>
                <p>Pour finir, j'ai créé le formulaire de contact avec PHPMailer pour permettre un envoi plus sécurisé via le serveur SMTP mis en place par l'entreprise.</p>
            </div>
            <div class="contentImg col-12 col-lg-6 order-1 order-lg-2 d-flex justify-content-center">
                <img src="img/etc/responsive-display.png" alt="">
            </div>
        </div>
        <div class="row mt-3 mt-md-5">
            <div class="col-12 contentText text-center">
                <a class="explore" href="http://www.be-etc.com" target="_blank" rel="noopener nofollow">
                    <span class="text">Explorer le site ETC Rouen</span>
                    <span class="line -right"></span>
                    <span class="line -top"></span>
                    <span class="line -left"></span>
                    <span class="line -bottom"></span>
                </a>
            </div>
        </div>
        <div class="row mt-3 mt-md-5 mt-lg-5">
            <div class="contentText col-12">
                <p class="text-center nextProject">Projet suivant :</p>
                <a href="jdm.php" class="strokeText"><h2 class="nextProject">JDM MMI Rouen</h2></a>
            </div>
        </div>
    </div>
</main>
<?php
    include('_inc/footer.php');
?>