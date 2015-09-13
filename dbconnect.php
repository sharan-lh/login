/*Here change the username and password to your database credentials*/
<?php
$con = mysql_connect("localhost","username","password");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
?>
