<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Magomed Deniev</title>
        <meta name="description" content="Web developer & designer" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="/assets/images/web/favicon.ico" type="image/x-icon">
        <link rel="apple-touch-icon" href="/assets/images/web/apple-touch-icon.png">
        <link rel="icon" href="/assets/images/web/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="/assets/fontawesome/all.css">
        <link rel="stylesheet" href="/assets/styles.css">
    </head>

    <body>

        <?php require_once 'sections/header.php' ?>

        <div class="container" id="PageTop">

            <div class="main">

                <div class="content">

                    <div class="intro">

                        <div class="intro-image">
                            <img alt="Magomed" src="/assets/images/me.jpg">
                        </div>

                        <div class="intro-name">
                            <h1 class="name">MAGOMED DENIEV</h1>
                            <h3>Développeur & designer web</h3>
                        </div>

                        <div class="intro-text">
                            <p>
                                Ayant toujours été passionné par le domaine du numérique et ayant eu plusieurs
                                expériences significatives en tant qu'intégrateur & designer web, j'ai voulu
                                me perfectionner dans ce domaine en intégrant une formation de développeur web.
                                Aujourd'hui, après avoir terminé avec succès ce cursus et acquis de
                                nombreuses compétences, je suis à la recherche d'un emploi à Nice
                                en tant que développeur web fullstack.
                            </p>
                        </div>

                    </div>

                    <?php require_once 'sections/work.php' ?>
                    <?php require_once 'sections/education.php' ?>
                    <?php require_once 'sections/skills.php' ?>
                    <?php require_once 'sections/projects.php' ?>

                </div>

                <footer>

                    <div id="Feedback">

                        <span class="social">
                            <a href="https://www.linkedin.com/in/deniev/"><i class="fab fa-linkedin"></i></a>
<!--                            <a href="https://github.com/deniiiev/"><i class="fab fa-github-square"></i></a>-->
                        </span>

                        <span class="email">job@deniev.com</span>

                    </div>

                </footer>

            </div>

        </div>

        <script src="/assets/scripts.js"></script>

    </body>

</html>
