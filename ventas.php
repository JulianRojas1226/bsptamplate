<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Productos</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <!-- iconos -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="indexad.html" class="logo d-flex align-items-center">
        <img src="assets/img/Logo.png   " alt="">
        <span class="d-none d-lg-block">Bassprod</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-chat-left-text"></i>
            <span class="badge bg-success badge-number">3</span>
          </a><!-- End Messages Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            <li class="dropdown-header">
              You have 3 new messages
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-1.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Maria Hudson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>4 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-2.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>Anna Nelson</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>6 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="message-item">
              <a href="#">
                <img src="assets/img/messages-3.jpg" alt="" class="rounded-circle">
                <div>
                  <h4>David Muldon</h4>
                  <p>Velit asperiores et ducimus soluta repudiandae labore officia est ut...</p>
                  <p>8 hrs. ago</p>
                </div>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="dropdown-footer">
              <a href="#">Show all messages</a>
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">K. Anderson</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Kevin Anderson</h6>
              <span>Web Designer</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="users-profile.html">
                <i class="bi bi-gear"></i>
                <span>Account Settings</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="pages-faq.html">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="indexad.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link " href="productos.php">
        <i class="fa-solid fa-martini-glass-empty"></i>
          <span>Productos</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="ventas.php">
        <i class="fa-solid fa-sack-dollar"></i>
          <span>ventas</span>
        </a>
      </li>
      <!-- End Profile Page Nav -->

      

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Profile</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">productos</li>
          <li class="breadcrumb-item active">vista</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="inicio">
        <div class="container-lg">
          <div class="row">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                + 
              </button>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content prod">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">productos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body form">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Nueva orden</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Agregar Cantidad</button>
                        </li>
                        
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                              
                                <form action="assets/php/ventas.php" id="N-producto" method="post" enctype="multipart/form-data">
                                <?php


                                include "assets/php/conexionbd.php";
                                        $query = "SELECT codigo , nombre FROM empleado";
                                        $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                                
                                        echo "<select name='user'>";
                                          echo  "<option selected value=0> --Seleccione un tipo-- </option>";
                                          
                                        while($fila=mysqli_fetch_array($result))
                                        {
                                                          echo  "<option value=$fila[0]> $fila[1] </option>";
                                                      }
                                              
                                          echo "</select>";
                      
                                        $query = "SELECT N°,N° FROM mesa";
                                        $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                                
                                        echo "<select name='n-mesa'>";
                                          echo  "<option selected value=0> --Seleccione un tipo-- </option>";
                                          
                                        while($fila=mysqli_fetch_array($result))
                                        {
                                                          echo  "<option value=$fila[0]> $fila[1] </option>";
                                                      }
                                              
                                          echo "</select>";
                      ?>
                      <button type="submit">agregar orden</button>
                                </form>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                          <form action="assets/php/add_p.php" method="post" id="A-producto" >
                          <?php
                                     include"assets/php/conexionbd.php";
                                     $query = "SELECT id , nombre FROM producto";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productadd'>";
                                     echo "<option selected value='0'>--Seleccione una producto--</option>";
                                     while($row=mysqli_fetch_array($result))
                                     {
                                                       echo  "<option value=$row[0]> $row[1] </option>";
                                                   }
                                           
                                       echo "</select>";
                             
                                     echo "</select>";
                              ?>
                                  
                            <input type="number" name="cantidad_add" id="">
                            <?php
                                     include"assets/php/conexionbd.php";
                                     $query = "SELECT NID , nombre FROM proveedor";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productaddpro'>";
                                     echo "<option selected value='0'>--Seleccione un proveedor--</option>";
                             
                                     while($row=mysqli_fetch_array($result))
                                      {
                                                        echo  "<option value=$row[0]> $row[1] </option>";
                                                    }
                                            
                                        echo "</select>";
                              
                                      echo "</select>";
                                    ?>
                            <button type="submit">Guardar</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                          <form action="../php/proveedor.php" method="post">
                            <input type="nombre" name="N-proveedor" placeholder="Proveedor">
                            <input type="number" name="DNI-proo" placeholder="Numero-proo">
                            <button type="submit">Guardar</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                          <form action="../php/tipo.php" method="post">
                            <input type="text" name="n_tipo" id="">
                            <button type="submit" id="btn_tipo">Guardar</button>
                          </form>
                        </div>
                      </div>             
                    </div>                    
                  </div>
                </div>
            
          </div>
          </div>
        </div>
        <div class="container-lg">
          <h2>mesas ocupadas</h2>
          <?php
          include('assets/php/conexionbd.php');
          $con = mysqli_query($link,"SELECT * FROM orden");

          while($row= mysqli_fetch_array($con)){

          ?>
          <div class="row">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <?php echo "mesa ".$row['mesa']?>
              </button>
              <?php
            
            }
            ?>
              <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content prod">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">productos</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body form">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Nueva orden</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Agregar Cantidad</button>
                        </li>
                        
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade active show" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                              
                                <form action="assets/php/ventas.php" id="N-producto" method="post" enctype="multipart/form-data">
                                <?php
                                     include"assets/php/conexionbd.php";
                                     $query = "SELECT id , nombre FROM producto";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productadd'>";
                                     echo "<option selected value='0'>--Seleccione una producto--</option>";
                                     while($row=mysqli_fetch_array($result))
                                     {
                                                       echo  "<option value=$row[0]> $row[1] </option>";
                                                   }
                                           
                                       echo "</select>";
                             
                              
                              ?>
                                  
                                <?php
                                include "assets/php/conexionbd.php";                          
                                        $query = "SELECT N°,N° FROM mesa";
                                        $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                                
                                        echo "<select name='n-mesa'>";
                                          echo  "<option selected value=0> --Seleccione un tipo-- </option>";
                                          
                                        while($fila=mysqli_fetch_array($result))
                                        {
                                                          echo  "<option value=$fila[0]> $fila[1] </option>";
                                                      }
                                              
                                          echo "</select>";
                      ?>
                      <button type="submit">agregar orden</button>
                                </form>
                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                          <form action="assets/php/add_p.php" method="post" id="A-producto" >
                          <?php
                                     include "assets/php/conexionbd.php";
                                     $query = "SELECT id , nombre FROM producto";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productadd'>";
                                     echo "<option selected value='0'>--Seleccione una producto--</option>";
                                     while($row=mysqli_fetch_array($result))
                                     {
                                                       echo  "<option value=$row[0]> $row[1] </option>";
                                                   }
                                           
                                       echo "</select>";
                             
                                     echo "</select>";
                              ?>
                                  
                            <input type="number" name="cantidad_add" id="">
                            <?php
                                     include"assets/php/conexionbd.php";
                                     $query = "SELECT NID , nombre FROM proveedor";
                                     $result = mysqli_query($link, $query) or die("Error en la consulta de programa");
                             
                                     echo "<select name='productaddpro'>";
                                     echo "<option selected value='0'>--Seleccione un proveedor--</option>";
                             
                                     while($row=mysqli_fetch_array($result))
                                      {
                                                        echo  "<option value=$row[0]> $row[1] </option>";
                                                    }
                                            
                                        echo "</select>";
                              
                                      echo "</select>";
                                    ?>
                            <button type="submit">Guardar</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                          <form action="../php/proveedor.php" method="post">
                            <input type="nombre" name="N-proveedor" placeholder="Proveedor">
                            <input type="number" name="DNI-proo" placeholder="Numero-proo">
                            <button type="submit">Guardar</button>
                          </form>
                        </div>
                        <div class="tab-pane fade" id="disabled-tab-pane" role="tabpanel" aria-labelledby="disabled-tab" tabindex="0">
                          <form action="../php/tipo.php" method="post">
                            <input type="text" name="n_tipo" id="">
                            <button type="submit" id="btn_tipo">Guardar</button>
                          </form>
                        </div>
                      </div>             
                    </div>                    
                  </div>
                </div>
            
          </div>
            
          </div>
          
            
        </div>
      </section>
    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Bassprod</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>