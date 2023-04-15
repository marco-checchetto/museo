<!DOCTYPE html>
<html lang="it">

<head>
    <title>Home | Museo IIS Falcone Righi</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Immagini/fav-icon.png" type="image/png">
    <link rel="stylesheet" href="./css/app.css">
    <script src="./js/script.js"></script>
</head>

<body>
    <p class="warn">DISPOSITIVO NON SUPPORTATO</p>
    <div class="page-wrapper">
        <menu id="menu" onclick="openMenu()">
            <p>MENU</p>
            <div class="span-container">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div class="line"></div>
        </menu>

        <nav class="nav">
            <div class="links-container-up">
                <a id="on">home</a>
                <a href="visita.php">visita</a>
                <a href="storia.php">storia</a>
                <a class="login" href="login.php">accedi</a>
            </div>
            <div class="social-container">
                <a href="https://www.youtube.com/channel/UCzV_gOuj3kwfM1T7_virJkQ" target="_blank"><img
                        src="./svg/social/logo-youtube.svg" alt="YouTube IIS Falcone Righi"></a>
                <a href="https://www.instagram.com/falconerighi/" target="_blank"><img
                        src="./svg/social/logo-instagram.svg" alt="Instagram IIS Falcone RIghi"></a>
                <a href="https://www.facebook.com/IISFalconeRighi" target="_blank"><img
                        src="./svg/social/logo-facebook.svg" alt="Facebook IIS Falcone Righi"></a>
                <a href="https://www.iisfalcone-righi.edu.it/" target="_blank"><img src="./svg/social/logo-google.svg"
                        alt="Sito Web IIS Falcone Righi"></a>
                <a href="https://twitter.com/iisfalconerighi" target="_blank"><img src="./svg/social/logo-twitter.svg"
                        alt="Twitter IIS Falcone Righi"></a>
            </div>
        </nav>

        <section id="home">
            <div class="home-container">
                <h1 class="h1-1">MUSEO STORICO</h1>
                <h1 class="h1-2">IIS Falcone Righi</h1>
            </div>
            <div class="home-down">
                <a href="#desc" class="scroll">
                    <img src="./svg/icon/mouse.svg" alt="">
                    <img src="./svg/icon/arrow-down.svg" alt="Scroll down">
                </a>
            </div>
        </section>

        <section id="desc">
            <div class="div-desc">
                <p class="desc">DESCRIZIONE</p>

                <div class="div-desc-content">
                    <div class="div-desc-left-text">
                        <h3 class="subline">&nbsp;IL MUSEO&nbsp;</h3>
                        <p>Noi ragazzi abbiamo voluto creare questo museo virtuale per dare la possibilità di osservare
                            un
                            po la storia e i progetti fatti in passato dai ragazzi dell'istituo.</p>
                    </div>
                    <div class="div-desc-right-text">
                        <h3 class="subline">&nbsp;VISITA A 360°&nbsp;</h3>
                        <p><a href="https://momento360.com/e/uc/e63fef044f70437dbcd15342e615b467?utm_campaign=embed&utm_source=other&size=medium&display-plan=true" class="view"
                                target="_blank">Visita virtuale ai nostri laboratori<a>, potrai vedere a
                                    360° l'interno di tutti i laboratori che la scuola mette
                                    a disposizione degli studenti per mettere</p>
                    </div>
                </div>
            </div>
        </section>

        <footer>
            <p>Copyright &copy 20<?= date('y') ?> <a href="https://www.iisfalcone-righi.edu.it/" target="_blank" style="text-decoration: none; color: brown;">IIS Falcone Righi</a></p>
        </footer>
    </div>
</body>

</html>