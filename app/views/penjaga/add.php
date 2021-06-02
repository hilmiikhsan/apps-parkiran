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
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/penjaga/add">Tambah Data</a></li>
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

                        <form action="<?= BASEURL; ?>/penjaga/addData" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="nama">Nama Penjaga</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Penjaga..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat Penjaga</label>
                                <input type="text" id="alamat" name="alamat" class="form-control" placeholder="Masukan Alamat Penjaga..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="telepon">No Telepon</label>
                                <input type="number" id="telepon" name="telepon" class="form-control" placeholder="Masukan No Telepon..." autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= BASEURL; ?>/penjaga" class="btn btn-secondary">Cancel</a>
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