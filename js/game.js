/* Method to show demographic form on page load */
$(window).on('load', function () {
   //$('#myModal').modal('show');
   loadGame();
   $('.card-back').hover(
				
               function () {
                  $(this).css({"border":"3px solid #7D07F2", "background-color":" rgba(125,7,242, 0.2)"});
               }, 
				
               function () {
                  $(this).css({"border":"none", "background-color":"#f2f2f2"});
               }
            );
});

/* This is the array that contains the icon deck (32 icons) */
var deck = [{
      name: "fa-bolt",
      target: "flash"
   },
   {
      name: "fa-bookmark",
      target: "bookmark"
   },
   {
      name: "fa-video",
      target: "video"
   },
   {
      name: "fa-bullhorn",
      target: "announcement"
   },
   {
      name: "fa-cloud-upload-alt",
      target: "cloud upload"
   },
   {
      name: "fa-compress",
      target: "minimize"
   },
   {
      name: "fa-concierge-bell",
      target: "request service"
   },
   {
      name: "fa-credit-card",
      target: "payment"
   },
   {
      name: "fa-directions",
      target: "direction"
   },
   {
      name: "fa-donate",
      target: "donate"
   },
   {
      name: "fa-exchange-alt",
      target: "exchange"
   },
   {
      name: "fa-expand",
      target: "expand"
   },
   {
      name: "fa-external-link-alt",
      target: "external link"
   },
   {
      name: "fa-eye",
      target: "visibile"
   },
   {
      name: "fa-grip-lines",
      target: "grip lines"
   },
   {
      name: "fa-life-ring",
      target: "help & support"
   },
   {
      name: "fa-location-arrow",
      target: "location arrow"
   },
   {
      name: "fa-lock",
      target: "security"
   },
   {
      name: "fa-moon",
      target: "sleep mode"
   },
   {
      name: "fa-street-view",
      target: "steet view"
   },
   {
      name: "fa-th",
      target: "table view"
   },
   {
      name: "fa-address-book",
      target: "contacts"
   },
   {
      name: "fa-archive",
      target: "archive"
   },
   {
      name: "fa-bus",
      target: "bus route"
   },
   {
      name: "fa-calendar-alt",
      target: "calendar"
   },
   {
      name: "fa-clipboard",
      target: "clipboard"
   },
   {
      name: "fa-clone",
      target: "clone"
   },
   {
      name: "fa-money-bill",
      target: "money"
   },
   {
      name: "fa-paste",
      target: "paste"
   },
   {
      name: "fa-power-off",
      target: "power"
   },
   {
      name: "fa-trash-alt",
      target: "delete"
   },
   {
      name: "fa-wifi",
      target: "wifi"
   },
   {
      name: "fa-bars",
      target: "menu"
   },
   {
      name: "fa-bell",
      target: "notifications"
   },
   {
      name: "fa-camera",
      target: "images"
   },
   {
      name: "fa-cog",
      target: "settings"
   },
   {
      name: "fa-comment-alt",
      target: "comments"
   },
   {
      name: "fa-download",
      target: "file download"
   },
   {
      name: "fa-ellipsis-h",
      target: "more"
   },
   {
      name: "fa-globe",
      target: "language settings"
   },
   {
      name: "fa-heart",
      target: "favorite"
   },
   {
      name: "fa-sign-in-alt",
      target: "sign-in"
   },
   {
      name: "fa-map-marker-alt",
      target: "location marker"
   },
   {
      name: "fa-pencil-alt",
      target: "edit"
   },
   {
      name: "fa-search",
      target: "search"
   },
   {
      name: "fa-share-alt",
      target: "share"
   },
   {
      name: "fa-shopping-cart",
      target: "shopping cart"
   },
   {
      name: "fa-star",
      target: "ratings"
   },
   {
      name: "fa-user",
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
   /* Set value to 18 cards */
   var value = 18;
   console.log(value);

   /* Initialize the board*/
   initializeBoard();
   /* Shuffle the deck with 52 cards */
   deck = shuffle(deck);
   /* Populate the 2 decks with X cards based on 20 cards level */
   for (i = 0; i < value; i++) {
      deck1.push(deck[i].target)
      deck2.push(deck[i].target);
   }
   console.log(deck1);
   console.log(deck2);
   /* Shuffle the second deck */
   shuffle(deck2);
   /* Add the cards to the webpage */
   for (i = 0; i < value; i++) {
      /* Create the image elements*/
      card1 = '<div class="col-md-4 col-6 p-1 d-flex justify-content-center"><div class="card card-flip shadow"><div class="card-front text-white bg-lt-teal"><div class=" noselect card-body p-0 d-flex align-items-center justify-content-center"><i class="fa fa-question fa-1x float-middle"></i></div></div><div class="noselect card-back p-0 d-flex align-items-center justify-content-center" id="back-icon" data-target="' + deck1[i] + '"><i class="fas ' + deck[i].name + '  float-middle" data-target="' + deck1[i] + '"></i></div></div></div></div>';
      card2 = '<div class="col-md-4 col-6 p-1 d-flex justify-content-center"><div class="card card-flip border-0 shadow"><div class="card-front text-white bg-lt-teal"><div class=" noselect card-body p-0 d-flex align-items-center justify-content-center"><i class="fa fa-question fa-1x float-middle"></i></div></div><div class="noselect card-back p-0 d-flex align-items-center justify-content-center" id="back-text" data-target="' + deck2[i] + '">' + deck2[i] + '</div></div></div>';
      /*Add information to the 2 decks */
      deck1div.innerHTML += card1;
      deck2div.innerHTML += card2;
   }
}

/* Clears all the elements when a new game is started */
function initializeBoard() {
   /* Clear the content of the divs that hold the 2 decks */
   deck1div.innerHTML = '';
   deck2div.innerHTML = '';
   /* Clear the content of the 2 decks */
   deck1 = [];
   deck2 = [];
   /* Clear the cards that have been matched */
   deckMatched = [];
   /* Clear the variables that contain the cards that have been selected */
   deck1select = '';
   deck2select = '';
}

/* When the user clicks on start game the cards flip over and the timer starts */
function startGame() {
   startTimer();
   $('.card-front').addClass('card-front-flip').removeClass('.card-front');
   $('.card-back').addClass('card-back-flip').removeClass('.card-back');
   $('#start-btn').html('<i class="fa fa-repeat"></i>&nbsp;&nbsp;Replay');//NEED TO PROGRAM REPLAY FUNCTION 
};



/* When the user clicks on deck1 */
deck1div.addEventListener('click', function (event) {
   /* If the user clicks outside a card, don't do anything */
   if (event.target.getAttribute('data-target') == undefined) return;
   /* Check if the card has already been matched */
   if (deckMatched.includes(event.target.getAttribute('data-card'))) return;

   /* get the value of the card and set it as selected */
   deck1select = event.target.getAttribute('data-target')
   console.log("deck1select - " + deck1select);
   console.log("deck2select - " + deck2select);

   //INSERT CHANGE OF BG COLOR FUNCTION HERE i.e.
   event.target.style.backgroundColor = "#eee";


   if (deck2select.length > 0) {
      checkMatch(event.target.getAttribute('data-target'));
   }
   console.log(event.target.getAttribute('data-target'));

}); ///end of when user clicks on deck1   



/* When the user clicks on deck2 */
deck2div.addEventListener('click', function (event) {
   console.log('deck2 clicked');

   /* If the user clicks outside a card, don't do anything */
   if (event.target.getAttribute('data-target') == undefined) return;

   /* Check if the card has already been matched */
   if (deckMatched.includes(event.target.getAttribute('data-target'))) return;

   /* get the value of the card and set it as selected */
   deck2select = event.target.getAttribute('data-target');
   console.log("deck1select - " + deck1select);
   console.log("deck2select - " + deck2select);



   if (deck1select.length > 0) {
      checkMatch(event.target.getAttribute('data-target'));
   }
   console.log(event.target.getAttribute('data-target'));
});


function checkMatch(cardValue) {
   /* Add +1 to number of moves */
   if (deck2select == deck1select) {
      /* We have a match*/
      /* Add the cards to the matched array */
      deckMatched.push(cardValue);
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
      /* Clear the select cards */
      deck1select = '';
      deck2select = '';
      console.log('deck2div - not matched');
      /* Flip the cards after 1500 milliseconds */
      // 		// setTimeout(function(){
      // 		// 	/* Flip the card that haven't been matched */
      // 		// 	flipUnmatchedCards('deck1',back='red_back');
      // 		// 	flipUnmatchedCards('deck2',back='yellow_back');
      // 		// },1000);
      // 	}
   }
}

/* Checks if the user won the game */
function checkEndgame() {
   setTimeout(function () {
      /*Display congratulations message */
      if (deck1.length == deckMatched.length) alert('Congratulations! You\'ve matched all of the icons!');
   }, 2000);
}


/* Flip all the cards that have not been matched yet */
function matchedCards(deck) {
   /* Select one of the two decks */
   var deck = document.getElementById(deck);
   /* Select all the cards in the deck */
   var cards = deck.getElementsByClassName('card-back');
   var currentCard;
   /* Color all the cards */
   for (i = 0; i < cards.length; i++) {
      /* Get value of the card */
      currentCard = cards[i].getAttribute('data-card');
      if (!deckMatched.includes(currentCard))
         /* Check if the card has been matched so that we don't color it */
         currentCard = cards[i].style.backgroundColor = "#f2f2f2";
   }
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
   mins = (minutes < 10) ? ('0' + minutes + ': ') : (minutes + ': ');
   /* check if minutes is equal to 60 and add a +1 to hours set minutes to 0 */
   if (minutes === 60) {
      minutes = 0;
      hours = hours + 1;
   }
   /* you use the javascript tenary operator to format how the hours should look and add 0 to hours if less than 10 */
   gethours = (hours < 10) ? ('0' + hours + ': ') : (hours + ': ');
   secs = (seconds < 10) ? ('0' + seconds) : (seconds);
   // display the stopwatch 
   var time = gethours + mins + secs;
   $('.score-section').find('.timer').html('<i class="fas fa-stopwatch"></i>&nbsp' + time);
   /* call the seconds counter after displaying the stop watch and increment seconds by +1 to keep it counting */
   seconds++;
   /* call the setTimeout( ) to keep the timer alive ! */
   clearTime = setTimeout("startTimer()", 1000);
}
// Function used to start the timer
function startTime() {
   /* check if seconds, minutes, and hours are equal to zero and start the timer*/
   if (seconds === 0 && minutes === 0 && hours === 0) {
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
      /*Add the time,moves and star rating to the congratulation modal only after game is complete*/
      //  var StarsModalElem=$('.modal-element').eq(2);
      //  var MovesModalElem=$('.modal-element').eq(1);
      //  var TimerModalElem=$('.modal-element').eq(0);
      //  $('.stars').clone().appendTo(StarsModalElem);
      //  $('.moves').clone().appendTo(MovesModalElem);
      //  $('.timer').clone().appendTo(TimerModalElem);
      /* clear the stop watch using the setTimeout( ) return value 'clearTime' as ID */
      clearTimeout(clearTime);
   }
}
//Timer code end


// 	/****** Exit Message ******/
// 	$(window).bind('beforeunload', function(){
// 		return 'Are you sure you want to leave?';
// 	});