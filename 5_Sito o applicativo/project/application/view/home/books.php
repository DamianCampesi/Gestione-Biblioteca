
<?php for($i=0;$i<count($this->books);$i++){ ?>
    <hr>
    <div class="row">
            <div class="col">
                <h1><?php echo $this->books[$i]["title"]; ?></h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <img width="500px" src="https://i.gadgets360cdn.com/large/rick_astley_youtube_1627540038486.jpg?downsize=950:*" alt="">
            </div>
            <div class="col">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                    molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                    numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                    optio, eaque rerum! Provident similique accusantium nemo autem.</p>
                <p>Autore: <?php echo $this->books[$i]["author"]; ?></a>
                <br>
                <br>
                <div class="primary-button">
                    <form method="POST" action="<?php echo URL; ?>home/viewBook/<?php echo $this->books[$i]["id"]; ?>">
                        <button type="submit" class="btn btn-primary" action="<?php echo URL; ?>home/viewBook/<?php echo $this->books[$i]["id"]; ?>">Noleggiami</button>
                    </form>
                </div>
            </div>
        </div>
<?php } ?>
