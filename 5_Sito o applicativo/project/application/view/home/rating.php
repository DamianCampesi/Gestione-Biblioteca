<?php for($i=0;$i<count($this->rating);$i++){ ?>
    <hr>
    <div class="row">
            <div class="col">
                <h1><?php echo ($i+1).'. '; echo $this->rating[$i]["title"]; ?></h1>
            </div>
        </div>
    <div class="row">
            <div class="col">
                <img width="500px" src="https://i.gadgets360cdn.com/large/rick_astley_youtube_1627540038486.jpg?downsize=950:*" alt="">
            </div>
            <div class="col align-self-center">
                <h1> Valutazione: <?php echo $this->rating[$i]["valutazione"]; ?> stelle</h1>
            </div>
        </div>
<?php } ?>