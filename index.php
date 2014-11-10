<?php
$dir = "galleries/";

$galleries = array_diff(scandir($dir), array(
  '..',
  '.',
  'js',
  'css',
  'img'
  '.stfolder'
  ));


include 'head.php';

echo "
<body>
<h1>BlackBoard Gallery</h1>
<h2>PHY111</h2>
<p>click <a href='all.php'>here</a> to see all on one page</p>
";

foreach ($galleries as $gal){
  $lnk = "./galleries.php?id=$gal";
  echo "<a href='$lnk'>$gal</a><br />";
}

include 'foot.php';


?>
