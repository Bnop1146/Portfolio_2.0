<?php ?>


<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">


    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

    <title>Opgave: Rock Finder</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/6b4a3d7b29.js" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/h4ru18k2oqic6a1dmyhtku0v5gp4y1lc52kb2r4saf99fguv/tinymce/5/tinymce.min.js"
            referrerpolicy="origin"></script>
</head>
<body>


<header class="l-header">
    <nav class="nav bd-grid">
        <div>
            <a href="index.html" class="nav__logo">
                <img src="images/Logo.png" style="width: 30px" class="d-inline-block align-top" alt="">
                Joachim Berner
            </a>
        </div>

        <div class="nav__menu" id="nav-menu">
            <ul class="nav__list">
                <li class="nav__item"><a href="index.html" class=" fa fa-home nav__link active"> Hjem</a></li>
            </ul>
        </div>

        <div class="nav__toggle" id="nav-toggle">
            <i class='bx bx-menu'></i>
        </div>
    </nav>
</header>

<br> <br> <br>

<div class="how-section1">

    <div class="row">
        <div class="col-md-6">
            <h4>Rock Finder</h4>
            <h4 class="subheading">Upload og Hentning fra Database</h4>
            <p class="text-muted">Til denne side fik vi til opgave at lave et bibliotek, med et valgfrit emne, hvor jeg
                valgte et rock musik bibliotek.
                Vi lærte her at oprette en Database og en oprettelses form, så man kan uploade albums til Databasen.
                Hvor man derefter kan hente data fra Databasen til
                visning på hjemmesiden</p>
        </div>
        <div class="col-md-6 how-img">
            <img src="images/rockfinder.jpg" class="rounded-circle img-fluid"
                 alt=""/>
        </div>
    </div>
</div>


<footer class="footer section">
    <div class="footer__container bd-grid">
        <div class="footer__data">
            <h2 class="footer__title">Joachim Berner</h2>
            <p class="footer__text text-warning">Hej mit navn er Joachim Berner </p>
            <p class="footer__text text-warning"> og her er mit Portfolio</p>
        </div>

        <div class="footer__data">
            <h2 class="footer__title">Find rundt på siden</h2>
            <ul>
                <li><a href="index.html" class="fa fa-home footer__link text-warning"> Hjem</a></li>
            </ul>
        </div>

        <div class="footer__data">
            <h2 class="footer__title">Find mig også på</h2>
            <a href="https://www.linkedin.com/in/joachim-berner-249906208/"
               class="about__social-icon fab fa-linkedin-in text-warning"></a>
            <a href="https://github.com/Bnop1146" class="about__social-icon fab fa-github text-warning"></a>
        </div>


    </div>
</footer>

</body>

</html>