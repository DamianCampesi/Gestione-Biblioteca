            <div class="row">
                <h1>Aggiungi un libro</h1>
                <hr>
            </div>
            <form action="<?php echo URL; ?>librarianhome/addBook" method="POST" enctype="multipart/form-data">
                <div class="row align-items-end">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="title">Titolo</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="titolo del libro" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <div class="form-group">
                                <label for="author">Autore</label>
                                <input type="text" class="form-control" id="author" name="author" placeholder="autore del libro" required>
                            </div>
                        </div>
                </div>
                <div class="row align-items-end">
                        <div class="col-md-6">
                            <br>
                            <div class="form-group">
                                <label for="summary">Trama</label>
                                <textarea class="form-control" id="summary" name="summary" placeholder="trama del libro" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <br>
                            <div class="form-group">
                                <label for="coverImage">Immagine copertina</label><br>
                                <input type="file" class="form-control-file" id="coverImage" name="coverImage" reqired>
                            </div>
                        </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <br>
                        <button type="submit" class="btn btn-primary" id="formGroupExampleInput2">Conferma</button>
                    </div>
                </div>
            </form>
            <hr>