
<?php
 session_start();
 include '../../app.php';

// mengecek  apakah user sudah login 
  if(!isset($_SESSION['email'])){
       echo "
           <script>
               alert('Anda Harus Login Dahulu');
             window.location.href='../auth/login.php';
          </script>    
        ";   
    } 
 ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Admin  Personil Profil Alif</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="../../template-admin/template/css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    </head>