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
  <center> Welcome To Search Page: </center>
  <form method="POST">
  <table class="table">
  <tr>
  <td>
  Enter Admission No:
  </td>
  <td>
  <input type="text" class="form-control" name="getAdmno">
  </td>
  </tr>
  <tr>
  <td>
  </td>
  <td>
  <button class="btn btn-primary" name="submit">
  Submit
  </button>
  </td>
  </tr>
  </table>
  </form>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
    $Admno=$_POST["getAdmno"];
    
    $Servername="localhost";
    $Dbusername="root";
    $Dbpassword="";
    $Dbname="4Android";
    $connection=new mysqli($Servername,$Dbusername,$Dbpassword,$Dbname);
    $Sql="SELECT  `Name`, `Roll`, `College` FROM `hw2` WHERE `Admno`=$Admno";
    $result=$connection->query($Sql);

    if($result->num_rows>0)
    {
        while($row=$result->fetch_assoc())
        {
            $Name=$row["Name"];
            $Roll=$row["Roll"];
            $College=$row["College"];

            echo"<table class='table'> 
            <tr> <td> Name: </td> <td> <input type='text' value='$Name' class='form-control'> </td> </tr>
            <tr> <td> Roll: </td> <td> <input type='text' value='$Roll' class='form-control'> </td> </tr>
            <tr> <td> College: </td> <td> <input type='text' value='$College' class='form-control'> </td> </tr>
            </table>";
        }
    }
}
?>