
<div class="container">
    <div class="container">
    <div class="jumbotron">
        <h1 class="display-4">Selamat Datang di Toko Buku Erlangga</h1>
        <p class="lead">Temukan koleksi buku berkualitas kami dan jangan lewatkan penawaran istimewa..</p>
        <hr class="my-4">
    </div>
    </div>      
    
    <div class="container mt-3">
        <div class="row">
        <h3>Daftar Buku</h3>
            <?php foreach($data['bk'] as $bk ) : ?>
                <div class="col-6" style="margin-bottom: 10px;">
                    <div class="card" style="width: 39rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $bk['id_buku'];?></h6>
                            <h5 class="card-title"><?= $bk['nama_buku'];?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $bk['kategori'];?></h6>
                            <p class="card-text">Rp. <?= $bk['harga'];?></p>
                            <p class="card-text">Stok : <?= $bk['stok'];?></p>
                            <p class="card-text"><?= $bk['penerbit'];?></p>
                            <a href="<?= BASEURL; ?>/pengadaan" class="card-link" style="text-decoration: none;">Buy</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
