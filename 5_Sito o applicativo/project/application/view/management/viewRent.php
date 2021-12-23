        <div class="row">
            <h1>Rimozione noleggi</h1>
        </div>
        <?php for($i=0;$i<count($this->rent);$i++){ ?>
            <hr>
            <div class="row align-items-center">
                    <div class="col-lg-3">
                        <h2><?php echo $this->rent[$i]["title"]; ?></h2>
                    </div>
                    <div class="col-lg-3">
                        <p> Fine noleggio: <?php echo $this->rent[$i]["end_date"]; ?></p>
                    </div>
                    <div class="col-lg-3">
                        <p> Utente: <?php echo $this->rent[$i]["email"]; ?></p>
                    </div>
                    <div class="col-md-3">
                        <form action="<?php echo URL; ?>librarianhome/removeRent/<?php echo $this->rent[$i]["user_id"]; ?>/<?php echo $this->rent[$i]["book_id"]; ?>" method="POST">
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
        <?php }?>
        <hr>