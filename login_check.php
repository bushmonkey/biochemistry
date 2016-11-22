<?php

	@session_start();

	include('SQL/db_connect.php');	

	$username = $_POST['username'];
	$password = $_POST['password'];

	//$previous_page = substr($_SERVER['HTTP_REFERER'],strrpos($_SERVER['HTTP_REFERER'], "/")+1);	
	$previous_page = "index.php";
	
	//$getUsername_query = "SELECT user.uID, user.sID, user.uEmail, user.rID FROM user WHERE user.uEmail='".$username."' AND user.uPassword='".$password."' LIMIT 0,1;";
	////$getUsername_result = mysql_query($getUsername_query);
	//if ((!$getUsername_result)||(mysql_num_rows($getUsername_result) <= 0))
	//{
	//	print("<SCRIPT LANGUAGE='JavaScript'>window.location='".$previous_page."?login=incorrect';</script>");
    //}
	//else
//	{
//		if (mysql_num_rows($getUsername_result)>0)
//		{
//			$person = mysql_fetch_array($getUsername_result);
//			$_SESSION['userType'] = $person['rID'];
//			$_SESSION['supplierID'] = $person['sID'];
//			$_SESSION['username'] = $username;
//			$_SESSION['userID'] = $person['uID'];
			//print("<SCRIPT LANGUAGE='JavaScript'>window.location='index.php?page=1&disp=50';</script>");
//		}
//		else
//		{
//			print("<SCRIPT LANGUAGE='JavaScript'>window.location='".$previous_page."?login=incorrect';</script>");
//		}
 //   }
?>