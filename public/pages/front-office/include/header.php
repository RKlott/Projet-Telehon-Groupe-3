<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href="../../../css/index.css">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <header class="">
        <img id="logo-desktop" src="../../../images/logo.png" class="" alt="logo du site">

        <!--//TODO Importer un logo de la version tablette avec les bonnes dimensions (ce logo là est mal dimensionné)-->
        <img id="logo-tablet" src="../../../images/logo-tablet.png" class="" alt="logo du site en version tablette">
        <nav class="">
            <ul class="">
                <li class="navbar_link"><a href="">Accueil</a></li>
                <li class="navbar_link"><a href="">Blog</a></li>
                <li class="navbar_link"><a href="">Evenements</a></li>
                <li class="navbar_link"><a href="">Partenaires</a></li>
                <li class="navbar_link" id="navbar_don"><a href="">Je fais un don</a></li>
            </ul>
        </nav>
    </header>