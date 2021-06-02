<body class="hold-transition sidebar-mini">

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
        <h1>My Profile</h1>
        </div>
        <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= BASEURL; ?>/about">About</a></li>
            <li class="breadcrumb-item active">User Profile</li>
        </ol>
        </div>
    </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
    <div class="row">
        <div class="col-md-3">

        <!-- Profile Image -->
        <div class="card card-primary card-outline">
            <div class="card-body box-profile">
            <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                    src="<?= BASEURL; ?>/img/myprofile.jpg"
                    alt="User profile picture">
            </div>

            <h3 class="profile-username text-center"><?= $data['nama']; ?></h3>

            <p class="text-muted text-center"><?= $data['pekerjaan']; ?></p>

            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                <b>Followers</b> <a class="float-right"><?= $data['followers']; ?></a>
                </li>
                <li class="list-group-item">
                <b>Following</b> <a class="float-right"><?= $data['following']; ?></a>
                </li>

            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

        <!-- About Me Box -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">About Me</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <strong><i class="fas fa-book mr-1"></i> Education</strong>

            <p class="text-muted">
                Jurusan Teknik Informatika dari Sekolah Tinggi Teknologi Garut
            </p>

            <hr>

            <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

            <p class="text-muted">Garut, Jalan Proklamasi</p>

            <hr>

            <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

            <p class="text-muted">
                <span class="tag tag-danger">UI Design</span>
                <span class="tag tag-success">Coding</span>
                <span class="tag tag-info">PHP</span>
                <span class="tag tag-warning">Javascript</span>
                <span class="tag tag-primary">Laravel</span>
            </p>

            <hr>

            <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

            <p class="text-muted">Nama : Muhammad Ikhsan Hilmi <br> NPM : 1906094 <br> Kelas : Teknik INformatika C</p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
        <div class="card">
            <div class="card-header p-2">
            <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
            </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                <!-- Post -->
                <div class="post">
                    <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= BASEURL; ?>/img/myprofile.jpg" alt="user image">
                    <span class="username">
                        <a href="#"><?= $data['nama']; ?></a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Shared publicly - 14:02 PM today</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                        Halo, perkenalkan nama saya adalah Muhammad Ikhsan Hilmi. Saya adalah seorang mahasiswa dari Sekolah Tinggi Teknologi Garut. Dan hobi saya adalah bermain futsal, ngoding, dan bermain game. Saya tinggal di cimahi, cuman sekarang saya sedang ngekost di salah satu kosan yang bernama ORION yang ada di daerah Garut.
                    </p>

                    <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                        <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (5)
                        </a>
                    </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                    <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?= BASEURL; ?>/img/myprofile.jpg" alt="User Image">
                    <span class="username">
                        <a href="#">Adam Jones</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                    </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="row mb-3">
                    <div class="col-sm-6">
                        <img class="img-fluid" src="<?= BASEURL; ?>/img/photo1.jpg" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                        <div class="row">
                        <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="<?= BASEURL; ?>/img/photo2.jpg" alt="Photo">
                            <img class="img-fluid" src="<?= BASEURL; ?>/img/photo6.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="<?= BASEURL; ?>/img/photo4.jpg" alt="Photo">
                            <img class="img-fluid" src="<?= BASEURL; ?>/img/photo5.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <p>
                    <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                    <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                    <span class="float-right">
                        <a href="#" class="link-black text-sm">
                        <i class="far fa-comments mr-1"></i> Comments (5)
                        </a>
                    </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
                </div>
            </div>
            <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>