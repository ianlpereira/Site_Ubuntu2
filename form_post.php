<?php
$link = mysqli_connect("localhost","root","")  or die("failed to connect to server !!");
mysqli_select_db($link,"ubuntu");
mysqli_set_charset($link, "utf8");
if(isset($_REQUEST['submit']))
{
$errorMessage = "";
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$gender=$_POST['gender'];
$dob=$_POST['dob'];
$rua=$_POST['rua'];
$cidade=$_POST['cidade'];
$cep=$_POST['cep'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$bairro=$_POST['bairro'];
 
// Validation will be added here
 
if ($errorMessage != "" ) {
echo "<p class='message'>" .$errorMessage. "</p>" ;
}
else{
//Inserting record in table using INSERT query
$insqDbtb="INSERT INTO `ubuntu`.`members`
(`firstname`, `lastname`, `gender`, `dob`, `rua`,
`cidade`, `cep`, `phone`, `email`, `bairro`) VALUES ('$firstname', '$lastname', 
'$gender', '$dob', '$rua', '$cidade', '$cep', '$phone', '$email','$bairro')";
mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
}
}