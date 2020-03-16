<?php
if(isset($_POST['data']) && isset($_POST['data']['gameId'])){
	$h=fopen('data/'.$_POST['data']['playerID'].'_'.$_POST['data']['gameId'].'.json','w+');
	fwrite($h,json_encode($_POST['data'],JSON_PRETTY_PRINT));
	fclose($h);
}	