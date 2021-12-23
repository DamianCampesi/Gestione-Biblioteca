        <div class="row">
            <h1>Inserimento valutazioni</h1>
        </div>
        <form action="<?php echo URL; ?>librarianhome/insertRating" method="POST">
            <div class="row align-items-end">
            <div class="col-lg-3">
                <label for="book" class="form-label">Scegli il libro:</label>
                <select class="form-select" aria-label="Default select example" id="book" name ="book">
                <?php for($i=0;$i<count($this->books);$i++){ ?>
                    <option value="<?php echo $this->books[$i]["id"]; ?>" selected><?php echo $this->books[$i]["title"]; ?></option>
                <?php } var_dump($this->books)?>
                </select>
            </div>
            <div class="col-lg-3">
                <br>
                <label for="user" class="form-label">Scegli l'utente:</label>
                <select class="form-select" aria-label="Default select example" id="user" name="user">
                <?php for($i=0;$i<count($this->users);$i++){ ?>
                    <option value="<?php echo $this->users[$i]["id"]; ?>" selected><?php echo $this->users[$i]["email"]; ?></option>
                <?php } var_dump($this->users)?>
                </select>
            </div>
                <div class="col-lg-3">
                    <br>
                    <label for="rating" class="form-label">Valutazione: <span id="nota"></span></label>
                    <input type="range" class="form-range" min="1" max="6" step="0.1" id="rating" name="rating">
                </div>
                <div class="col-lg-3">
                    <br>
                    <button type="submit" class="btn btn-primary">Invia</button>
                </div>
            </div>
        </form>
        <hr>
        <h1>Tutte le valutazioni:</h1>
        <?php for($i=0;$i<count($this->rating);$i++){ ?>
            <hr>
            <div class="row align-items-center">
                    <div class="col-lg-4">
                        <h2><?php echo $this->rating[$i]["title"]; ?></h2>
                    </div>
                    <div class="col-md-2">
                        <p> V.: <?php echo $this->rating[$i]["valutazione"]; ?></p>
                    </div>
                    <div class="col-lg-4">
                        <p><?php echo $this->rating[$i]["email"]; ?></p>
                    </div>
                    <div class="col-md-2">
                        <form action="<?php echo URL; ?>librarianhome/removeRating/<?php echo $this->rating[$i]["id"]; ?>" method="POST">
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
        <?php }?>
        <hr>
        <script>                
            var range = document.getElementById("rating");
            var out = document.getElementById("nota");
            out.innerHTML = range.value;
            range.oninput = function(){
                out.innerHTML = this.value;
            }
        </script>