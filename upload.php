<?php 
 $target = "uploaddir/"; 
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 
 //make sure ok is 1
 if ($ok==0) 
 { 
 Echo "Sorry your file was not uploaded"; 
 } 
 
 //Uploading happens here
	 else 
	 { 
		 if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
		 { 
		 echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded"; 
		 sleep(5);
		 header('Location: 10.73.172.70/default.html') ;
		 } 
		 else 
		 { 
		 echo "Sorry, there was a problem uploading your file. You fail."; 
		 } 
	 } 
 ?> 
