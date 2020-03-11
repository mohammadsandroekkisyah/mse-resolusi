#Cara menyisipkan tag HTML dalam tag PHP dan sebaliknya<br>
<html><body>
Tulisan ini ditampilkan dengan html<br>

<?php
echo ("<font color=ff0ff><h2>Yang ini ditampilkan dengan PHP</h2></font>");
print ("<font face='comic san'><h2>Yang ini bentuk lain</h2></font>");

?>

</body></html><br>

<?php
print ("<font color=000fff><marquee behavior+alternate><h3>Tulisan ini script html dalam tag PHP</h3></marquee><font color=ff00ff><br><br>");

?>

