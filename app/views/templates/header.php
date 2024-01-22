<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>halaman <?= $data['judul'];?></title>
    <link rel="stylesheet" href="<?= BASEURL;?>/css/bootstrap.css">
    <link rel="stylesheet" href="<?= BASEURL;?>/css/style.css">">

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= BASEURL;?>"></a>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>">
                        <div class="nav-item-container">
                            <img src="<?= BASEURL;?>/img/buku.png" width="35">
                            <span class="nav-item-text">Home</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>/admin">
                        <div class="nav-item-container">
                            <img src="<?= BASEURL;?>/img/setting.png" width="35">
                            <span class="nav-item-text">Admin</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= BASEURL;?>/pengadaan">
                        <div class="nav-item-container">
                            <img src="<?= BASEURL;?>/img/checkout.png" width="35">
                            <span class="nav-item-text">Pengadaan</span>
                        </div>
                    </a>
                </li>
            </ul>

            <form action="<?= BASEURL;?>/home/cari" method="post" class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Cari Buku.." aria-label="Search" name="keyword" id="keyword" autocomplete="off">
                <button class="btn btn-outline-secondary" type="submit" id="tombolCari">Search</button>
            </form>
            </div>
        </div>
  </div>
</nav>
</head>
<body>