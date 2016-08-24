<?php require_once('sample_object.php'); 
$new_foo=new foo;
$result=$new_foo->add(5,6);
if ( $result == 11)
 {
    echo "OK";
 }
else
    echo "Failed";
?>
