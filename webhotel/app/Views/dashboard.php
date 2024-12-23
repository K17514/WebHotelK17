<!-- Welcome Section -->
<section id="welcome" class="text-center py-5" style="background-image: url('<?= base_url('img/elysium-hotel-bg.jpg') ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; padding-top: 50px; padding-bottom: 50px;">
  <div class="container">
    <h1 class="display-3 text-white">Welcome to Elysium Hotel</h1>
    <p class="lead text-white mb-4">Your luxury stay awaits. Enjoy unparalleled comfort and exceptional service in the heart of the city.</p>
    <a href="#facilities" class="btn btn-outline-light btn-lg">Explore Our Facilities</a>
  </div>
</section>

    <!-- Rooms Section -->
    <section id="rooms" class="bg-light py-5">
      <div class="container">
        <h2 class="text-center mb-4">Our Rooms</h2>
        <div class="row">
          <!-- Room 1 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="<?= base_url('img/1730902854_largeroom.jpg') ?>" class="card-img-top" style="height: 250px;" alt="Room 1">
              <div class="card-body">
                <h5 class="card-title">Large Room</h5>
                <p class="card-text">A luxurious suite with stunning views and world-class amenities.</p>
                <a href="<?= base_url('gudang/fancytipekamar')?>" class="btn btn-danger">Book Now</a>
              </div>
            </div>
          </div>

          <!-- Room 2 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="<?= base_url('img/1730996271_single.jpg') ?>" class="card-img-top" style="height: 250px;" alt="Room 2">
              <div class="card-body">
                <h5 class="card-title">Single Room</h5>
                <p class="card-text">Comfortable and elegant rooms designed for relaxation.</p>
                <a href="<?= base_url('gudang/fancytipekamar')?>" class="btn btn-danger">Book Now</a>
              </div>
            </div>
          </div>

          <!-- Room 3 -->
          <div class="col-md-4 mb-4">
            <div class="card">
              <img src="<?= base_url('img/1730996314_twinbed.jpeg') ?>" class="card-img-top" style="height: 250px;" alt="Room 3">
              <div class="card-body">
                <h5 class="card-title">Twin Bed Room</h5>
                <p class="card-text">Affordable rooms without compromising comfort and convenience.</p>
                <a href="<?= base_url('gudang/fancytipekamar')?>" class="btn btn-danger">Book Now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Facilities Section -->
    <section id="facilities" class="text-center py-5">
  <div class="container">
    <h2 class="mb-4">Hotel Facilities</h2>
    <div class="row">
      
      <!-- Free WiFi -->
      <div class="col-md-4 mb-4">
        <div class="facility-item" style="background-image: url('<?= base_url('img/wifi.jpg') ?>'); background-size: cover; background-position: center; height: 250px; display: flex; flex-direction: column; justify-content: center; color: white; text-align: center; border-radius: 8px;">
          <i class="bi bi-wifi" style="font-size: 40px;"></i>
          <h5>Free WiFi</h5>
          <p>Stay connected with free high-speed WiFi throughout the hotel.</p>
        </div>
      </div>

      <!-- Restaurant -->
      <div class="col-md-4 mb-4">
        <div class="facility-item" style="background-image: url('<?= base_url('img/restaurant.jpg') ?>'); background-size: cover; background-position: center; height: 250px; display: flex; flex-direction: column; justify-content: center; color: white; text-align: center; border-radius: 8px;">
          <i class="bi bi-house-door" style="font-size: 40px;"></i>
          <h5>Restaurant</h5>
          <p>Enjoy gourmet dining with a selection of delicious dishes.</p>
        </div>
      </div>

      <!-- Swimming Pool -->
      <div class="col-md-4 mb-4">
        <div class="facility-item" style="background-image: url('<?= base_url('img/pool.jpg') ?>'); background-size: cover; background-position: center; height: 250px; display: flex; flex-direction: column; justify-content: center; color: white; text-align: center; border-radius: 8px;">
          <i class="bi bi-umbrella" style="font-size: 40px;"></i>
          <h5>Swimming Pool</h5>
          <p>Relax and unwind at our luxurious pool area.</p>
        </div>
      </div>

    </div>
  </div>
</section>

    <!-- Contact Section -->
    <section id="contact" class="bg-light py-5">
      <div class="container text-center">
        <h2>Contact Us</h2>
        <p>Have any questions? Reach out to us and we'll be happy to assist you!</p>
        <p><strong>Email:</strong> contact@elysiumhotel.com</p>
        <p><strong>Phone:</strong> +1 234 567 890</p>
      </div>
    </section>