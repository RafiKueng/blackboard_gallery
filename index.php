<?php
$dir = "galleries/";

$galleries = array_diff(scandir($dir), array(
  '..',
  '.',
  'js',
  'css',
  'img',
  '.stfolder',
  '.directory'
  ));


include 'head.php';

echo "
<body>
  <h1>BlackBoard Gallery</h1>

  <p>
    Unofficial gallery of blackboard shots from the first year physics lecture by Prof. U. Straumann.<br>
    It could be that they are not complete, not in the right order or contain errors. Use at own risk.
  </p>
";

foreach (array_reverse($galleries) as $gal){
  echo "\n  <h2>$gal</h2>\n";
  
  foreach (array_reverse(array_diff(scandir($dir . $gal), array('..','.'))) as $entry) {
    $lnk = "./galleries.php?id=$entry&amp;path=$gal";
    echo "    <a href='$lnk'>$entry</a><br />\n";
  }
}

include 'foot.php';


?>
