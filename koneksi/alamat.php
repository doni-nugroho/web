<?php
	require_once("../koneksi.php");
    if (!isset($_SESSION)) {
        session_start();
    }
     
   
		
	if (isset($_POST['province'])) {                       
		$_SESSION['province'] = $_POST['province'];                          
	}
	
	if (isset($_POST['city'])) {                       
		$_SESSION['city'] = $_POST['city'];                          
	}
	
	if (isset($_POST['cost'])) {                       
		$_SESSION['cost'] = $_POST['cost'];                          
	} 		
         
       
    
?>