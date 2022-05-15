<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Query";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("Connection failed:".mysqli_connect_error());
}
if(isset($_POST['submit']))
{
    mysqli_query($conn,"insert into details values ('$_POST[name]','$_POST[email]','$_POST[number]','$_POST[subject]','$_POST[message]')");
    echo"Message Sent Successfully";
}
?>