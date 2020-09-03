<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Tambah Data Obat
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Nomor Induk Mahasiswa</label>
                            <input type="text" class="form-control" id="nim" name="nim" placeholder="Kode Obat">
                            <div class="small text-danger mt-2"><?= form_error('nim'); ?></div>
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Obat">
                            <div class="small text-danger mt-2"><?= form_error('nama'); ?></div>
                        </div>
                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Kapsul, Tablet, dll">
                            <div class="small text-danger mt-2"><?= form_error('telepon'); ?></div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Khasiat Obat">
                            <div class="small text-danger mt-2"><?= form_error('alamat'); ?></div>
                        </div>
                        <button type="submit" class="mb-2 btn btn-primary" name="tambah">Tambah Data</button>
                    </form>
                </div>
            </div>

            <div class="mt-4"></div>

        </div>
    </div>
</div>