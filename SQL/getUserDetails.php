<?php

// GET LIST OF USERS
function getUserList()
{
	$sql_query =   "SELECT *
					FROM `user`
					ORDER BY uEmail asc;";
	$result = mysql_query($sql_query);
	
	if (!$result)
	{
		print("MySQL ERROR: Query error when extracting logged in username.");
	}
	else
	{
		$num_results = mysql_num_rows($result);
		if ($num_results>0)
		{
			//$leadDetailsArray = mysql_fetch_array($result);	
							
			//return $leadDetailsArray;
			return $result;
		}
	}
}


// GET USER DETAILS FOR UPDATING
function getUserDetails( $userID )
{
	$sql_query =   "SELECT *
					FROM `user` 
					WHERE `user`.uID = '".$userID."';";
	$result = mysql_query($sql_query);
	
	if (!$result)
	{
		print("MySQL ERROR: Query error when extracting logged in username.");
	}
	else
	{
		$num_results = mysql_num_rows($result);
		if ($num_results>0)
		{
			//$leadDetailsArray = mysql_fetch_array($result);	
							
			//return $leadDetailsArray;
			return $result;
		}
	}
}


// GET USER PASSWORD DETAILS
function getUserDetailsFromEmail( $email )
{
	$sql_query =   "SELECT uUsername, uPassword, uEmail
					FROM `user` 
					WHERE `user`.uEmail = '".$email."'
					LIMIT 0,1;";
	$result = mysql_query($sql_query);
	
	if (!$result)
	{
		print("MySQL ERROR: Query error when extracting logged in username.");
	}
	else
	{
		$num_results = mysql_num_rows($result);
		if ($num_results>0)
		{
			//$leadDetailsArray = mysql_fetch_array($result);	
							
			//return $leadDetailsArray;
			return $result;
		}
	}
}

?>