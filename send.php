<?php
$fullname=$_POST["fname"];
$contactnumber=$_POST["cno"];
$emailid=$_POST["email"];
$guardianname=$_POST["gname"];
$guardiancontactnumber=$_POST["gcno"];
$dateofbirth=$_POST["dob"];
$bloodgroup=$_POST["grp"];

$to="dspredy@gmail.com";
$subject="donation form information";
$txt="name".$fullname."\n cno".$contactnumber."\n email".$emailid."\n gname".$guardianname."\n gcno".$guardiancontactnumber."\n dob".$dateofbirth."\n bloodgroup".$bloodgroup;
$header="Form : noreply@yoursite.com";

$retval=mail($to,$subject,$txt,$header);

if($email != NULL)
{
    $retval;
}
header("Location:index.html");
?>