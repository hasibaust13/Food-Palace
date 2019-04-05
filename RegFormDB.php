<?php

include ('ConnectDB.php');
    
$name = $_POST['NAME'];
$add = $_POST['ADDRESS'];
$email = $_POST['E_MAIL'];
$mobno = $_POST['MOBILE_NO'];
$pass = $_POST['PASSWORD'];

$sql = "INSERT INTO regtable (NAME, ADDRESS, E_MAIL, MOBILE_NO, PASSWORD) VALUES ('$name', '$add', '$email', '$mobno', '$pass')";

if (!mysql_query($sql)) {
               
               print '<script type="text/javascript">'; 
               print 'alert("#ERROR: Sorry, This E-mail has been already registerd! Try again.")'; 
               print '</script>';
               header('refresh:0; url=RegistrationForm.php');
}
 else {  
               print '<script type="text/javascript">'; 
               print 'alert("Congratulations, You have successfully registerd !")'; 
               print '</script>';
               header('refresh:0; url=RegistrationForm.php');
    
}

mysql_close();
