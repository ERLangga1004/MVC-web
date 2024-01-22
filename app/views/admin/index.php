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


<div class="container mt-3">
    <div class="row">
        <div class="col-18">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-6">
                    <?php Flasher::flash();?> 
                    </div>
                </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-outline-secondary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                        Add
                    </button>
                </div>
            </div>
            <h3>Daftar Buku</h3>
            <ul class="list-group list-group-flush">
                <?php foreach($data['bk'] as $bk ) : ?>
                <li class="list-group-item"><?= $bk['nama_buku'];?>

                <a href="<?= BASEURL; ?>/admin/hapus/<?= $bk['id_buku'];?>" class="badge text-bg-warning float-end me-2" style="text-decoration: none;" onclick="return confirm('yakin hapus?');">delete</a>

                <a href="<?= BASEURL; ?>/admin/detail/<?= $bk['id_buku'];?>" class="badge text-bg-success float-end me-2 tampilModalEdit" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal" data-id_buku="<?= $bk['id_buku'];?>">edit</a>

                <a href="<?= BASEURL; ?>/admin/detail/<?= $bk['id_buku'];?>" class="badge text-bg-secondary float-end me-2" style="text-decoration: none;">detail</a>

                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>


<div class="container mt-3">
    <div class="row">
        <div class="col-18">
            <div class="container mt-3">
                <div class="row">
                    <div class="col-lg-6">
                    <?php Flasher::flash();?> 
                    </div>
                </div>
            <div class="row mb-3">
                <div class="col-lg-6">
                    <button type="button" class="btn btn-outline-secondary tombolTambahData1" data-bs-toggle="modal" data-bs-target="#formModal1">
                        Add
                    </button>
                </div>
            </div>
            <h3>Daftar Penerbit</h3>
            <ul class="list-group list-group-flush">
                <?php foreach($data['pb'] as $pb ) : ?>
                <li class="list-group-item"><?= $pb['nama'];?>

                <a href="<?= BASEURL; ?>/admin/hapus1/<?= $pb['id_penerbit'];?>" class="badge text-bg-warning float-end me-2" style="text-decoration: none;" onclick="return confirm('yakin hapus?');">delete</a>

                <a href="<?= BASEURL; ?>/admin/ubah1/<?= $pb['id_penerbit'];?>" class="badge text-bg-success float-end me-2 tampilModalEdit1" style="text-decoration: none;" data-bs-toggle="modal" data-bs-target="#formModal1" data-id_penerbit="<?= $pb['id_penerbit'];?>">edit</a>

                <a href="<?= BASEURL; ?>/admin/detail1/<?= $pb['id_penerbit'];?>" class="badge text-bg-secondary float-end me-2" style="text-decoration: none;">detail</a>

                </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body">
            <form action="<?= BASEURL ?>/admin/tambah" method="post" autocomplete="off">
                <input type="hidden" name="id" id="id">
                <div class="mb-2">
                    <label for="id_buku" class="form-label">ID Buku</label>
                    <input type="text" class="form-control" id="id_buku" name="id_buku">  
                </div>

                <div class="form-group mb-3">
                    <label for="kategori" class="mb-2">Kategori</label>
                    <select class="form-select" aria-label="Default select example" id="kategori" name="kategori">
                        <option selected>Pilih Kategori!</option>
                        <option value="Keilmuan">Keilmuan</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="Novel">Novel
                        </option>
                    </select>
                </div>

                <div class="mb-2">
                    <label for="nama_buku" class="form-label">Nama Buku</label>
                    <input type="text" class="form-control" id="nama_buku" name="nama_buku" >  
                </div>

                <div class="mb-2">
                    <label for="harga" class="form-label">Harga</label>
                    <input type="text" class="form-control" id="harga" name="harga" >  
                </div>

                <div class="mb-2">
                    <label for="stok" class="form-label">Stok</label>
                    <input type="number" class="form-control" id="stok" name="stok" >  
                </div>

                <div class="mb-2">
                    <label for="penerbit" class="form-label">Penerbit</label>
                    <input type="text" class="form-control" id="penerbit" name="penerbit" >  
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="formModal1" tabindex="-1" aria-labelledby="formModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="formModalLabel1">Edit Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
        <div class="modal-body modalPenerbit">
            <form action="<?= BASEURL ?>/admin/ubah1" method="post" autocomplete="off">
                <input type="hidden" name="id" id="id">
                <div class="mb-2">
                    <label for="id_penerbit" class="form-label">ID Penerbit</label>
                    <input type="text" class="form-control" id="if_penerbit" name="id_penerbit">  
                </div>
                <div class="mb-2">
                    <label for="nama" class="form-label">Nama Penerbit</label>
                    <input type="text" class="form-control" id="nama" name="nama" >  
                </div>

                <div class="mb-2">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" >  
                </div>

                <div class="mb-2">
                    <label for="kota" class="form-label">Kota</label>
                    <input type="text" class="form-control" id="kota" name="kota" >  
                </div>

                <div class="mb-2">
                    <label for="telepon" class="form-label">Telepon</label>
                    <input type="text" class="form-control" id="telepon" name="telepon" >  
                </div>
                <div class="modal-footer modalFooterPenerbit">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>

