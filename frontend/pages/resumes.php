<?php
require_once '../config/connection.php';

$qResumes = "SELECT * FROM resumes ORDER BY id DESC"; 
$resumes_result = mysqli_query($connect, $qResumes) or die(mysqli_error($connect));
?>


<section id="resumes" class="resumes section py-6 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Resume</h2>
      <h6 class="fw-bold">Berikut Pengalaman/Pendidikn terakhir saya.</h6>
    </div>

<div class="row g-4 justify-content-center">
  <?php
  $resume_counter = 0;
  while ($dataresumes = mysqli_fetch_assoc($resumes_result)) {
    $resume_counter++;
  ?>
    <div class="col-md-10 col-lg-8" data-aos="fade-up" data-aos-delay="<?= $resume_counter * 100 ?>">
      <div class="bg-dark p-4 rounded-3 h-100 shadow-sm text-white">
        <h5 class="text-warning fw-bold mb-4 text-center section-card-title">Education</h5>

        <div class="resume-item text-center">
          <p class="fw-bold mb-1">Pendidikan:</p>
          <p class="mb-3"><?= htmlspecialchars($dataresumes['job']) ?></p>

          <p class="fw-bold mb-1">Tempat:</p>
          <p class="mb-3"><?= htmlspecialchars($dataresumes['place']) ?></p>

          <p class="fw-bold mb-1">Tahun:</p>
          <p class="mb-3"><?= htmlspecialchars($dataresumes['date']) ?></p>

          <hr class="border-secondary">

           <h5 class="text-warning fw-bold mb-4 text-center section-card-title">Description</h5>

          <p class="fw-bold mb-1">Deskripsi:</p>
          <p class="mb-0"><?= htmlspecialchars($dataresumes['description']) ?></p>
        </div>
      </div>
    </div>
  <?php } ?>

  <?php if (mysqli_num_rows($resumes_result) == 0) { ?>
    <div class="col-12 text-center text-muted mt-5">
      <p>Belum ada data resume yang tersedia.</p>
    </div>
  <?php } ?>
</div>
</section>