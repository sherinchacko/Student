<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
     <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="student.php">Details Entry</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="search.php">Search</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="update.php">Update</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="delete.php">Delete</a>
    </li>
  </ul>
  </nav>
  <form method="POST">
  <table class="table">
   <tr>
   <td>
   Name:
   </td>
   <td>
   <input type="text" class="form-control" name="getName">
   </td>
   </tr>
   <tr>
   <td>
   Roll:
   </td>
   <td>
   <input type="number" class="form-control" name="getRoll">
   </td>
   </tr>
   <tr>
   <td>
   College:
   </td>
   <td>
   <input type="text" class="form-control" name="getCollege">
   </td>
   </tr>
   <tr>
   <td>
   Addmission Number:
   </td>
   <td>
   <input type="number" class="form-control" name="getAdmno">
   </td>
   </tr>
   <tr>
   <td>

   </td>
   <td>
   <Button class="btn btn-success" name="submit">
   Submit
   </Button>
   </td>
   </tr>
 </table>
 </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
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
        echo"success";
    }
    else{
        echo"failed";
    }


}
?>