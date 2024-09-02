<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$Datecheckup_price=$_POST['checkup_price'];



if($id !=null && $Datecheckup_price !=null)
{
    $query="INSERT INTO doctor_fees(`id`,`Datecheckup_price`) VALUES ('$id','$Datecheckup_price')";
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