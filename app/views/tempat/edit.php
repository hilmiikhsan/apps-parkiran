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
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/add">Edit Data</a></li>
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

                    <form action="<?= BASEURL; ?>/tempat/updateTempat" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="no_urut" value="<?= $data['tempat']['no_urut']; ?>">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="kode_blok">Kode Blok</label>
                                <input type="number" id="kode_blok" name="kode_blok" class="form-control" placeholder="Masukan Kode Blok..." autocomplete="off" value="<?= $data['tempat']['kode_blok']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="jenis_kendaraan">Jenis Kendaraan</label>
                                <input type="text" id="jenis_kendaraan" name="jenis_kendaraan" class="form-control" placeholder="Masukan Jenis Kendaraan..." autocomplete="off" value="<?= $data['tempat']['jenis_kendaraan']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="status_kendaraan">Status Kendaraan</label>
                                <input type="text" id="status_kendaraan" name="status_kendaraan" class="form-control" placeholder="Masukan Status Kendaraan..." autocomplete="off" value="<?= $data['tempat']['status_kendaraan']; ?>">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= BASEURL; ?>/tempat" class="btn btn-secondary">Cancel</a>
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