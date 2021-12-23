            <div class="row">
                <h1>Noleggia un libro</h1>
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <img class="center-block" width="300px" src="<?php echo URL; ?>images/<?php echo $this->book[0]['cover_image']; ?>" alt="img">
                </div>
                <div class="col-lg align-self-center">
                    <h2><?php echo $this->book[0]["title"]; ?></h2>
                    <h5>Di: <?php echo $this->book[0]["author"] ?></h5>
                    <br>
                    <form action="<?php echo URL; ?>home/doRent/<?php echo $this->book[0]["id"]; ?>" method="POST">
                        <div class="input-group mb-3">
                            <span class="input-group-text" id="basic-addon1">Giorni di noleggio</span>
                            <input type="number" class="form-control" placeholder="giorni" aria-label="giorni" aria-describedby="basic-addon1" name="rentTime">
                            <button type="submit" class="btn btn-primary">Conferma</button>
                        </div>
                    </form>
                </div>
            </div> 
            <hr>
            <div class="row">
                <div class="col">
                    <p><?php echo $this->book[0]["summary"]; ?></p>
                </div>
            </div>
