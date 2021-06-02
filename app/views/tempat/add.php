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
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tempat/add">Tambah Data</a></li>
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
                        <h3 class="card-title">Tambah Data</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>

                    <div class="card-body">

                        <form action="<?= BASEURL; ?>/tempat/addData" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="kode">Kode Blok</label>
                                <input type="number" id="kode" name="kode" class="form-control" placeholder="Masukan Kode Blok..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis Kendaraan</label>
                                <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Masukan Jenis Kendaraan..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="status">Status Kendaraan</label>
                                <input type="text" id="status" name="status" class="form-control" placeholder="Masukan Status Kendaraan..." autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= BASEURL; ?>/tempat" class="btn btn-secondary">Cancel</a>
                                    <button type="submit" class="btn btn-success float-right">Tambah Data</button>
                                </div>
                            </div>
                        </form>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
</section>
<!-- /.content -->
</div>