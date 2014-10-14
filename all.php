 
<html>
<head>
</head>
<body>

<h1>BlackBoard Gallery</h1>
<h2>PHY111</h2>

<?php
$dir = "galleries/";

$galleries = array_diff(scandir($dir), array('..', '.'));

foreach ($galleries as $gal){
  $lnk = "./galleries.php?id=$gal";
  #echo "<a href='$lnk'><p>$gal</p></a>";
  
  
  $id = $gal;
  $directory = "galleries/$id/";

  echo "<h3>$id</h3>";

  $fn = $directory . "comments.txt";

  if (file_exists($fn)) {
    echo "<b>comments:</b> ";
    echo file_get_contents($fn);
  }

  #echo $id ."\n";
  #echo $directory ."\n";
  
  $images = glob("" . $directory . "*.jpg");
  
  $imgs = '';

  #var_dump($images);

  foreach($images as $image){ $imgs[] = "$image"; }
  
  foreach ($imgs as $img) {
  echo "<p><img src='$img' height='400px'/></p>";
  }
  
  
  
}
?>



</body>