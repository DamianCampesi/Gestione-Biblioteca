<div class="row">
    <h1>Catalogo libri</h1>
</div>
<form action="<?php echo URL; ?>home/viewBooks" method="POST">
    <div class="row align-items-end">
        <div class="col-md-6">
            <label for="filterSelect" class="form-label">Filtra per:</label>
            <select class="form-select" aria-label="Default select example" id="filterSelect" name="filterSelect"> 
                <option value="title" selected>Titolo</option>
                <option value="author">Autore</option>
            </select>
        </div>
        <div class="col-md-6">
            <br>
            <div class="input-group">
                <input type="search" class="form-control rounded" required placeholder="Search" aria-label="Search" aria-describedby="search-addon" id="searchBooks" name="searchBooks"/>
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
    </div>
</form>
<?php for($i=0;$i<count($this->books);$i++){ ?>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <h2><?php echo $this->books[$i]["title"]; ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="col">
        <img width="300px" src="<?php echo URL; ?>images/<?php echo $this->books[$i]['cover_image']; ?>">
        </div>
        <div class="col-lg">
            <p><?php echo count(str_split($this->books[$i]["summary"])) > 700 ? substr($this->books[$i]["summary"],0,700) . "<a href=".URL."home/viewBook/".$this->books[$i]["id"]."> ...continua a leggere</a>" : $this->books[$i]["summary"];?></p>
            <span><strong>Autore: <?php echo $this->books[$i]["author"]; ?></strong></span>
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
<hr>
