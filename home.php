<?php
session_start();
include_once 'dbconnect.php';

if(!isset($_SESSION['user']))
{
	header("Location: index.php");
}
$res=mysql_query("SELECT * FROM users WHERE user_id=".$_SESSION['user']);
$userRow=mysql_fetch_array($res);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome </title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>
<body style="padding-top:.5px;">
    <div>
        <ul id="nav">
          <li style="float:right;"><a href="logout.php?logout">Sign Out</a></li>
      </ul>
     </div>

<div id="body">
    <p>Welcome to your home page </p>
</div>

</body>
</html>