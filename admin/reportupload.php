
<?php
   $connect = mysqli_connect("localhost", "root",
   "", "county");
   $query = "SELECT * FROM reports ORDER BY id ASC";
   $result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
    <title>DataTables example - File export</title>
    <link rel="shortcut icon" type="image/png" href="/media/images/favicon.png">
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <style type="text/css" class="init">
    </style>
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



        $(document).ready(function() {
            $('#example').DataTable( {
                dom: 'Bfrtip',
                buttons: [
                    'copy', 'excel', 'pdf', 'print'
                ]
            } );
        } );



    </script>
</head>
<body>

    <div class="fw-body">
        <div class="content">
            <h1 class="page_title">Drug Report export</h1>
            <table id="example" class="table table-striped table-bordered" cellspacing="0" style="width:100%">
                <thead>
                <tr>
                    <th width="5%">ID</th>
                    <th width="5%">COUNTY</th>
                    <th width="5%">CHANGAA</th>
                    <th width="5%">KANGARA</th>
                    <th width="5%">T_DRINKS</th>
                    <th width="5%">SPIRITS</th>
                    <th width="5%">COUNTERFEIT</th>
                    <th width="5%">ROLLS</th>
                    <th width="5%">PLANTS</th>
                    <th width="5%">BROOMS</th>
                    <th width="5%">STONES</th>
                    <th width="5%">KGS</th>
                    <th width="5%">COCAINE</th>
                    <th width="5%">FINES</th>
                    <th width="5%">ARRESTS</th>
                </tr>
                </thead>
                <?php
                while ($row = mysqli_fetch_array($result))
                {
                    ?>
                    <tr>
                        <td><?php echo $row["id"];?></td>
                        <td><?php echo $row["county"];?></td>
                        <td><?php echo $row["changaa"];?></td>
                        <td><?php echo $row["kangara"];?></td>
                        <td><?php echo $row["t_drinks"];?></td>
                        <td><?php echo $row["spirits"];?></td>
                        <td><?php echo $row["counterfeit"];?></td>
                        <td><?php echo $row["rolls"];?></td>
                        <td><?php echo $row["plants"];?></td>
                        <td><?php echo $row["brooms"];?></td>
                        <td><?php echo $row["stones"];?></td>
                        <td><?php echo $row["kgs"];?></td>
                        <td><?php echo $row["cocaine"];?></td>
                        <td><?php echo $row["fines"];?></td>
                        <td><?php echo $row["arrests"];?></td>

                    </tr>
                    <?php
                }
                ?>
            </table>
    </div>
</div>
</body>
</html>