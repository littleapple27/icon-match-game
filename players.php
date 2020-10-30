<?php
$folder='data';
$games=scandir($folder);
$h=fopen('spreadsheets/players.csv','w+');
fwrite($h,implode("\t",['playerID','gameID','Total moves','Age','Gender','Education','Web use','Device Type','Elapsed','Elapsed (seconds)','Moves']).PHP_EOL);
foreach($games as $file){
	if(preg_match('/^\.+$/',$file)) continue;
	$game=json_decode(file_get_contents($folder.'/'.$file),true);/*
	echo '<pre>';
	print_r($game);
	die();*/
	$game_data=[
		$game['playerID'],
		$game['age'],
		$game['gender'],
		$game['education'],
		'\''.$game['webUse'],
		preg_replace(['/;/','/[\t+]/'],['|',' '],$game['deviceType'])
	];
	if(isset($game['moves'])){
		$game_data[]=$game['moves'][count($game['moves'])-1]['elapsed'];
		$game_data[]=convertToSeconds($game['moves'][count($game['moves'])-1]['elapsed']);
		$game_data[]=$game['moves'][count($game['moves'])-1]['moves'];
	}
	fwrite($h,implode("\t",$game_data).PHP_EOL);
	//break;
}
fclose($h);

function convertToSeconds($time){
	$time=explode('.',$time);
	$time=explode(':',$time[0]);
	return ($time[0]*60)+$time[1];
}