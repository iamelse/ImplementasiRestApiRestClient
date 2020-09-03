<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
    </div>

    <!-- Page Heading 
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"></h1>
    </div> -->

    <?php if ($this->session->flashdata('pesan')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert"> Data Berhasil
            <strong><?= $this->session->flashdata('pesan'); ?></strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"><?= $judul; ?></h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-borderless" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <td></td>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nomor Induk Mahasiswa</th>
                            <th>Nama</th>
                            <th>Telepon</th>
                            <th>Alamat</th>
                            <td></td>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($mahasiswa as $mhs) : ?>
                            <tr>
                                <td><?= $mhs['nim']; ?></td>
                                <td><?= $mhs['nama']; ?></td>
                                <td><?= $mhs['telepon']; ?></td>
                                <td><?= $mhs['alamat']; ?></td>
                                <td>
                                    <a href="<?= base_url(); ?>Daftar_mhs/editData/<?= $mhs['id']; ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i></a> |
                                    <a href="<?= base_url(); ?>Daftar_mhs/hapusData/<?= $mhs['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="col-md-6">
                    <a href="<?= base_url('Daftar_mhs/tambah'); ?>" class="btn btn-sm btn-primary mb-4">Tambah</a>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->