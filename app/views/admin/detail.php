<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-body-secondary"> <?= $data['bk']['id_buku'];?></h6>
            <h5 class="card-title"><?= $data['bk']['nama_buku'];?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['bk']['kategori'];?></h6>
            <p class="card-text"><?= $data['bk']['harga'];?></p>
            <p class="card-text"><?= $data['bk']['stok'];?></p>
            <p class="card-text"><?= $data['bk']['penerbit'];?></p>
            <a href="<?= BASEURL; ?>/admin" class="card-link">Back</a>
        </div>
    </div>
</div>
