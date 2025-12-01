<?php
  require_once '../config/connection.php';

$qProjects = "SELECT * FROM projects";
$projects_result = mysqli_query($connect, $qProjects) or die(mysqli_error($connect));

?>

<section id="projects" class="pjojects section py-5 bg-light">
  <div class="container">
    <div class="text-center mb-5" data-aos="fade-up">
      <h2 class="fw-bold">Project</h2>
      <h6 class="fw-bold">Contoh Project yang pernah saya kerjakan.</h6>
    </div>
        <div class="row gy-3">

          <?php
          $project_counter = 1; 
          while ($dataprojects = mysqli_fetch_assoc($projects_result)) {
          ?>
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="<?= $project_counter * 100 ?>">
            <div class="team-member">
              <div class="projects-img"  style= " height: 350px; 
                                                  overflow: hidden;
                                                  display: flex;
                                                  align-items: center;
                                                  justify-content: center;">
               <img src="../storages/projects/<?= $dataprojects['image'] ?>" class="card-img-top" alt="projects Image">
                </div>
              <div class="member-info text-center">
                <h5 class="fw-bold">Projects <?= $project_counter ?></h5>
                <span class="fw-bold">Judul: </span><span><?= $dataprojects['title'] ?></span><br> <span class="fw-bold">Pekerjaan: </span><span><?= $dataprojects['job'] ?></span>
              </div>
            </div>
          </div><?php
            $project_counter++;
          }
          ?>
        </div>

      </div>

    </section>