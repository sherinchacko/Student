<?php
if(isset($_POST["getAdmno"]))
{ 
  $Sadmno=$_POST["getAdmno"];
  $Sname=$_POST["getName"];
  $Sroll=$_POST["getRoll"];
  $Scollege=$_POST["getCollege"];
  
  $Servername="localhost";
  $Dbusername="root";
  $Dbpassword="";
  $Dbname="4android";
  $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
  $Sql="UPDATE `hw2` SET `Name`='$Sname',`Roll`=$Sroll,`College`='$Scollege', 
  WHERE `Admno`=$Sadmno";
  $result=$connection->query($Sql);
  if($result===TRUE)
  {
    $r["status"]="success";
  }
  else
  {
    $r["status"]="error";
  }
  echo json_encode($r);
}
?>