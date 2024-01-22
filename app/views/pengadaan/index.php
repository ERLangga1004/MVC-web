<div class="container mt-3">
        <div class="row">
            <?php foreach($data['pb'] as $pb ) : ?>
                <div class="col-6" style="margin-bottom: 10px;">
                    <div class="card" style="width: 39rem;">
                        <div class="card-body">
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $pb['id_penerbit'];?></h6>
                            <h5 class="card-title"><?= $pb['nama'];?></h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $pb['alamat'];?></h6>
                            <p class="card-text"><?= $pb['kota'];?></p>
                            <p class="card-text"><?= $pb['telepon'];?></p>
                            <a href="<?= BASEURL; ?>/pengadaan/beli" class="card-link" style="text-decoration: none;">Buy</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</div>
