         <section id="welcome" class="text-center py-5" style="background-image: url('<?= base_url('img/elysium-hotel-bg.jpg') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 50px; padding-bottom: 50px;">
  <div class="container">
    <h1 class="display-3 text-white">PILIHAN KAMAR</h1>
    <p class="lead text-white mb-4">Your luxury stay awaits. Enjoy unparalleled comfort and exceptional service in the heart of the city.</p>
  </div>
</section>

          <section id="rooms" class="bg-light py-5">
    <div class="container">
        
        

        <div class="row">
    <?php foreach ($chelsica as $key => $value): ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="<?= base_url('img/' . $value->foto) ?>" class="card-img-top" style="height: 250px;" alt="<?= $value->tipe_kamar ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $value->tipe_kamar ?></h5>
                <p><?= $value->lokasi ?></p>
                <p class="card-text"><?= $value->fasilitas ?></p>
                
                

                <!-- Harga dan Tombol Book Now -->
              <div class="d-flex align-items-center justify-content-between">
                <span class="fw-bold">Rp<?= number_format($value->harga, 0, ',', '.') ?></span>
                <?php if ($value->stok > 0): ?>
                  <a href="<?= base_url('gudang/pesan/' . $value->id_tipe) ?>" class="btn btn-danger" style="width: 45%;">Book Now</a>
                <?php else: ?>
                  <span class="text-muted" style="font-size: 0.9em;">Out of Stock</span>
                <?php endif; ?>
              </div>
              
                <!-- Menampilkan Status dan Stok -->
                <p><strong>Stok:</strong> <?= $value->stok ?> kamar tersedia</p>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
    </div>
</section>