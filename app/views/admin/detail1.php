<div class="container mt-5">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h6 class="card-subtitle mb-2 text-body-secondary"> <?= $data['pb']['id_penerbit'];?></h6>
            <h5 class="card-title"><?= $data['pb']['nama'];?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?= $data['pb']['alamat'];?></h6>
            <p class="card-text"><?= $data['pb']['kota'];?></p>
            <p class="card-text"><?= $data['pb']['telepon'];?></p>
            <a href="<?= BASEURL; ?>/admin" class="card-link">Back</a>
        </div>
    </div>
</div>