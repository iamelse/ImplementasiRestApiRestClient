<!-- Begin Page Content -->
<div class="container-fluid">

    <h1 class="h3 mb-4 text-center text-gray-800">Kasus Corona Virus Indonesia</h1>

    <div class="row">
        <!-- Pending Requests Card Example -->
        <?php foreach ($indonesia as $value) : ?>
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Positif</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $value['positif']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-disease fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Sembuh</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $value['sembuh']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-first-aid fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Meninggal</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $value['meninggal']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-skull-crossbones fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card bg-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Dirawat</div>
                                <div class="h5 mb-0 font-weight-bold text-white"><?= $value['dirawat']; ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-plus-square fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>

        <!-- Page Heading 
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"></h1>
        </div> -->

    </div>
    <!-- /.container-fluid -->

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
                            <th>Nama Provinsi</th>
                            <th>Positif</th>
                            <th>Meninggal</th>
                            <th>Sembuh</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Provinsi</th>
                            <th>Positif</th>
                            <th>Meninggal</th>
                            <th>Sembuh</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        <?php foreach ($provinsi as $value) : ?>
                            <tr>
                                <td><?= $value['attributes']['Provinsi']; ?></td>
                                <td><?= $value['attributes']['Kasus_Posi']; ?></td>
                                <td><?= $value['attributes']['Kasus_Meni']; ?></td>
                                <td><?= $value['attributes']['Kasus_Semb']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>
<!-- End of Main Content -->