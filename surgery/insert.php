<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$surgeryname=$_POST['surgeryname'];
$doctor_specialist=$_POST['doctor_specialist'];




if($id !=null && $surgeryname !=null && $doctor_specialist !=null)
{
    $query="INSERT INTO surgery(`id`,`surgeryname`,`doctor_specialist`) VALUES ('$id','$surgeryname','$doctor_specialist')";
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