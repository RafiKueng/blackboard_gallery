<html>
<head>
</head>
<body>

<h1>BlackBoard Gallery</h1>
<h2>PHY111</h2>
<p>click <a href='all.php'>here</a> to see all on one page</p>

<?php
$dir = "galleries/";

$galleries = array_diff(scandir($dir), array('..', '.'));

foreach ($galleries as $gal){
  $lnk = "./galleries.php?id=$gal";
  echo "<a href='$lnk'><p>$gal</p></a>";
}
?>



</body>