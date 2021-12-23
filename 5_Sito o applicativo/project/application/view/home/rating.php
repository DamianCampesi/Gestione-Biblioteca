            <div class="row">
                <h1>Top 10 libri</h1>
            </div>
            <?php for($i=0;$i<count($this->rating);$i++){ ?>
                <hr>
                <div class="row">
                        <div class="col">
                            <h2><?php echo ($i+1).'. '; echo $this->rating[$i]["title"]; ?></h2>
                        </div>
                    </div>
                <div class="row">
                        <div class="col">
                        <img width="300px" src="<?php echo URL; ?>images/<?php echo $this->rating[$i]['cover_image']; ?>">
                        </div>
                        <div class="col align-self-center">
                            <h1> Valutazione: <?php echo $this->rating[$i]["media"]; ?> stelle</h1>
                        </div>
                    </div>
            <?php } ?>
            <hr>