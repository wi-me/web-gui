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
		 sleep(15);
		 redirect("default.html");
		 //header('Location: www.google.com');
		 } 
		 else 
		 { 
		 echo "Sorry, there was a problem uploading your file. You fail."; 
		 } 
	 } 

function redirect($url)
{
    if (!headers_sent())
    {
        header('Location: '.$url);
        exit;
    }
    else
    {
        echo '<script type="text/javascript">';
        echo 'window.location.href="'.$url.'";';
        echo '</script>';
        echo '<noscript>';
        echo '<meta http-equiv="refresh" content="0;url='.$url.'" />';
        echo '</noscript>'; 
        exit;
    }
}


 ?> 
