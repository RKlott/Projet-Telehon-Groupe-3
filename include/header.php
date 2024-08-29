<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    <link rel="stylesheet" href=<?= $css_path ?>>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<header class="">
        <img id="logo-desktop" src=<?= $desktop_logo_path?> class="" alt="logo du site">
        
<!--//TODO Importer un logo de la version tablette avec les bonnes dimensions (ce logo là est mal dimensionné)-->
        <img id="logo-tablet" src=<?= $tablet_logo_path?> class="" alt="logo du site en version tablette">
        <nav class="">
            <ul class="">
                <li class="frontoffice_navbar_link"><a href=<?= $accueil_page_path?>>Accueil</a></li>
                <li class="frontoffice_navbar_link"><a href=<?= $blog_page_path?>>Blog</a></li>
                <li class="frontoffice_navbar_link"><a href=<?= $evenements_page_path?>>Evenements</a></li>
                <li class="frontoffice_navbar_link"><a href=<?= $partenaires_page_path?>>Partenaires</a></li>
                <li class="frontoffice_navbar_link" id="navbar_last_element"><a href="#">Je fais un don</a></li>
            </ul>
        </nav>
    </header>