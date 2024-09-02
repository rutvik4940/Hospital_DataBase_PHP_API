<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];


if($id !=null && $name !=null && $address !=null)
{
    $query="UPDATE `hospital_details` SET `name`='$name',`address`='$address' WHERE `id`='$id' ";  
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