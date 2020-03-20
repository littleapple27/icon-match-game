<?php
$csv=file_get_contents('data/leaderboard.csv');
$csv=explode(PHP_EOL,$csv);
$json=[];
for($i=0;$i<count($csv)-1;$i++){
	$csv[$i]=explode(';',$csv[$i]);
	if(!isset($json[$csv[$i][2]])) $json[$csv[$i][2]]=[];
	$json[$csv[$i][2]][]=$csv[$i]; // change 2 to whatever the index of the total score is.
}
arsort($json);
header('Content-Type: application/json');
die(json_encode($json,JSON_PRETTY_PRINT));

/* 
if(!isset($json[$csv[$i][2]])) $json[$csv[$i][2]]=[];
if(!isset($json[$csv[$i][2]][$csv[$i][3]])) $json[$csv[$i][2]][$csv[$i][3]]=[];
if(!isset($json[$csv[$i][2]][$csv[$i][3]][$csv[$i][4]])) $json[$csv[$i][2]][$csv[$i][3]][$csv[$i][4]]=[];
$json[$csv[$i][2]][$csv[$i][3]][$csv[$i][4]][]=$csv[$i];	// the element is an array nowif(!isset($json[$csv[$i][2]])) $json[$csv[$i][2]]=[];
if(!isset($json[$csv[$i][2]][$csv[$i][3]])) $json[$csv[$i][2]][$csv[$i][3]]=[];
if(!isset($json[$csv[$i][2]][$csv[$i][3]][$csv[$i][4]])) $json[$csv[$i][2]][$csv[$i][3]][$csv[$i][4]]=[];
$json[$csv[$i][2]][$csv[$i][3]][$csv[$i][4]][]=$csv[$i]; */