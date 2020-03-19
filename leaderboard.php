<?php
if(isset($_POST['data'])){
	$h=fopen('data/leaderboard.csv','a+');
	fwrite($h,$_POST['data']['playerID'].';'.$_POST['data']['totalMoves'].';'.$_POST['data']['totalScore'].';'.$_POST['data']['elapsedTime'].PHP_EOL);
	fclose($h);
}