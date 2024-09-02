<?php
include('connection.php');
header('Content-type:application/json');

$query="SELECT * FROM user_verify";
$res=mysqli_query($con,$query);
$arr=array();

while($data=mysqli_fetch_assoc($res))
{
    $arr[]=$data;
}
$json=json_encode($arr,JSON_PRETTY_PRINT);
 echo $json;
?>