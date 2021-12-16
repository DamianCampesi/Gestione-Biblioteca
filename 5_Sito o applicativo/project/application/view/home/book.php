<div class="container">
    <div class="row">
        <div class="col">
            <img width="500px" src="https://i.gadgets360cdn.com/large/rick_astley_youtube_1627540038486.jpg?downsize=950:*" alt="">
        </div>
        <div class="col align-self-center">
            <h1><?php echo $this->book[0]["title"]; ?></h1>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                        molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                        numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                        optio, eaque rerum! Provident similique accusantium nemo autem.</p>
        </div>
    </div>
</div>