<?php
$csv=file_get_contents('data/leaderboard.csv');
$csv=explode(PHP_EOL,$csv);
$json=[];
for($i=0;$i<count($csv)-1;$i++){
	$csv[$i]=explode(';',$csv[$i]);
	if(!isset($json[$csv[$i][2]])) $json[$csv[$i][2]]=[];
	$json[$csv[$i][2]][]=$csv[$i]; 
}
arsort($json);
header('Content-Type: application/json');
die(json_encode($json,JSON_PRETTY_PRINT));
