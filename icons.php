<?php
$folder='data';
$games=scandir($folder);
$h=fopen('spreadsheets/icons.csv','w+');
fwrite($h,implode("\t",['HEADER','player','age','gender','education','web','device','HEADER','gameid','time','seconds','moves','HEADER','order','first','deck1','deck2','match','selecttime','matchtime']).PHP_EOL);
foreach($games as $file){
	if(preg_match('/^\.+$/',$file)) continue;
	$game=json_decode(file_get_contents($folder.'/'.$file),true);
	if(!isset($game['moves'])) continue;
	$icon=[];
	$time=$game['gameId'];
	$order=0;
	$completed=true;
	foreach($game['moves'] as $move){
		if(!isset($move['deck1select']{0}) || !isset($move['deck2select']{0})){
			$order++;
			if(!$completed){
				$icon['deck1']=$move['deck1select'];
				$icon['deck2']=$move['deck2select'];
				$icon['match']=$move['deck1select']==$move['deck2select'] ? 'match' : 'error';
				$icon['selectime']=$selectime;
				$icon['elapsed']=$move['time']-$time;
				fwrite($h,implode("\t",$icon).PHP_EOL);
			}
			$completed=false;
			$icon=[	
				'PLAYER'=>'PLAYER:',
				'player'=>$game['playerID'],
				'age'=>$game['age'],
				'gender'=>$game['gender'],
				'education'=>$game['education'],
				'web'=>'\''.$game['webUse'],
				'device'=>preg_replace(['/;/','/[\t+]/'],['|',' '],$game['deviceType']),
				'GAME'=>'GAME:',
				'gameid'=>'\''.$game['gameId'],
				'time'=>$game['moves'][count($game['moves'])-1]['elapsed'],
				'seconds'=>convertToSeconds($game['moves'][count($game['moves'])-1]['elapsed']),
				'moves'=>$game['moves'][count($game['moves'])-1]['moves'],
				'ICON'=>'ICON:',
			];
			// first icon selected
			$icon['order']=$order;
			$icon['first']=isset($move['deck1select']{0}) ? 'icon' : 'word';
			$selectime=$move['time']-$time;
			$time=$move['time'];
		}else{
			$icon['deck1']=$move['deck1select'];
			$icon['deck2']=$move['deck2select'];
			$icon['match']=$move['deck1select']==$move['deck2select'] ? 'match' : 'error';
			$icon['selectime']=$selectime;
			$icon['elapsed']=$move['time']-$time;
			$time=$move['time'];
			fwrite($h,implode("\t",$icon).PHP_EOL);
			$completed=true;
		}
	}
}
fclose($h);

function convertToSeconds($time){
	$time=explode('.',$time);
	$time=explode(':',$time[0]);
	return ($time[0]*60)+$time[1];
}