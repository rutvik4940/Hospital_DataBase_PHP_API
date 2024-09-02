<?php
include('connection.php');
header('Content-type:application/json');

$id=$_POST['id'];
$laboratory_name=$_POST['laboratory_name'];
$report_types=$_POST['report_types'];


if($id !=null && $laboratory_name !=null && $report_types !=null)
{
    $query="UPDATE `laboratory` SET `laboratory_name`='$laboratory_name',`report_types`='$report_types' WHERE `id`='$id' ";  
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