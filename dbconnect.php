<?php
$con = mysql_connect("localhost","root","maverick","user");
// Make sure we connected succesfully
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
?>