//Assign player name based on phoenetic alphabet
var psuedoname = ['alpha','bravo','charlie','delta','echo','foxtrot','golf,','hotel','india','kilo','juliet','lima','mike','november','oscar','papa','quebec','romeo','sierra','tango','uniform','victor','whiskey','xray','yankee','zulu'];
var playername=[];
shuffle(psuedoname);
for(i=0;i<1;i++){
		playername.push(psuedoname[i]);	
	}
var timestamp = $.now();
console.log(playername + timestamp);

//Let's play button on-click 
$(document).on('click', '#lets-play-btn', function () {
	Cookies.set('player', playername + timestamp);
});

