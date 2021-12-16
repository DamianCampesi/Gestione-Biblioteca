<div class="container">
    <div class="row">
        <div class="col">
            <br>
            <button type="button" class="btn btn-success">Aggiungi un libro</button>
            <br>
        </div>
    </div>

</div>

<?php for($i=0;$i<count($this->books);$i++){ ?>
    <hr>
    <div class="row">
            <div class="col align-self-center">
                <h1><?php echo $this->books[$i]["title"]; ?></h1>
                <p>Autore: <?php echo $this->books[$i]["author"]; ?></a>

            </div>
            <div class="col">
                <div class="card bg-light mb-3" style="max-width: 8rem;">
                    <div class="card-body align-self-center">
                        <button type="button" class="btn btn-primary">Modifica</button><br>
                        <br>
                        <button type="button" class="btn btn-danger">Elimina</button>
                    </div>
                </div>
            </div>
        </div>
<?php } ?>
