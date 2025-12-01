<?php
require_once '../config/connection.php';

$qBlog = "SELECT * FROM blogs";
$blog = mysqli_query($connect, $qBlog) or die(mysqli_error($connect));
?>

<section id="blog" class="blog section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Blog</h2>
      <h6 class="fw-bold">Informasi tentang kegiatan yang pernah saya lakukan.</h6>
    </div>

    <div class="row g-4">
      <?php while ($data = mysqli_fetch_assoc($blog)) : ?>
        <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
          <div class="card h-100 shadow-sm border-0 bg-dark text-white">
            <img src="../storages/blog/<?= $data['image'] ?>" class="card-img-top" alt="Blog Image">
            <div class="card-body">
              <small class="text-warning d-block mb-2">
                <?= date('F d, Y', strtotime($data['date'])) ?> &nbsp; &nbsp; 
                <span class="text-uppercase"><?= $data['author'] ?></span> &nbsp;
               
              </small>
              <h5 class="card-title text-white fw-bold"><?= $data['title'] ?></h5>
             <p class="fs-5">
                <span class="short-text"><?= htmlspecialchars(substr($data['description'], 0, 150)) ?>...</span>
                <span class="full-text d-none"><?= htmlspecialchars($data['description']) ?></span>
                <button class="btn btn-link p-0 read-more-btn fw-bold" style="color: orange;">Baca Selengkapnya</button>
            </p>
            </div>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>
</section>
