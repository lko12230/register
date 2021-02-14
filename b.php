<?php
  include('config.php');  
  if(isset($_POST['submit']))
  {
    $username = $_POST['username'];  
    $email = $_POST['email'];  
    $password = $_POST['password'];
    $id = $_POST['id']; 
    $phone = $_POST['phone'];  
    $dob = $_POST['dob'];  
$sql = "insert into admin (USERNAME , EMAIL ,PASSWORD, ID_NUMBER, PHONE_NO , DOB ) VALUES ('$username',' $email','$password',$id, $phone , '$dob')";
$result=mysqli_query($conn ,$sql);
if($result)
   {
    echo "<h1><center> alert('Login successful') </center></h1>";  
    header("Location: https://www.irctc.co.in/nget/train-search");
}  
else
{  
    echo "<h1> alert('Login failed. Invalid username or password.')</h1>";  
    header("Location: http://localhost/register/");
} 
  }     
if(isset($_POST['forgot']))
{
header("Location: http://localhost/fogotpassword/");
}
if(isset($_POST['register']))
{
header("Location: http://localhost/register/");
}
if(isset($_POST['contact']))
{
header("Location: http://localhost/support/");
}
?>
