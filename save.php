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

if($conn->query($sql)){
    echo "<script>
Swal.fire({
  title: '<strong>HTML <u>example</u></strong>',
  type: 'info',
  html:
    'You can use <b>bold text</b>, ' +
    '<a href=\"//sweetalert2.github.io\">links</a> ' +
    'and other HTML tags',
  showCloseButton: true,
  showCancelButton: true,
  focusConfirm: false,
  confirmButtonText:
    '<i class=\"fa fa-thumbs-up\"></i> Great!',
  confirmButtonAriaLabel: 'Thumbs up, great!',
  cancelButtonText:
    '<i class=\"fa fa-thumbs-down\"></i>',
  cancelButtonAriaLabel: 'Thumbs down'
})
</script>";
}else{
    echo "failed";
    echo $conn->error;
}