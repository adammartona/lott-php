<html>
<head>
<title>Az eredmény</title>
</head>
<body>
<?php
print "Kedves  <b>$_POST[felhasznalo]</b>!<P>\n\n";
print "A Tippek a következők voltak:<b>$_POST[tipp]</b></br>";
print "</br>Az eheti lottószámok a következők:";
for($i=1;$i<=5;$i++)
{
$tomb[$i]=rand(1,90);
}
for($i=1;$i<=5;$i++)
echo '</br>A(z) '.$i.'. nyerőszám a(z) <b>'.$tomb[$i].'</b><br>';
?>
</html>
