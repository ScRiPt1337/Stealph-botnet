<?php  
header ('Location:index.php');
 error_reporting(E_ALL); 
ini_set('display_errors',1); 
echo '<pre>'; 
print_r($_FILES); 
echo '</pre>'; 

 $target = "upload/";  
 $target = $target . basename( $_FILES['uploaded']['name']) ;  
 $ok=1;  
 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target))  
 { 
 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded"; 
 }  
 else { 
 echo "Sorry, there was a problem uploading your file."; 
 } 
 ?>