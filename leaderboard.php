<?php
if(isset($_POST['data'])){
	$h=fopen('data/leaderboard.csv','a+');
	fwrite($h,$_POST['username'].';'.$_POST['total_moves'].';'.$_POST['elapsed_time'].';'.$_POST['score'].PHP_EOL);
	fclose($h);
}