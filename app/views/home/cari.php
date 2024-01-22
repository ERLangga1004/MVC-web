<div class="container mt-3">
        <div class="row">
            <?php foreach($data['bk'] as $bk ) : ?>
                <div class="col-6" style="margin-bottom: 10px;">
                    <div class="card" style="width: 39rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $bk['id_buku'];?></h6>
                            <h5 class="card-title"><?= $bk['nama_buku'];?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $bk['kategori'];?></h6>
                            <p class="card-text"><?= $bk['harga'];?></p>
                            <p class="card-text"><?= $bk['stok'];?></p>
                            <p class="card-text"><?= $bk['penerbit'];?></p>
                            <a href="<?= BASEURL; ?>/pengadaan" class="card-link" style="text-decoration: none;">Buy</a>
                            <a href="<?= BASEURL; ?>/home/index" class="card-link" style="text-decoration: none;">back</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
