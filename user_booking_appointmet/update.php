<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$username=$_POST['username'];
$doctername=$_POST['doctername'];
$usercontact=$_POST['usercontact'];
$age=$_POST['age'];
$weight=$_POST['weight'];
$gender=$_POST['gender'];
$address=$_POST['address'];
$disease=$_POST['disease'];
$surgery=$_POST['surgery'];
$date=$_POST['date'];
$time=$_POST['time'];

if($id !=null && $username !=null && $doctername !=null && $usercontact !=null && $age !=null && $weight !=null && $gender !=null && $address !=null && $disease !=null && $surgery !=null && $date !=null && $time !=null)
{
    $query="UPDATE `user_booking_appointnent` SET `username`='$username',`doctername`='$doctername',`usercontact`='$usercontact',`age`='$age',`weight`='$weight',`gender`='$gender',`address`='$address',`disease`='$disease',`surgery`='$surgery',`date`='$date',`doctername`='$doctername',`time`='$time' WHERE `id`='$id' ";  
     $get = mysqli_query($con,$query);

    if($get)
    {
        $msg=array('status'=>"ok",'message'=>"success");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(200);
    }
    else{
        $msg=array('status'=>"failed",'message'=>"failed");
        echo json_encode($msg,JSON_PRETTY_PRINT);
        http_response_code(400);

    }

}
else{
    $msg=array('status'=>"failed",'message'=>"Invalid key");
    echo json_encode($msg,JSON_PRETTY_PRINT);
    http_response_code(400);

}

?>