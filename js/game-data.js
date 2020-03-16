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
	Cookies.set('playerId', playername + timestamp);
});

	API_URL='index.php';
	$(document).on('submit','form#demoForm',function(e){
		e.preventDefault();
		$.post(API_URL,{
			playerId:Cookies.get('playerId'),
			age:$('form#demoForm').find('select[name="gender"]').val(),
			ethnicity:$('form#demoForm').find('select[name="age"]').val(),
			gender:$('form#demoForm').find('select[name="webUse"]').val(),
			hours_pc:$('form#demoForm').find('select[name="education"]').val()
		},function(data){
			$('#demoModal').modal('hide');
		});
	});