<?php
if(isset($_POST["getName"]))
{
    $Name=$_POST["getName"];
    $Roll=$_POST["getRoll"];
    $College=$_POST["getCollege"];
    $Admno=$_POST["getAdmno"];

    $Severname="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="4Android";
    $connection=new mysqli($Severname,$Dbusername,$Dbpassword,$Dbname);
    $Sql="INSERT INTO `hw2`(`Name`, `Roll`, `College`, `Admno`) 
    VALUES ('$Name',$Roll,'$College',$Admno)";
    $result=$connection->query($Sql);
    if($result===TRUE)
    {
        $r["status"]="success";
    }
    else
    {
        $r["status"]="failed";
    }
        echo json_encode($r);


}
?>