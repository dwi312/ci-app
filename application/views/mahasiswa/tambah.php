<div class="container">
    <div class="row mt-2">
        <div class="col">
            <small class="text-danger" role="alert">
                <?= validation_errors(); ?>
            </small>

        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-6">

            <div class="card ">
                <div class="card-header">
                    Form Data Tambah Mahasiswa
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="mb-2">
                            <label for="nama" class="form-label">Nama</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="mb-2">
                            <label for="nrp" class="form-label">NRP</label>
                            <input type="text" class="form-control" name="nrp" id="nrp">
                        </div>
                        <div class="mb-2">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>

                        <div class="mb-2 form-group">
                            <label for="jurusan" class="form-label">Jurusan</label>
                            <select class="form-control" name="jurusan" id="jurusan">
                                <option selected>Pilih Jurusan</option>
                                <option value="Teknik Mesin">Teknik Mesin</option>
                                <option value="Teknik Industri">Teknik Industri</option>
                                <option value="Teknik Informatika">Teknik Informatika</option>
                                <option value="Teknik Elektro">Teknik Elektro</option>
                                <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                                <option value="Teknik Pangan">Teknik Pangan</option>
                                <option value="Teknik Planologi">Teknik Planologi</option>
                                <option value="Bisnis">Bisnis</option>
                            </select>
                        </div>

                </div>
                <div class="card-footer">
                    <button class="btn btn-success float-end" type="submit" name="tambah">Tambah</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>