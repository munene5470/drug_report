


<?php
$connect = mysqli_connect("localhost", "root",
    "", "county");
$date = date("Y-m-d");
$query = "select * from reports where  `date` >= DATE_SUB(CURDATE(),INTERVAL 1 MONTH )";
$result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin</title>

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">


    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">Drug Reporting</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="tables.php">
                <i class="fas fa-fw fa-table"></i>
                <span>Reports</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>

    </ul>

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


                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">


                    <div class="topbar-divider d-none d-sm-block"></div>


                </ul>

            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <h1 class="h3 mb-2 text-gray-800">Reports</h1>
                <p class="mb-4">This are your weekly reports as submitted from different counties .</p>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" cellspacing="0">
                            <thead>
                            <tr>
                                <th width="4%">County</th>
                                <th width="4%">Chang'aa(Lts)</th>
                                <th width="4%">Kangara(Lts)</th>
                                <th width="4%">Other Traditional Drinks(Lts)</th>
                                <th width="4%">Alcohol poured/Destroyed(Lts)</th>
                                <th width="4%">Equipment Destroyed</th>
                                <th width="4%">2nd Generation Liqour</th>
                                <th width="4%">Illegal Ethanol(Lts)</th>
                                <th width="4%">Bhang Rolls</th>
                                <th width="4%">Bhang Plants</th>
                                <th width="4%">Bhang Brooms</th>
                                <th width="4%">Bhang Stones</th>
                                <th width="4%">Bhang Kgs</th>
                                <th width="4%">Cocaine, Heroin and Others(Sachets)</th>
                                <th width="4%">Total Arrests</th>
                                <th width="4%">Number Charged</th>
                                <th width="4%">Total fines(Ksh)</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            while ($row = mysqli_fetch_array($result))
                            {
                                ?>
                                <tr>
                                    <td><?php echo $row["county"];?></td>
                                    <td><?php echo $row["changaa"];?></td>
                                    <td><?php echo $row["kangara"];?></td>
                                    <td><?php echo $row["t_drinks"];?></td>
                                    <td><?php echo $row["alcohol_poored"];?></td>
                                    <td><?php echo $row["equipment"];?></td>
                                    <td><?php echo $row["spirits"];?></td>
                                    <td><?php echo $row["ethanol"];?></td>
                                    <td><?php echo $row["rolls"];?></td>
                                    <td><?php echo $row["plants"];?></td>
                                    <td><?php echo $row["brooms"];?></td>
                                    <td><?php echo $row["stones"];?></td>
                                    <td><?php echo $row["kgs"];?></td>
                                    <td><?php echo $row["cocaine"];?></td>
                                    <td><?php echo $row["arrests"];?></td>
                                    <td><?php echo $row["number_charged"];?></td>
                                    <td><?php echo $row["fines"];?></td>

                                </tr>
                                <?php
                            }
                            ?>
                            </tbody>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; Your Website 2019</span>
                </div>
            </div>
        </footer>
        <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="../user_login.php">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="../../../../examples/resources/demo.js"></script>
<script type="text/javascript" class="init">
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


<!-- Page level custom scripts -->
<script src="js/demo/datatables-demo.js"></script>
<script>
</script>

</body>

</html>
