<?php
if (isset($_GET["id"])){

$userid=$_GET["id"];
$sql="delete from users where id=$userid";
include_once("./conf/db.php");

if($con->query($sql)==true){
header("location:list-users.php");
}
else{
echo "cilada ayaa dhcady ";
}

}
?>