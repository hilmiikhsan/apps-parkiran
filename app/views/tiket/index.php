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
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/tiket">Tiket Parkiran</a></li>
            <li class="breadcrumb-item active"><?= $data['judul']; ?></li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash(); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <a class="btn btn-primary btn-sm" href="<?= BASEURL; ?>/tiket/add">
                <i class="fas fa-folder">
                </i>
                Tambah Data
            </a>
        </div>
    </div>

    <br>

    <!-- Default box -->
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Tiket Parkiran</h3>

            <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                <i class="fas fa-times"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        <table class="table table-striped projects">
            <thead>
                <tr>
                    <th style="width: 1%">
                        No
                    </th>
                    <th style="width: 20%">
                        Kode Tiket
                    </th>
                    <th style="width: 30%">
                        Nama Penjaga
                    </th>
                    <th>
                        Tempat Parkiran
                    </th>
                    <th>
                        Waktu Masuk
                    </th>
                    <th>
                        Jenis Kendaraan
                    </th>
                    <th>
                        Waktu Keluar
                    </th>
                    <th>
                        Tarif Parkiran
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1; ?>
                <?php foreach( $data['tiket'] as $tkt ) : ?>
                <tr>
                    <td>
                        <?= $no; ?>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['kd_tiket']; ?>
                        </a>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['nama_penjaga']; ?>
                        </a>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['tempat_parkiran']; ?>
                        </a>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['waktu_masuk']; ?>
                        </a>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['jenis_kendaraan']; ?>
                        </a>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['waktu_keluar']; ?>
                        </a>
                    </td>
                    <td>
                        <a>
                            <?= $tkt['tarif_parkiran']; ?>
                        </a>
                    </td>
                    <td class="project-actions text-right">
                        <a class="btn btn-info btn-sm" href="<?= BASEURL; ?>/tiket/edit/<?= $tkt['id_penjaga']; ?>">
                            <i class="fas fa-pencil-alt">
                            </i>
                            Edit Data
                        </a>
                        <a class="btn btn-danger btn-sm" href="<?= BASEURL; ?>/tiket/delete/<?= $tkt['id_penjaga']; ?>" onclick="return confirm('Apakah anda yakin ?')">
                            <i class="fas fa-trash">
                            </i>
                            Delete Data
                        </a>
                    </td>
                </tr>
                <?php $no++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
    </div>
    <!-- /.card -->

</section>
<!-- /.content -->
</div>