<?php
if(isset($_POST["export"]))
{
    $connect = mysqli_connect("localhost", "root", "root", "county");
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=data.csv');
    $output=fopen("php://output", "w");
    fputcsv($output,array('id', 'county', 'changaa', 'kangara', 't_drinks', 'spirits' , 'counterfeit' , 'rolls' , 'plants' , 'brooms' , 'stones' , 'kgs' , 'cocaine' , 'fines' , 'arrests'));
    $query = "SELECT * FROM reports ORDER BY id desc";
    $result =mysqli_query($connect, $query);

    while ($row = mysqli_fetch_assoc($result))
    {
        fputcsv($output, $row);
    }
    fclose($output);
}

?>
