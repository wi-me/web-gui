<?php 
 $target = "uploaddir/"; 
 $target = $target . basename( $_FILES['uploaded']['name']) ; 
 $ok=1; 
 
 //make sure ok is 1
if ($uploaded_type =="mp3") 
{ 

	if(move_uploaded_file($_FILES['uploaded']['tmp_name'], $target)) 
	{ 
	echo "The file ". basename( $_FILES['uploadedfile']['name']). " has been uploaded"; 
	} 
	else 
	{ 
	echo "Sorry, there was a problem uploading your file. You fail."; 
	} 


} 
 
 //Uploading happens here
else 
{ 
echo "Please upload an mp3 file"
} 

 ?> 