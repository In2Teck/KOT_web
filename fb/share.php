<?php
$id = "246673725424518";
$key = "3d077c192bdaa0e0a077c9065bce761e";

require("facebook.php");

$facebook = new Facebook($id, $key);

$user = $facebook->require_login();

$message = "testing the message";

$has_permission = $facebook->api_client->users_hasAppPermission("publish_stream");

if($has_permission)
{
	$facebook->api_client->stream_publish($message);
}
else {
	$address = "http://alfonso.local";
header("location:$address"); 
}
?>

