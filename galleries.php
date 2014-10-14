<html>
<head>
</head>
<body>

<h1>BlackBoard Gallery</h1>

<?php
$id = htmlspecialchars($_GET["id"]);
$directory = "galleries/$id/";

echo "<h2>$id</h2>";

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

?>



</body>