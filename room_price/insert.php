<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$room_price=$_POST['room_price'];



if($id !=null && $room_price !=null)
{
    $query="INSERT INTO room_price(`id`,`room_price`) VALUES ('$id','$room_price')";
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