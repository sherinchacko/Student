<?php
    $r=array();
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="4Android";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Name`, `Roll`, `College`,`Admno` FROM `hw2`";
    $result=$connection->query($Sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $r["data"][]=$row;
        }
        echo json_encode($r);
    }
?>