<?php
	$internshipname="";
	$err_internshipname="";
	$bio="";
	$err_bio="";
	$add="";
	$err_add="";
	$has_error = false;
	
	
	if(isset($_POST["submit"])){
		
		
		///internshipname validation
		if(empty($_POST["internshipname"])){
			$err_internshipname=" * Internship Name Required";
			$has_error = true;
		}
		else{
			$internshipname=htmlspecialchars($_POST["internshipname"]);
		}
	
	
	
	/// bio validation
		
		if(!empty($_POST["bio"]))
		{
			$bio = htmlspecialchars($_POST["bio"]);
		}
		else{
			$err_bio = "* Please fill up bio" ;
			$has_error = true;}

///Question validation
		if(!isset($_POST["add"])){
			$err_add="* At least select one option ";
			$has_error = true;
		}
		else{
			$add = $_POST["add"];
		}			
		
		
		
		if(!$has_error){
			echo $internshipname;
		}
	}
?>	
