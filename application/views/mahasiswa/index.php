<nav class="navbar navbar-light">
    <div class="container mt-3">
        <a class="navbar-brand">
            <H3>Daftar Mahasiswa</H3>
        </a>
        <form class="form-inline d-flex justify-content-between" action="" method="POST">
            <input autocomplete="off" class="form-control mr-sm-2" type="search" name="cari" id="cari" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>


<div class="jumbotron jumbotron-fluid">
    <div class="container mt-2 mb-5">
        <div class="row row-cols-1 row-cols-md-5 g-4">
            <?php foreach ($mahasiswa as $mhs) : ?>
                <div class="col">
                    <div class="card border-dark">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-muted"><?= $mhs['nrp']; ?></h6>
                            <h5 class="card-title"><?= $mhs['nama']; ?></h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            <div class="d-flex justify-content-between">
                                <a href=""><button type="submit" class="btn btn-outline-dark">Detail</button></a>
                                <a href=""><button type="submit" class="btn btn-outline-dark">Hapus</button></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>