/* Method to show demographic form on page load */
$(window).on('load', function () {
   $('#demoModal').modal('show');
   loadGame();
});

/* Set value to 18 cards */
var gameCards = 18;
var gameStarted = false;

/* This is the array that contains the icon deck (32 icons) */
var deck = [{
      name: "fas fa-bolt",
      target: "flash"
   },
   {
      name: "far fa-bookmark",
      target: "bookmark"
   },
   {
      name: "fas fa-video",
      target: "video"
   },
   {
      name: "fas fa-bullhorn",
      target: "announcement"
   },
   {
      name: "fas fa-cloud-upload-alt",
      target: "cloud upload"
   },
   {
      name: "fas fa-compress",
      target: "minimize"
   },
   {
      name: "fas fa-concierge-bell",
      target: "request service"
   },
   {
      name: "far fa-credit-card",
      target: "payment"
   },
   {
      name: "fas fa-directions",
      target: "directions"
   },
   {
      name: "fas fa-donate",
      target: "donate"
   },
   {
      name: "fas fa-exchange-alt",
      target: "swap"
   },
   {
      name: "fas fa-expand",
      target: "expand"
   },
   {
      name: "fas fa-external-link-alt",
      target: "external link"
   },
   {
      name: "far fa-eye",
      target: "visibile"
   },
   {
      name: "fas fa-grip-lines",
      target: "grip lines"
   },
   {
      name: "far fa-life-ring",
      target: "help & support"
   },
   {
      name: "fas fa-location-arrow",
      target: "location arrow"
   },
   {
      name: "fas fa-lock",
      target: "security"
   },
   {
      name: "fas far fa-moon",
      target: "sleep mode"
   },
   {
      name: "fas fa-street-view",
      target: "street view"
   },
   {
      name: "fas fa-th",
      target: "table view"
   },
   {
      name: "far fa-address-book",
      target: "contacts"
   },
   {
      name: "fas fa-archive",
      target: "archive"
   },
   {
      name: "fas fa-bus",
      target: "bus route"
   },
   {
      name: "far fa-calendar-alt",
      target: "calendar"
   },
   {
      name: "far fa-clipboard",
      target: "clipboard"
   },
   {
      name: "far fa-clone",
      target: "clone"
   },
   {
      name: "fas fa-money-bill",
      target: "money"
   },
   {
      name: "fas fa-paste",
      target: "paste"
   },
   {
      name: "fas fa-power-off",
      target: "power"
   },
   {
      name: "fas fa-trash-alt",
      target: "delete"
   },
   {
      name: "fas fa-wifi",
      target: "connectivity"
   },
   {
      name: "fas fa-bars",
      target: "menu"
   },
   {
      name: "far fa-bell",
      target: "notifications"
   },
   {
      name: "fas fa-camera",
      target: "take photo"
   },
   {
      name: "fas fa-cog",
      target: "settings"
   },
   {
      name: "far fa-comment-alt",
      target: "comments"
   },
   {
      name: "fas fa-download",
      target: "file download"
   },
   {
      name: "fas fa-ellipsis-h",
      target: "more options"
   },
   {
      name: "fas fa-globe",
      target: "language settings"
   },
   {
      name: "far fa-heart",
      target: "favorite"
   },
   {
      name: "fas fa-sign-in-alt",
      target: "sign-in"
   },
   {
      name: "fas fa-map-marker-alt",
      target: "location marker"
   },
   {
      name: "fas fa-pencil-alt",
      target: "edit"
   },
   {
      name: "fas fa-search",
      target: "search"
   },
   {
      name: "fas fa-share-alt",
      target: "share"
   },
   {
      name: "fas fa-shopping-cart",
      target: "shopping cart"
   },
   {
      name: "fas fa-star",
      target: "ratings"
   },
   {
      name: "far fa-user",
      target: "user"
   }
];

/* The two decks containing a subset of X cards */
var deck1 = [];
var deck2 = [];
/* The arrays that contain the cards that have been matched so far */
var deckMatched = [];
/* Variables that contain the value of the card picked from each deck /*/
var deck1select = '';
var deck2select = '';
/* Variables that identify the 2 divs for the decks */
var deck1div = document.getElementById('deck1');
var deck2div = document.getElementById('deck2');
/* Variable for counting number of moves */
var numMoves = 0;
var totScore = 0;


/* Function to initialize a new game */
function loadGame() {
   /* Initialize the board*/
   /* Clear the content of the divs that hold the 2 decks */
   $('#deck1').html('');
   $('#deck2').html('');
   /* Clear the content of the 2 decks */
   deck1 = [];
   deck2 = [];
   /* Clear the cards that have been matched */
   deckMatched = [];
   /* Clear the variables that contain the cards that have been selected */
   deck1select = '';
   deck2select = '';
   /* Shuffle the deck with 52 cards */
   deck = shuffle(deck);
   /* Populate the 2 decks with X cards based on 18 cards level */
   for (i = 0; i < gameCards; i++) {
      deck1.push(deck[i].target)
      deck2.push(deck[i].target);
   }
   /* Shuffle the second deck */
   shuffle(deck2);
   /* Add the cards to the webpage */
   for (i = 0; i < gameCards; i++) {
      /* Create the image elements*/
      $('#deck1').append('<div class="col-md-4 col-6 p-1 d-flex justify-content-center"><div class="card card-down d-flex justify-content-center align-items-center" data-deck="1" data-target="' + deck1[i] + '" data-icon="' + deck[i].name + '"><i class="fas fa-icons"></i></div></div>');
      $('#deck2').append('<div class="col-md-4 col-6 p-1 d-flex justify-content-center"><div class="card card-down d-flex justify-content-center align-items-center" data-deck="2" data-target="' + deck2[i] + '" data-icon="' + deck[i].name + '"><i class="fas fa-icons"></i></div></div>');
   }
}

$(document).on('mouseover', '.card', function () {
   if (!gameStarted) return;
   $(this).removeClass('card-hover').addClass('card-hover');
});
$(document).on('mouseout', '.card', function () {
   if (!gameStarted) return;
   $(this).removeClass('card-hover');
});

/* When the user clicks on start game the cards flip over and the timer starts */
function startGame() {
	gameData.gameId=$.now();
	gameData.moves=[];
   gameStarted = true;
   startTimer();
   saveData();
   $('.start-btn').html('<i class="mr-2 fa fa-repeat"></i>Restart').removeClass("start-btn").addClass("restart-btn").attr("onclick", "restartGame()");
};

$(document).on('click', '.card', function(){
   if (!gameStarted || $(this).hasClass('card-matched')) return;
   var move={
	   time:$.now(),
	   elapsed:$('.score-section').find('.timer').text()
   }
   if ($(this).attr('data-deck') == 1) {
      // click on deck1 
      $('#deck1 .card').removeClass('card-click');
      deck1select = $(this).attr('data-target');
      $(this).removeClass('card-click').addClass('card-click');
	  move.deck1select=deck1select;
	  move.deck2select=deck2select;
      if (deck2select.length > 0) {
         checkMatch();
      }
   } else {
      // click on deck2 
      $('#deck2 .card').removeClass('card-click');
      deck2select = $(this).attr('data-target');
	  move.deck1select=deck1select;
	  move.deck2select=deck2select;
      $(this).removeClass('card-click').addClass('card-click');
      if (deck1select.length > 0) {
         checkMatch();
      }
   }
   move.matched=deckMatched.length;
   move.moves=numMoves;
   move.score=totScore;
   gameData.moves.push(move);
   saveData();
   console.log($(this));
   return;
});

/*** Game Start Button On Click ***/
$(document).on('click', '.start-btn', function (){
   console.log('check for new player');
   startGame();
   $('.card').each(function () {
      if ($(this).attr('data-deck') == 1) $(this).html('<i class="' + $(this).attr('data-icon') + '"></i>');
      else $(this).text($(this).attr('data-target'));
   });
   $('.card-down').addClass('card-up').removeClass('.card-down');
   $('.card-down').addClass('card-up').removeClass('.card-down');
});

/*** Play Again Button On Click ***/
$(document).on('click', '.playAgain-btn', function () {
   $('#endGameModal').modal('hide');
   restartGame();
});

$(document).on('click', '.newPlayer-btn', function () {
   $('#endGameModal').modal('hide');
   newPlayer();
});

function checkMatch() {
   if (deck2select == deck1select) {
      /* We have a match*/
      /* Add the cards to the matched array */
      deckMatched.push(deck2select);
      $('#deck1 .card[data-target="' + deck1select + '"]').removeClass('card-click').addClass('card-matched');
      $('#deck2 .card[data-target="' + deck1select + '"]').removeClass('card-click').addClass('card-matched');
      console.log(deckMatched + "  winner winner chicken dinner");
      /* Add +1 to number of moves */
      numMoves = numMoves + 1;
      $('.moves').text(numMoves);
      /* Add +1000 to total score */
      totScore = totScore + 1000;
      $('.score').text(totScore);
      /* Clear the select cards */
      deck1select = '';
      deck2select = '';
      checkEndgame();
   } else {
      numMoves = numMoves + 1;
      /* Add +1 to number of moves */
      $('.moves').text(numMoves);
      /* Add +1000 to total score */
      totScore = totScore - 250;
      $('.score').text(totScore);
      /* Clear the select cards */
      deck1select = '';
      deck2select = '';
      $('.card').removeClass('card-click');
      console.log('deck2div - not matched');
   }
}

/* Checks if the user won the game */
function checkEndgame() {
   setTimeout(function () {
      /*Display congratulations message */
      if (deck1.length == deckMatched.length) {
		  
		  /*
		  POST username,total moves, elapsed time to a leaderboard.php
		  
		  
		  */
		  $.post('keaderboard.php',{data:gameData /*change this to relevant data about the game, i.e., player id, total points, elapsed time, moves*/},function(data){
		
	});
         $('#endGameModal').modal('show');
      }
   }, 1000);

   /* Moves first instance of clone() to model-element */
   if (deck1.length == deckMatched.length) {
      stopTimer();
      var scoreModalElem = $('.modal-element').eq(2);
      var movesModalElem = $('.modal-element').eq(1);
      var timerModalElem = $('.modal-element').eq(0);
      $('.score:first').clone().removeClass('score').addClass('cloned').appendTo(scoreModalElem);
      $('.moves:first').clone().removeClass('moves').addClass('cloned').appendTo(movesModalElem);
      $('.timer:first').clone().removeClass('timer').addClass('cloned').appendTo(timerModalElem);
   }
}

function restartGame() {
   loadGame();
   gameStarted = true;
   /* Reset score section variables to 0 */
   seconds = 0;
   minutes = 0;
   hours = 0;
   totScore = 0;
   numMoves = 0;
   $('.score-section').find('.timer').html('00:00:00');
   $('.score-section').find('.score').html('00000');
   $('.score-section').find('.moves').html('0');
	gameData.gameId=$.now();
	gameData.moves=[];
	saveData();
   /* Remove the cloned score, timer, and moves span to prevent duplicates */
   $('.cloned').remove();
   /* setTimeOut to show card down, then flip to show card up */
   setTimeout(function () {
      /* Quick TimeOut to show card down, then flip to card up */
      $('.card').each(function () {
         if ($(this).attr('data-deck') == 1) $(this).html('<i class="' + $(this).attr('data-icon') + '"></i>');
         else $(this).text($(this).attr('data-target'));
      });
      $('.card-down').addClass('card-up').removeClass('.card-down');
      $('.card-down').addClass('card-up').removeClass('.card-down');
   }, 1000);
   /* Allows for the time to start correctly */
   setTimeout(function () {
      startTime()
   }, 1000);
};

function newPlayer() {
   window.location.href="index.html";
}


/* Function to start timer */
var clearTime;
var seconds = 0,
   minutes = 0,
   hours = 0;
var clearState;
var secs, mins, gethours;
//Timer start function  
function startTimer() {
   /* check if seconds is equal to 60 and add a +1 to minutes, and set seconds to 0 */
   if (seconds === 60) {
      seconds = 0;
      minutes = minutes + 1;
   }
   /* you use the javascript tenary operator to format how the minutes should look and add 0 to minutes if less than 10 */
   mins = (minutes < 10) ? ('0' + minutes + ':') : (minutes + ':');
   /* check if minutes is equal to 60 and add a +1 to hours set minutes to 0 */
   if (minutes === 60) {
      minutes = 0;
      hours = hours + 1;
   }
   /* you use the javascript tenary operator to format how the hours should look and add 0 to hours if less than 10 */
   gethours = (hours < 10) ? ('0' + hours + ':') : (hours + ':');
   secs = (seconds < 10) ? ('0' + seconds) : (seconds);
   // display the stopwatch 
   var time = gethours + mins + secs;
   $('.score-section').find('.timer').html(time);
   /* call the seconds counter after displaying the stop watch and increment seconds by +1 to keep it counting */
   seconds++;
   /* call the setTimeout( ) to keep the timer alive ! */
   clearTime = setTimeout("startTimer()", 1000);
}
// Function used to start the timer
function startTime() {
   /* check if seconds, minutes, and hours are equal to zero and start the timer*/
   if (seconds == 0 && minutes == 0 && hours == 0) {
      startTimer();
   }
}

/* Function to stop timer */
function stopTimer() {
   /* check if seconds, minutes and hours are not equal to 0 */
   if (seconds !== 0 || minutes !== 0 || hours !== 0) {
      /* display the full time before reseting the stop watch */
      var time = gethours + mins + secs;
      $('.score-section').find('.timer').html(time);
      /* clear the stop watch using the setTimeout( ) return value 'clearTime' as ID */
      clearTimeout(clearTime);
   }
}
//Timer code end


/* Exit Message */
/* $(window).bind('beforeunload', function () {
   return 'Are you sure you want to leave?';
});
 */

//TO DO 