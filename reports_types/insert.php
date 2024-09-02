<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$reports_types=$_POST['reports_types'];



if($id !=null && $reports_types !=null)
{
    $query="INSERT INTO reports_types(`id`,`reports_types`) VALUES ('$id','$reports_types')";
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