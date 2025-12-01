  
<?php
  require_once '../config/connection.php';


$qAbout = "SELECT * FROM abouts";
$about = mysqli_query($connect, $qAbout) or die(mysqli_error($connect));
$dataAbout = mysqli_fetch_assoc($about);

?>

<section id="about" class="about section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">About</h2>
      <h6 class="fw-bold">Berikut data diri saya.</h6>
    </div>

    <div class="row align-items-center justify-content-center g-5">
      <!-- Foto Profil -->
      <div class="col-md-5 text-center" data-aos="fade-up" data-aos-delay="50">
        <img src="..\storages\about\<?= $dataAbout['image'] ?>" alt="Foto Profil" class="img-fluid rounded-circle shadow" style="max-width: 280px;">
        <p class="text-muted mb-0">Foto Profile. | Alifi Dinal Maulana.</p>
      </div>

      <!-- Informasi Pribadi -->
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <div class="card shadow border-0">
          <div class="card-body">
            <h5 class="card-title mb-3 fw-bold">Perkenalan Singkat</h5>
            <p class="fw-bold mb-1 text-center fs-5">Deskripsi</p>
         <p class="fs-6">
                <span class="short-text"><?= htmlspecialchars(substr($dataAbout['description'], 0, 200)) ?>...</span>
                <span class="full-text d-none"><?= htmlspecialchars($dataAbout['description']) ?></span>
                <button class="btn btn-link p-0 read-more-btn fw-bold" style="color: orange;">Baca Selengkapnya</button>
            </p>
            
            <ul class="list-group list-group-flush mt-3">
              
              <li class="list-group-item d-flex">
                <strong><i class="bi bi-person-fill me-2 mr-5"></i>Nama :</strong>
                <span style="margin-left: 20px;"><?= $dataAbout['name'] ?></span>
              </li>
              <li class="list-group-item d-flex ">
                <strong><i class="bi bi-calendar-date-fill me-2 mr-5"></i>Tanggal Lahir:</strong>
                <span style="margin-left: 20px;"><?= $dataAbout['born'] ?></span>
              </li>
              <li class="list-group-item d-flex">
                <strong><i class="bi bi-geo-alt-fill me-2"></i>Alamat:</strong>
                <span style="margin-left: 20px;"><?= $dataAbout['address'] ?></span>
              </li>
              <li class="list-group-item d-flex">
                <strong><i class="bi bi-mailbox2 me-2"></i>Kode Pos:</strong>
                <span style="margin-left: 20px;"><?= $dataAbout['zib_code'] ?></span>
              </li>
              <li class="list-group-item d-flex">
                <strong><i class="bi bi-envelope-fill me-2"></i>Email:</strong>
                <span style="margin-left: 20px;"><?= $dataAbout['email'] ?></span>
              </li>
              <li class="list-group-item d-flex">
                <strong><i class="bi bi-telephone-fill me-2"></i>Phone:</strong>
                <span style="margin-left: 20px;"><?= $dataAbout['phone'] ?></span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

