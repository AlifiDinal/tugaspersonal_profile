<?php
require_once '../config/connection.php';

$qsocmeds = "SELECT * FROM socmeds";
$socmeds = mysqli_query($connect, $qsocmeds) or die(mysqli_error($connect));
?>

<footer id="footer" class="footer dark-background">
    <div class="container">
      <h3 class="sitename">Sosial Media</h3>
      <div class="social-links d-flex justify-content-center">

        <?php while ($data_socmeds = mysqli_fetch_assoc($socmeds)) : ?>
          <a href="<?= htmlspecialchars($data_socmeds['link']) ?>" target="_blank" class="">
            <img src="../storages/socmeds/<?= htmlspecialchars($data_socmeds['icon']) ?>" 
                 alt="socmeds Icon" class="img-fluid rounded-circle" style="width: 40px; height: 40px; background:white">
          </a>
        <?php endwhile; ?>

      </div>

      <div class="container">
        <div class="copyright">
           <strong class="px-1 sitename">Alifi Dinal Maulana.</strong>
        </div>
        <div class="credits">
            Email : <a href="mailto:aifidinalmaulana@gmail.com">aifidinalmaulana@gmail.com</a>
        </div>
      </div>
    </div>
</footer>
