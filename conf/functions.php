<?php 
function clearitems($value){
    $value=trim($value);
    $value=stripslashes($value);
    $value=htmlspecialchars($value);
    return $value;
}



 ?>