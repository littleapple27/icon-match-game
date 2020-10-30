//Assign player name based on phoenetic alphabet
var pseudonym = ['alpha','bravo','charlie','delta','echo','foxtrot','golf','hotel','india','kilo','juliet','lima','mike','november','oscar','papa','quebec','romeo','sierra','tango','uniform','victor','whiskey','xray','yankee','zulu'];
shuffle(pseudonym);
var timestamp = $.now();
var gameData={}
console.log(pseudonym[0] + timestamp);
Cookies.set('playerId',pseudonym[0] + timestamp);

API_URL='process.php';
$(document).on('submit','form#demoForm',function(e){
	e.preventDefault();
	gameData.playerID=Cookies.get('playerId');
	gameData.age=$('form#demoForm').find('select[name="age"]').val();
	gameData.gender=$('form#demoForm').find('select[name="gender"]').val();
	gameData.country=$('form#demoForm').find('select[name="country"]').val();
	gameData.ethnicity=$('form#demoForm').find('select[name="ethnicity"]').val();
	gameData.education=$('form#demoForm').find('select[name="education"]').val();
	gameData.webUse=$('form#demoForm').find('select[name="webUse"]').val();
	gameData.playerIP=$('form#demoForm').find('input[name="playerIP"]').val();
	gameData.deviceType=window.navigator.userAgent;
	$.post(API_URL,{data:gameData},function(data){
		$('#demoModal').modal('hide');
	});
});


function saveData(){
	$.post(API_URL,{data:gameData},function(data){
		
	});
}