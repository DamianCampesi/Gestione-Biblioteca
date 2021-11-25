<!doctype HTML>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo URL; ?>application/public/css/home.css">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="navigation">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
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
                    </ul>
                </div>
            </nav>
        </div>
