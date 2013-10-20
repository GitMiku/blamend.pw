<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
$url = "http://ltfu.pw/shorten.php?longurl=" . $_POST['url'];
echo file_get_contents($url);
}
?>
