<?php
     include('includes/header.php');
     include ('includes/navbar.php');
     include ('includes/con.php');


     ?>
<!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        </nav>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Reports Uploaded This Week</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $date = date("Y-m-d");
                          $sql=$query = "select * from reports where  `date` >= DATE_SUB(CURDATE(),INTERVAL 1 DAY )";

                          if ($result=mysqli_query($connect,$sql))
                          {
                              // Return the number of rows in result set
                              $rowcount=mysqli_num_rows($result);
                              printf($rowcount);
                              // Free result set
                              mysqli_free_result($result);
                          }
                          else{

                          }


                          mysqli_close($connect)
                          ?>

          </div>


      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


