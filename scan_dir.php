<?php 

$directory = "data/";

$players = array_slice(scandir($directory), 3);
$json=[];
$file_results = "file_results.csv";
foreach ($players as $player){
	$string = file_get_contents($directory.$player);
	$json[] = json_decode($string, true);
}
$fp = fopen($file_results, 'a');

//Loop through the array & flatten: by using this simple function when creating the CSV from an array it will  “flatten” the array out, meaning it is no longer multidimensional and all elements will be outputted onto one line.

foreach($json as $row){
	$result=[];
	array_walk_recursive($row, function($item) use (&$result) {
    		$result[] = $item;
    	});
    //Write the rows to the CSV file.
    fputcsv($fp, $result);
}
fclose($fp); 

?>

<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="cleartype" content="on">
	<meta name="apple-mobile-web-app-title" content="Icon &#8594; Word Match Game">
	<meta name="robots" content="NOYDIR,NOODP" />
	<meta name="description" content="Icon &#8594; Word Match Game" />
	<meta name="keywords" content="icon ambiguity, UI icons, font awesome, icon research" />
	<meta property="og:site_name" content="Icon &#8594; Word Match Game" />
	<meta property="og:title" content="Icon &#8594; Word Match Game" />
	<meta property="og:description" content="A Graduate Research Project at FHSU" />
	<meta property="og:type" content="game" />
	<meta property="og:image" content="https://littleapple27.dev/icon-match-game/img/teaser-img.jpg" />
	<meta property="og:image:type" content="img/teaser-img.jpg" />
	<meta property="og:image:alt" content="Icon &#8594; Word Match Game" />
	<meta property="og:image:width" content="1156" />
	<meta property="og:image:height" content="618" />
	<meta property="og:url" content="https://littleapple27.dev/icon-match-game">
	<link rel='icon' href='img/favicon.ico?' type="image/x-icon" />

	<script src="https://kit.fontawesome.com/bf44c917aa.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.min.css">
	<title>The Unambiguous Icon Project: A Case for Universal Icon Meanings</title>

</head>

<body>
	<pre>
    <?php
        print_r($json);

    ?>
</pre>

</body>
</html>
