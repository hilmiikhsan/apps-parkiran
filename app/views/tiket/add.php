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
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tiket/add">Tambah Data</a></li>
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

                        <form action="<?= BASEURL; ?>/tiket/addData" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="kode">Kode Tiket</label>
                                <input type="number" id="kode" name="kode" class="form-control" placeholder="Masukan Kode Tiket..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Penjaga</label>
                                <input type="text" id="nama" name="nama" class="form-control" placeholder="Masukan Nama Penjaga..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="tempat">Tempat Parkiran</label>
                                <input type="text" id="tempat" name="tempat" class="form-control" placeholder="Masukan Tempat Parkiran..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="masuk">Waktu Masuk</label>
                                <input type="text" id="masuk" name="masuk" class="form-control" placeholder="Masukan Waktu Masuk..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="jenis">Jenis Kendaraan</label>
                                <input type="text" id="jenis" name="jenis" class="form-control" placeholder="Masukan Jenis Kendaraan..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="keluar">Waktu Keluar</label>
                                <input type="text" id="keluar" name="keluar" class="form-control" placeholder="Masukan Waktu Keluar..." autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label for="tarif">Tarif Parkiran</label>
                                <input type="number" id="tarif" name="tarif" class="form-control" placeholder="Masukan Tarif Parkiran..." autocomplete="off">
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <a href="<?= BASEURL; ?>/tiket" class="btn btn-secondary">Cancel</a>
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