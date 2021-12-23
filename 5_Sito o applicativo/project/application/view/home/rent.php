            <div class="row">
                <h1>I miei noleggi</h1>
            </div>
            <hr>
            <?php for($i=0;$i<count($this->rent);$i++){ ?>
                <div class="row">
                        <div class="col">
                            <h2><?php echo $this->rent[$i]["title"]; ?></h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                        <p>Data di inizio noleggio: <?php echo $this->rent[$i]["start_date"]; ?></p>
                        <p>Data di fine noleggio: <?php echo $this->rent[$i]["end_date"]; ?></p>
                        </div>
                    </div>
                <hr>
            <?php } ?>