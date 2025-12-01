<?php
require_once '../config/connection.php';

$qskill = "SELECT * FROM skill";
$skill = mysqli_query($connect, $qskill) or die(mysqli_error($connect));
?>

<section class="ftco-section" id="skill">
    <div class="container">
        <div class="row justify-content-center pb-5">
            <div class="col-md-12 heading-section text-center ftco-animate">
                <h2 class="fw-bold">Skill</h2>
                <h6 class="fw-bold">Berikut Skill yang pernah saya pelajari. </h6>       
            </div>
        </div>
        <div class="row">
            <?php

            while ($dataskill = mysqli_fetch_assoc($skill)) {
            ?>
                <div class="col-md-6 animate-box mt-4">
                    <div class="progress-wrap ftco-animate">
                        <h3><?= htmlspecialchars($dataskill['Skill']) ?></h3> <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?= htmlspecialchars($dataskill['percent']) ?>"
                                aria-valuemin="5" aria-valuemax="100" style="width:<?= htmlspecialchars($dataskill['percent']) ?>%; background-color: #FF9B2F; color: white;">
                                <span><?= htmlspecialchars($dataskill['percent']) ?>%</span>
                            </div>
                        </div>
                         <p class="fs-7">
                            <span class="short-text"><?= htmlspecialchars(substr($dataskill['description'], 0, 150)) ?>...</span>
                            <span class="full-text d-none"><?= htmlspecialchars($dataskill['description']) ?></span>
                            <button class="btn btn-link p-0 read-more-btn fw-bold" style="color: orange;">Baca Selengkapnya</button>
                        </p>
                    </div>
                </div>
            <?php
            } 
            ?>
        </div>
    </div>
</section>