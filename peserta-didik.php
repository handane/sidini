<?php
// error_reporting(0);
session_start();
include("db.php");
if (!isset($_SESSION["user"])) {
   echo "<script>location='index.php'</script>";
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
   <title>SIDINI</title>
   <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
   <link href="css/styles.css" rel="stylesheet" />
   <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
   <style>
      .tengah {
         text-align: center;
      }

      .bg-bawah {
         background-color: #EEEEEE;
      }

      .lebar {
         width: 25%;
      }

      .card-header {
         background-color: #DDDDDD;
      }

      span {
         color: #B20600;
         font-weight: 500;
      }

      .bx-shadow {
         box-sizing: border-box;
         box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
      }

      .bgc {
         background-color: #FBFBFB;
      }
   </style>
</head>

<body class="sb-nav-fixed">
   <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">


      <!-- Navbar Brand-->
      <a class="navbar-brand ps-3" href="paud.php"> SIDINI </a>
      <!-- Sidebar Toggle-->
      <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!">
         <i class="fas fa-bars"></i>
      </button>

      <!-- navbar nama -->
      <div class="navbar-nav ps-3 d-md-inline-block form-inline ms-auto" href="index.html" style="color: white; text-decoration: none">
         <p><?php echo "<p>" . $_SESSION['user']['nama_paud'] . "</p>" ?></p>
      </div>

      <!-- navbar icon  -->
      <ul class="navbar-nav me-0 me-md-3 my-2 my-md-0">
         <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
               <li><a class="dropdown-item" href="paud.php">Profil</a></li>
               <li>
                  <hr class="dropdown-divider" />
               </li>
               <li><a href="logout.php" class="dropdown-item">logout</a></li>

            </ul>
         </li>
      </ul>
   </nav>
   <div id="layoutSidenav">
      <div id="layoutSidenav_nav">
         <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
               <div class="nav">
                  <div class="sb-sidenav-menu-heading">Laporan</div>
                  <a class="nav-link " href="laporan.php">
                     <div class="sb-nav-link-icon">
                        <i class="far fa-calendar"></i>
                     </div>
                     Kirim Laporan
                  </a>
                  <a class="nav-link" href="riwayat-laporan.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-tachometer-alt"></i>
                     </div>
                     Riwayat Laporan
                  </a>
                  <div class="sb-sidenav-menu-heading">Laman</div>
                  <a class="nav-link" href="paud.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-book"></i>
                     </div>
                     Identitas PAUD
                  </a>

                  <a class="nav-link" href="tenaga-pendidik.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-book"></i>
                     </div>
                     Tenaga Pendidik
                  </a>

                  <a class="nav-link aktif" href="peserta-didik.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-book"></i>
                     </div>
                     Peserta Didik
                  </a>
                  <a class="nav-link" href="sarana-dan-prasarana.php">
                     <div class="sb-nav-link-icon">
                        <i class="fas fa-book"></i>
                     </div>
                     Sarana dan Prasarana
                  </a>
                  <a class="nav-link" href="help.php">
                     <div class="sb-nav-link-icon">
                        <i class="far fa-question-circle"></i>
                     </div>
                     Bantuan
                  </a>
               </div>
            </div>
            <div class="sb-sidenav-footer">
               <div class="small">masuk sebagai:</div>
               PAUD
            </div>
         </nav>
      </div>
      <div id="layoutSidenav_content" class="bgc">
         <main>
            <div class="container-fluid px-3">
               <h5 class="mt-4">Peserta Didik</h5>
               <ol class="breadcrumb mb-4">
                  <li class="breadcrumb-item active">Data Peserta Didik</li>
               </ol>

               <!-- Keadaan -->
               <div class="card mb-4 bx-shadow">
                  <div class="card-header" style="padding:5px 0 0 15px">
                     <h6>Keadaan</h6>
                  </div>
                  <div class="card-body table-responsive">
                     <table class="table table-sm table-bordered border-dark">
                        <thead>
                           <tr class="tengah atas-bg2">
                              <th colspan="3">1-2 Tahun</th>
                              <th colspan="3">3 Tahun</th>
                              <th colspan="3">4 Tahun</th>
                              <th colspan="3">5-6 Tahun</th>
                              <th colspan="3">Jumlah Keseluruhan</th>
                           </tr>
                           <tr class="tengah bg-atas">
                              <td>L</td>
                              <td>P</td>
                              <td><span>Jumlah</span></td>

                              <td>L</td>
                              <td>P</td>
                              <td><span>Jumlah</span></td>

                              <td>L</td>
                              <td>P</td>
                              <td><span>Jumlah</span></td>

                              <td>L</td>
                              <td>P</td>
                              <td><span>Jumlah</span></td>

                              <td>L</td>
                              <td>P</td>
                              <td><span>Jumlah</span></td>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           $id_author = $_SESSION['user']['id_author'];
                           $peserta = mysqli_query($conn, "SELECT * FROM peserta_didik WHERE id_author = $id_author");
                           if (mysqli_num_rows($peserta) > 0) {
                              while ($row = mysqli_fetch_array($peserta)) {
                           ?>
                                 <?php
                                 $J12 = $row['L12'] + $row['P12'];
                                 $J3 = $row['L3'] + $row['P3'];
                                 $J4 = $row['L4'] + $row['P4'];
                                 $J56 = $row['L56'] + $row['P56'];
                                 $total_L = $row['L12'] + $row['L3'] + $row['L4'] + $row['L56'];
                                 $total_P = $row['P12'] + $row['P3'] + $row['P4'] + $row['P56'];
                                 $J_total = $J12 + $J3 + $J4 + $J56;
                                 ?>
                                 <tr class="tengah bg-bawah">
                                    <td>
                                       <?php echo $row['L12'] ?>
                                    </td>
                                    <td>
                                       <?php echo $row['P12'] ?>
                                    </td>
                                    <td>
                                       <span><?php echo $J12 ?></span>
                                    </td>
                                    <td>
                                       <?php echo $row['L3'] ?>
                                    </td>
                                    <td>
                                       <?php echo $row['P3'] ?>
                                    </td>
                                    <td>
                                       <span><?php echo $J3 ?></span>
                                    </td>
                                    <td>
                                       <?php echo $row['L4'] ?>
                                    </td>
                                    <td>
                                       <?php echo $row['P4'] ?>
                                    </td>
                                    <td>
                                       <span><?php echo $J4 ?></span>
                                    </td>
                                    <td>
                                       <?php echo $row['L56'] ?>
                                    </td>
                                    <td>
                                       <?php echo $row['P56'] ?>
                                    </td>
                                    <td>
                                       <span><?php echo $J56 ?></span>
                                    </td>
                                    <td>
                                       <?php echo $total_L ?>
                                    </td>
                                    <td>
                                       <?php echo $total_P ?>
                                    </td>
                                    <td>
                                       <span><?php echo $J_total ?></span>
                                    </td>

                                 </tr>
                              <?php
                              }
                           } else { ?>
                              <tr>
                                 <td colspan="15">tidak ada data</td>
                              </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <!-- Mutasi -->
               <div class="card mb-4 bx-shadow">
                  <div class="card-header" style="padding:5px 0 0 15px">
                     <h6>Mutasi</h6>
                  </div>
                  <div class="card-body">
                     <table class="table table-sm table-bordered border-dark">
                        <thead>
                           <tr class="tengah atas-bg2">
                              <th>Pindah (Masuk)</th>
                              <th>Pindah (Keluar)</th>
                              <th>Baru</th>
                              <th>Berhenti</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php
                           $no = 1;
                           $id_author = $_SESSION['user']['id_author'];
                           $peserta = mysqli_query($conn, "SELECT * FROM peserta_didik WHERE id_author = $id_author");
                           if (mysqli_num_rows($peserta) > 0) {
                              while ($row = mysqli_fetch_array($peserta)) {
                           ?>
                                 <tr class="tengah bg-bawah">
                                    <td class="lebar">
                                       <?php echo $row['pindah_masuk'] ?>
                                    </td>
                                    <td class="lebar">
                                       <?php echo $row['pindah_keluar'] ?>
                                    </td>
                                    <td class="lebar">
                                       <?php echo $row['baru'] ?>
                                    </td>
                                    <td>
                                       <?php echo $row['berhenti'] ?>
                                    </td>

                                 </tr>
                              <?php
                              }
                           } else { ?>
                              <tr>
                                 <td colspan="8">tidak ada data</td>
                              </tr>
                           <?php } ?>
                        </tbody>
                     </table>
                  </div>
               </div>
               <?php
               $no = 1;
               $id_author = $_SESSION['user']['id_author'];

               $peserta = mysqli_query($conn, "SELECT * FROM peserta_didik WHERE id_author = $id_author");
               if (mysqli_num_rows($peserta) > 0) {
                  // 
               ?>
                  <a href="edit-peserta-didik.php" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 2 18 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                     </svg> Edit</a>
               <?php
               } else {
               ?>
                  <a href="tambah-peserta.php" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 2 18 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                     </svg> Tambah</a>
               <?php } ?>

               <!-- older -->

            </div>
         </main>
         <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
               <div class="d-flex align-items-center justify-content-between small">
                  <div class="text-muted">
                     Copyright &copy; Sistem Aplikasi Pelaporan Pendidikan
                     Anak Usia Dini
                  </div>
                  <div>
                     <a href="#">Privacy Policy</a>
                     &middot;
                     <a href="#">Terms &amp; Conditions</a>
                  </div>
               </div>
            </div>
         </footer>
      </div>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
   <script src="js/scripts.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
   <script src="assets/demo/chart-area-demo.js"></script>
   <script src="assets/demo/chart-bar-demo.js"></script>
   <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
   <script src="js/datatables-simple-demo.js"></script>
</body>

</html>