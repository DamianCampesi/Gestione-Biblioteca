<div class="row">
    <h1>Catalogo libri</h1>
</div>
<div class="row">
<div class="col-md-3">
    <br>
    <form method="POST" action="<?php echo URL; ?>librarianhome/viewForm">
        <button type="submit" class="btn btn-success">Aggiungi un libro</button>
    </form>
    <br>
</div>
</div>
<form action="<?php echo URL; ?>librarianhome/viewBooks" method="POST">
    <div class="row align-items-end">
        <div class="col-md-4">
            <label for="filterSelect" class="form-label">Filtra per:</label>
            <select class="form-select" aria-label="Default select example" id="filterSelect" name="filterSelect">
                <option value="title" selected>Titolo</option>
                <option value="author">Autore</option>
            </select>
        </div>
        <div class="col-md-4">
            <br>
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="searchBooks" name="searchBooks" style="min-width: 4rem;"/>
        </div>
        <div class="col-md-4">
            <br>
            <button type="submit" class="btn btn-primary">Cerca</button>
            <br>
        </div>
    </form>
</div>

<?php for($i=0;$i<count($this->books);$i++){ ?>
    <hr>
    <div class="row">
            <div class="col-md-8 align-self-center">
                <h1><?php echo $this->books[$i]["title"]; ?></h1>
                <p>Autore: <?php echo $this->books[$i]["author"]; ?></a>
            </div>
            <div class="col-md-4">
                <div class="card bg-light mb-3" style="max-width: 8rem;">
                    <div class="card-body align-self-center">
                        <form action="<?php echo URL; ?>librarianhome/viewBook/<?php echo $this->books[$i]["id"]; ?>"  method="POST">
                            <button type="submit" class="btn btn-primary">Modifica</button><br>
                        </form>
                        <br>
                        <form action="<?php echo URL; ?>librarianhome/removeBook/<?php echo $this->books[$i]["id"]; ?>" method="POST">
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
