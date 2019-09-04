<?php
/**
 * Created by PhpStorm.
 * User: Btech
 * Date: 8/25/2019
 * Time: 7:26 PM
 */
include 'conn.php';

extract($_POST);

$sql = "INSERT INTO reports(county,changaa,kangara,t_drinks,spirits,counterfeit,rolls,plants,brooms,stones,kgs,cocaine,fines,arrests) 
VALUES ('$county',$changaa,$kangara,$t_drinks,$spirits,$counterfeit,$rolls,$plants,$brooms,$stones,$kgs,$cocaine,$fines,$arrests)";

if($link->query($sql)){

    echo "Success";
}else{
    echo "failed";
    echo $link->error;
}