<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="description" content="Fill Me In">
<meta name="author" content="John Doe">

<!-- This start file was build by Paul Cheney  -->
<title>Cabot Cruises</title>

<!-- TELLS PHONES NOT TO LIE ABOUT THEIR WIDTH & stops the font from enlarging when a phone is turned sideways-->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<link href="https://fonts.googleapis.com/css2?family=Open+Sans+Condensed:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">

<!-- STYLE SHEETS -->
<link href="css/styles.css" rel="stylesheet">

<!-- JS -->
<script src="script/scripts.js"></script>

     
</head>
<body>
<!-- HEADER HERE -->
<header class="clearfix column header">
    <figure class="logo">
        <img src="images/logo-0.png" alt="logo"
            srcset="images/logo-1.png 1x, images/logo-2.png 2x, images/logo-3.png 3x"
        >
    </figure>
    <h1><i><a style='text-decoration: none; color: #000;' href='tel:18005551234'>1-800-555-1234</a></i>&nbsp;&nbsp;</h1>
</header>
    
    
<!-- NAVIGATION HERE -->
<div class="wrapper" id="nav-wrapper">
    <nav class="clearfix">
        <button onclick="toggleMenu()">&Congruent;</button>
        <div class='search-wrap'><input class="search" type="text" placeholder="search..">
            <div class='search-button'><i class="fas fa-search"></i></div>
        </div>
        <ul id="nav-menu" class="column hide" >
            <li class="active"><a href="/index.html">Home</a></li>
            <li><a href="#">Cruises</a></li>
            <li class="parent"><a href="#">Agents</a>
                <ul>
                    <li><a href="#">Tropical Cruises</a></li>
                    <li><a href="#">Arctic Cruises</a></li>
                </ul>
            </li>
            <li><a href="#">Book</a></li>
        </ul>
    </nav>
</div>