<?php
$csv=file_get_contents('leaderboard.csv');
$csv=explode(PHP_EOL,$csv);
$json=[];
for($i=0;$i<count($csv)-1;$i++){
	$csv[$i]=explode(';',$csv[$i]);
	$json[$csv[$i][2]]=$csv[$i]; // change 2 to whatever the index of the total score is.
}
arsort($json);
header('Content-Type: application/json');
die(json_encode($json,JSON_PRETTY_PRINT));