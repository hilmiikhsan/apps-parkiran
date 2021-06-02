<body class="hold-transition sidebar-mini">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1><?= $data['judul']; ?></h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tiket/edit">Edit Data</a></li>
            <li class="breadcrumb-item active"><?= $data['judul']; ?></li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <form action="<?= BASEURL; ?>/tiket/updateTiket" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id_penjaga" value="<?= $data['tiket']['id_penjaga']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kd_tiket">Kode Tiket</label>
                                <input type="number" id="kd_tiket" name="kd_tiket" class="form-control" placeholder="Masukan Nama Penjaga..." autocomplete="off" value="<?= $data['tiket']['kd_tiket']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="nama_penjaga">Nama Penjaga</label>
                                <input type="text" id="nama_penjaga" name="nama_penjaga" class="form-control" placeholder="Masukan Alamat Penjaga..." autocomplete="off" value="<?= $data['tiket']['nama_penjaga']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tempat_parkiran">Tempat Parkiran</label>
                                <input type="text" id="tempat_parkiran" name="tempat_parkiran" class="form-control" placeholder="Masukan No Telepon..." autocomplete="off" value="<?= $data['tiket']['tempat_parkiran']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="waktu_masuk">Waktu Masuk</label>
                                <input type="text" id="waktu_masuk" name="waktu_masuk" class="form-control" placeholder="Masukan No Telepon..." autocomplete="off" value="<?= $data['tiket']['waktu_masuk']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" class="form-control" placeholder="Masukan No Telepon..." autocomplete="off" value="<?= $data['tiket']['jenis_kendaraan']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="waktu_keluar">Waktu Keluar</label>
                                <input type="text" id="waktu_keluar" name="waktu_keluar" class="form-control" placeholder="Masukan No Telepon..." autocomplete="off" value="<?= $data['tiket']['waktu_keluar']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tarif_parkiran">Tarif Parkiran</label>
                                <input type="number" id="tarif_parkiran" name="tarif_parkiran" class="form-control" placeholder="Masukan No Telepon..." autocomplete="off" value="<?= $data['tiket']['tarif_parkiran']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= BASEURL; ?>/tiket" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-success float-right">Simpan Data</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
</section>
<!-- /.content -->
</div>