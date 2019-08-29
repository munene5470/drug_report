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
    <!-- Content Row -->
          <div class="row">

            <!-- Report (Daily) -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href="daily.php">Uploaded Today</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $date = date("Y-m-d");
                          $sql=$query = "select * from reports where  `date` >= DATE_SUB(CURDATE(),INTERVAL 12 HOUR )";
                          if ($result=mysqli_query($connect,$sql))
                          {
                              // Return the number of rows in result set
                              $rowcount=mysqli_num_rows($result);
                              printf($rowcount);
                              // Free result set
                              mysqli_free_result($result);
                          }
                          else{
                              echo "<div class='alert alert-danger'>
                                         <strong>No reports found</strong>
                            </div>";
                          }

                          ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Report (Weekly) -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-success text-uppercase mb-1"><a href="weekly.php">Uploaded This Week</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $date = date("Y-m-d");
                          $sql=$query = "select * from reports where  `date` >= DATE_SUB(CURDATE(),INTERVAL 7 DAY )";
                          if ($result=mysqli_query($connect,$sql))
                          {
                              // Return the number of rows in result set
                              $rowcount=mysqli_num_rows($result);
                              printf($rowcount);
                              // Free result set
                              mysqli_free_result($result);
                          }
                          else{
                               echo "<div class='alert alert-danger'>
                                         <strong>No reports found</strong>
                            </div>";
                          }

                          ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>


           
            <!-- Report (Monthly) -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-warning text-uppercase mb-1"><a href="monthly.php">Uploaded This Month</a> </div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                          <?php
                          $date = date("Y-m-d");
                          $sql=$query = "select * from reports where  `date` >= DATE_SUB(CURDATE(),INTERVAL 1 MONTH )";
                          if ($result=mysqli_query($connect,$sql))
                          {
                              // Return the number of rows in result set
                              $rowcount=mysqli_num_rows($result);
                              printf($rowcount);
                              // Free result set
                              mysqli_free_result($result);
                          }
                          else{
                              echo "<div class='alert alert-danger'>
                                         <strong>No reports found</strong>
                            </div>";
                          }
                          mysqli_close($connect)
                          ?>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="row">

            <!-- Content Column -->
            <div class="col-lg-6 mb-4">

              <!-- Project Card Example -->

              <!-- Illustrations -->

            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>



      </div>
      <!-- End of Main Content -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->


