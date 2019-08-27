
<?php
   $connect = mysqli_connect("localhost", "root",
   "root", "county");
   $query = "SELECT * FROM reports ORDER BY id desc";
   $result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
   <html>
       <head>

           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
       </head>
       <body>
           <br/><br/>

           <div class ="container" style="width:900px;">
           <h1 align="center">Export Mysql Table to csv file in php</h1>
               <h2 align="center">Drug Report</h2>
               <br/></br>
                  <form action="export.php" method="post">
                      <input type="submit" name="export" value="CSV Export"  class="btn btn-success"/>
                  </form>
                <br/><br/>

               <div class="table-responsive-lg" id="drug_report">
                   <table class="table table-bordered">
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