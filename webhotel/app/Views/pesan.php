<div class="pagetitle">
    <h1>PESAN</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?= base_url('home/halamanutama') ?>">Home</a></li>
            <li class="breadcrumb-item">Pesan</li>
            <li class="breadcrumb-item active">Pesan</li>
        </ol>
    </nav>
</div>
<!-- End Page Title -->

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <!-- Left Column for Room Details -->
                        <div class="col-md-6">
                            <div class="card">
                                <img src="<?= base_url('img/' . $chelsica->foto) ?>" 
                                class="card-img-top img-fluid" 
                                alt="<?= $chelsica->tipe_kamar ?>" 
                                style="max-height: 250px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title"><?= $chelsica->tipe_kamar ?></h5>
                                    <p><strong>Location:</strong> <?= $chelsica->lokasi ?></p>
                                    <p><strong>Facilities:</strong> <?= $chelsica->fasilitas ?></p>
                                </div>
                            </div>
                        </div>

                        <!-- Right Column for Booking Form -->
                        <div class="col-md-6">
                            <form action="<?= base_url('gudang/inputpemesanan') ?>" method="POST">
                                <div class="mb-3">
                                    <input type="hidden" class="form-control" name="id_kamar" value="<?= $chelsica->id_kamar ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="nama_tamu" class="form-label">Nama Tamu</label>
                                    <input type="text" class="form-control" id="nama_tamu" name="nama_tamu">
                                </div>
                                <div class="mb-3">
                                    <label for="checkin" class="form-label">Check In</label>
                                    <input type="datetime-local" class="form-control" id="checkin" name="checkin">
                                </div>
                                <div class="mb-3">
                                    <label for="checkout" class="form-label">Check Out</label>
                                    <input type="datetime-local" class="form-control" id="checkout" name="checkout">
                                </div>
                                <div class="mb-3">
                                    <label for="kuantitas" class="form-label">Kuantitas</label>
                                    <input type="text" class="form-control" id="kuantitas" name="kuantitas">
                                </div>
                                <input type="hidden" class="form-control" name="status" value="1">
                                <input type="hidden" class="form-control" name="id_tipe" value="<?= $chelsica->id_tipe ?>">
                                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <button type="reset" class="btn btn-secondary">Reset</button>
                                    <button type="button" class="btn btn-secondary" onclick="window.history.back();">Kembali</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
