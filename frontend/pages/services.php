<?php
require_once '../config/connection.php'; 

$qservices = "SELECT * FROM services"; 
$result_services = mysqli_query($connect, $qservices) or die(mysqli_error($connect));
?>

<section id="services" class="services section py-6 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Service</h2>
      <h6 class="fw-bold">Berikut adalah layanan saya.</h6>
    </div>
        <div class="row gy-6">

            <?php
        
            while ($data_services = mysqli_fetch_assoc($result_services)) {
                
            ?>
                <div class="col-lg-4 col-md-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="service-item position-relative d-flex">
                        <div class="me-2">
                          <img src="../storages/services/<?= htmlspecialchars($data_services['icon']) ?>" alt="Service Icon" class="img-fluid" style="width: 80px; height: 80px;">
                        </div>
                        <h3><?= htmlspecialchars($data_services['job']) ?></h3>
                        </div>
                </div><?php
            } 
            ?>

        </div>

    </div>

</section>