<?php

$id = htmlspecialchars($_GET["id"]);
$path = htmlspecialchars($_GET["path"]);
$directory = "galleries/$path/$id/";

include 'head.php';

echo "
<body>

  <h1>BlackBoard Gallery</h1>
  <h2>$path</h2>
  <h3>$id</h3>
";

$fn = $directory . "comments.txt";

if (file_exists($fn)) {
  echo "
  <p>
    <b>comments:</b>
    <br>
";
  echo "    " . file_get_contents($fn);
  echo "  </p>";
}

#echo $id ."\n";
#echo $directory ."\n";
 
$images = glob("" . $directory . "*.jpg");
 
$imgs = '';

#var_dump($images);

foreach($images as $image){ $imgs[] = "$image"; }
 
foreach ($imgs as $img) {
  echo "
  <p>
    <a href='$img'  data-lightbox='img_cat' data-title='$img'>
      <img src='$img' height='400' alt='An blackboard image from lecutre'/>
    </a>
  </p>";
}

echo '

  <script src="js/jquery-1.11.0.min.js"></script>
  <script src="js/lightbox.js"></script>
';


include 'foot.php';

?>
