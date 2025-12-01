 <?php
 include "../config/connection.php";
$qNav = "SELECT * FROM abouts LIMIT 1";
$resultNavbar = mysqli_query($connect, $qNav) or die(mysqli_error($connect));
?>
 
 <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    	<?php
				
				while($item = $resultNavbar->fetch_object()):
			?>
      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
         <img src="../storages/about/<?= $item->image?>" alt="foto" width="35" height="35" class="rounded-circle">
        <h1 class="sitename">Alifi Dinal Maulana</h1>
      </a>

        <?php endwhile;?>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#services">Service</a></li>
          <li><a href="#resumes">Resume</a></li>
          <li><a href="#projects">Project</a></li>
          <li><a href="#skill">Skill</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>
