
<?php
   $connect = mysqli_connect("localhost", "root",
   "", "county");
   $query = "SELECT * FROM reports ORDER BY id desc";
   $result = mysqli_query($connect,$query);
?>
<!DOCTYPE html>
   <html>
       <head>
           <script src="vendor/jquery/jquery.min.js" type="6b6825c0d26fda4be87006a1-text/javascript"></script>
           <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
       </head>
       <body>
           <br/><br/>
           <br/><br/>
           <div class ="container" style="width:900px;">
           <h1 align="center">Export Mysql Table to csv file in php</h1>




       </body>
   </html>


	
	
	
	
 
if(isset($_GET['export'])){
if($_GET['export'] == 'true'){
$query = mysqli_query($conn, 'select * from reports'); // Get data from Database from demo table
 
 
    $delimiter = ",";
    $filename = "significant_" . date('Ymd') . ".csv"; // Create file name
     
    //create a file pointer
    $f = fopen('php://memory', 'w'); 
     
    //set column headers
    $fields = array('id', 'county', 'changaa', 'kangara', 't_drinks', 'spirits' , 'counterfeit' , 'rolls' , 'plants' , 'brooms' , 'stones' , 'kgs' , 'cocaine' , 'fines' , 'arrests');
    fputcsv($f, $fields, $delimiter);
     
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        
        $lineData = array($row['id'], $row['county'], $row['changaa'], $row['kangara'], $row['t_drinks'], $row['spirits'], $row['counterfeit'], $row['rolls'], $row['plants'], $row['brooms'], $row['stones'], $row['kgs'], $row['cocaine'], $row['fines'], $row['arrests']);
        fputcsv($f, $lineData, $delimiter);
    }
     
    //move back to beginning of file
    fseek($f, 0);
     
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
     
    //output all remaining data on a file pointer
    fpassthru($f);
 
 }
}



?>