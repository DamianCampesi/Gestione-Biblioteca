<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo URL; ?>application/public/css/home.css">
        <!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            font-family: sans-serif;
        }
    </style>    
    
    </head>
    <body>
        <div class="container">
            <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Gestione biblioteca</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>home/viewBooks">Catalogo Libri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>home/viewRent">Noleggi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>home/viewRating">Top 10 libri</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>librarianhome/viewBooks"><strong>!gestione libri</strong></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo URL ?>home/viewRating"><strong>!inserimento valutazioni</strong></a>
                        </li>
                    </ul>
                </div>
            </nav>
        
