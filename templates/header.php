<html lang="en">
<body>
<nav>
    <div class="container-fluid">
        <div class="row">
            <div class="col-4">
                <div class="row">
                    <h1>IMDB</h1>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Categorieën
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">Gezien</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="row align-middle">
                    <form action="../php/getMovie.php" method="post">
                        <input class="form-control" type="text" placeholder="Zoeken..." name="title"
                               aria-label="Search">
                        <button type="submit" class="btn btn-warning">Zoek</button>
                    </form>
                </div>
            </div>
            <div class="col-2">
                <div class="row">
                    <a>Unlock pro</a>
                    <a>Sign in</a>
                </div>
            </div>
        </div>
    </div>
</nav>
</body>
</html>