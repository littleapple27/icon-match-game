
	
	/* This is the array that contains the icon deck (32 icons) */
	var deck=[
		{  
         name:"fa-video",
         target:"video"
      	},
      { 
         name:"fa-bolt",
         target:"flash"
      },
      { 
         name:"fa-bookmark",
         target:"bookmark"
      },
      { 
         name:"fa-video",
         target:"video"
      },
      { 
         name:"fa-bullhorn",
         target:"announcement"
      },
      { 
         name:"fa-cloud-upload-alt",
         target:"cloud<br />upload"
      },
      { 
         name:"fa-compress",
         target:"minimize"
      },
      { 
         name:"fa-concierge-bell",
         target:"request<br />service"
      },
      { 
         name:"fa-credit-card",
         target:"payment"
      },
      { 
         name:"fa-directions",
         target:"direction"
      },
      { 
         name:"fa-donate",
         target:"donate"
      },
      { 
         name:"fa-exchange-alt",
         target:"exchange"
      },
      { 
         name:"fa-expand",
         target:"expand"
      },
      { 
         name:"fa-external-link-alt",
         target:"external<br />link"
      },
      { 
         name:"fa-eye",
         target:"visibile"
      },
      { 
         name:"fa-grip-lines",
         target:"grip<br />lines"
      },
      { 
         name:"fa-life-ring",
         target:"help & support"
      },
      { 
         name:"fa-location-arrow",
         target:"location<br />arrow"
      },
      { 
         name:"fa-lock",
         target:"security"
      },
      { 
         name:"fa-moon",
         target:"sleep<br />mode"
      },
      { 
         name:"fa-street-view",
         target:"steet view"
      },
      { 
         name:"fa-th",
         target:"table<br />view"
      },
      { 
         name:"fa-address-book",
         target:"contacts"
      },
      { 
         name:"fa-archive",
         target:"archive"
      },
      { 
         name:"fa-bus",
         target:"bus<br />route"
      },
      { 
         name:"fa-calendar-alt",
         target:"calendar"
      },
      { 
         name:"fa-clipboard",
         target:"clipboard"
      },
      { 
         name:"fa-clone",
         target:"clone"
      },
      { 
         name:"fa-money-bill",
         target:"money"
      },
      { 
         name:"fa-paste",
         target:"paste"
      },
      { 
         name:"fa-power-off",
         target:"power<br />off"
      },
      { 
         name:"fa-trash-alt",
         target:"delete"
      },
      { 
         name:"fa-wifi",
         target:"wifi"
      },
      { 
         name:"fa-bars",
         target:"menu"
      },
      { 
         name:"fa-bell",
         target:"notifications"
      },
      { 
         name:"fa-camera",
         target:"images"
      },
      { 
         name:"fa-cog",
         target:"settings"
      },
      { 
         name:"fa-comment-alt",
         target:"comments"
      },
      { 
         name:"fa-download",
         target:"file<br />download"
      },
      { 
         name:"fa-ellipsis-h",
         target:"more"
      },
      { 
         name:"fa-globe",
         target:"language<br />settings"
      },
      { 
         name:"fa-heart",
         target:"favorite"
      },
      { 
         name:"fa-sign-in-alt",
         target:"sign-in"
      },
      { 
         name:"fa-map-marker-alt",
         target:"location<br />marker"
      },
      { 
         name:"fa-pencil-alt",
         target:"edit"
      },
      { 
         name:"fa-search",
         target:"search"
      },
      { 
         name:"fa-share-alt",
         target:"share"
      },
      { 
         name:"fa-shopping-cart",
         target:"shopping<br />cart"
      },
      { 
         name:"fa-star",
         target:"ratings"
      },
      { 
         name:"fa-user",
         target:"user"
      }
   ];

	/* The two decks containing a subset of X cards */
	var deck1=[];
	var deck2=[];
	/* The arrays that contain the cards that have been matched so far */
	var deckMatched=[];
	/* Variables that contain the value of the card picked from each deck /*/
	var deck1flipped='';
	var deck2flipped='';
	/* Variables that identify the 2 divs for the decks */
	var deck1div=document.getElementById('deck1');
	var deck2div=document.getElementById('deck2');
	

	/*
		Initialize a new game
	*/
	function loadGame(){
		/* Get the difficulty of the game */
		//var element=document.getElementById('difficulty');  REMOVE
		//var value=element.options[element.selectedIndex].value; REMOVE
		//console.log(value);
		/* Set value to 20 cards */
		var value = 18; 
		/* Initialize the board*/
		initializeBoard();
		/* Shuffle the deck with 52 cards */
		deck=shuffle(deck);
		/* Populate the 2 decks with X cards based on 20 cards level */
		for(i=0;i<value;i++){
			deck1.push(deck[i].name) 
			deck2.push(deck[i].target);
		}
		console.log(deck1);
		console.log(deck2);
		/* Shuffle the second deck */
		shuffle(deck2);
		/* Add the cards to the webpage */
		for(i=0;i<value;i++){
			/* Create the image elements*/
			card1='<div class="col-md-4 col-6 p-2"><div class="card card-flip border-0"><div class="card-front text-white bg-purple"><div class=" noselect card-body p-0 d-flex align-items-center justify-content-center"><i class="fa fa-question fa-1x float-middle"></i></div></div><div class="card-back bg-white"><div class=" noselect card-body p-0 d-flex align-items-center justify-content-center" id="back-icon-size"><i class="fas ' + deck1[i]+'  float-middle"></i></div></div></div></div>';
			card2='<div class="col-md-4 col-6 p-2"><div class="card card-flip border-0"><div class="card-front text-white bg-teal"><div class=" noselect card-body p-0 d-flex align-items-center justify-content-center"><i class="fa fa-question fa-1x float-middle"></i></div></div><div class="card-back bg-white"><div class=" noselect card-body  p-0 d-flex align-items-center justify-content-center" id="back-text-size">' +deck2[i] +'</div></div></div></div>';
			/*Add images to the 2 decks */
			deck1div.innerHTML+=card1;
			deck2div.innerHTML+=card2;
		}
	}
	
	/* Clears all the elements when a new game is started */
	function initializeBoard(){
		/* Clear the content of the divs that hold the 2 decks */
		deck1div.innerHTML='';
		deck2div.innerHTML='';
		/* Clear the content of the 2 decks */
		deck1=[];
		deck2=[];
		/* Clear the cards that have been matched */
		deckMatched=[];
		/* Clear the variables that contain the cards that have been flipped */
		deck1flipped='';
		deck2flipped='';
	}

	/* When the user clicks on start game the cards flip over and the timer starts?? */
	function startGame(){
  		$('.card-front').addClass('card-front-flip').removeClass('.card-front');
		$('.card-back').addClass('card-back-flip').removeClass('.card-back');
		$('#icon-bank').addClass('bg-purple').removeClass('.bg-lt-purple');
		$('#word-bank').addClass('bg-teal').removeClass('.bg-lt-teal');
		//$('#startBtn').html("Start Over");
	};

	
	/* When the user clicks on deck1 */
	deck1div.addEventListener('click',function(event){
		/* If the user clicks outside a card, don't do anything */
		if(event.target.getAttribute('data-card')==undefined) return;
		/* Check if the card has already been matched */
		if(deckMatched.includes(event.target.getAttribute('data-card'))) return;
		/* get the value of the card and set it as flipped */
		deck1flipped=event.target.getAttribute('data-card');
		console.log("deck1flipped - "+deck1flipped);
		console.log("deck2flipped - "+deck2flipped);
		/*Flip all the cards */
		flipUnmatchedCards('deck1','red_back');
		/* Flip the selected card */
		event.target.src='img/'+event.target.getAttribute('data-card')+'.png';
		if(deck2flipped.length>0){
			checkMatch(event.target.getAttribute('data-card'));
		}
		console.log(event.target.getAttribute('data-card'));
	});
	
	/* When the user clicks on deck2 */
	deck2div.addEventListener('click',function(event){
		/* If the user clicks outside a card, don't do anything */
		if(event.target.getAttribute('data-card')==undefined) return;
		/* Check if the card has already been matched */
		if(deckMatched.includes(event.target.getAttribute('data-card'))) return;
		/* get the value of the card and set it as flipped */
		deck2flipped=event.target.getAttribute('data-card');
		console.log("deck1flipped - "+deck1flipped);
		console.log("deck2flipped - "+deck2flipped);
		/*Flip all the cards */
		flipUnmatchedCards('deck2','yellow_back');
		/* Flip the selected card */
		event.target.src='img/'+event.target.getAttribute('data-card')+'.png';
		if(deck1flipped.length>0){
			checkMatch(event.target.getAttribute('data-card'));
		}
		console.log(event.target.getAttribute('data-card'));
	});
	
	
	function checkMatch(cardValue){
		/* Clear the flipped cards */
		deck1flipped='';
		deck2flipped='';
		if(deck2flipped==deck1flipped){
			/* We have a match*/
			/* Add the cards to the matched array */
			deckMatched.push(cardValue);
			console.log(deckMatched);
			/* Clear the flipped cards */
			checkEndgame();
		}else{
			console.log('deck2div - not matched');
			/* Flip the cards after 1500 milliseconds */
			setTimeout(function(){
				/* Flip the card that haven't been matched */
				flipUnmatchedCards('deck1',back='red_back');
				flipUnmatchedCards('deck2',back='yellow_back');
			},1000);
		}
	}

	/* Checks if the user won the game */
	function checkEndgame(){
		setTimeout(function(){
				/*Display congratulations message */
				if(deck1.length==deckMatched.length) alert('Congratulations! Time to play a more difficult level!');
			},2000);
	}
	
	/* Flip all the cards that have not been matched yet */
	function flipUnmatchedCards(deck,back=''){
		/* Select one of the two decks */
		var deck=document.getElementById(deck);
		/* Select all the cards in the deck */
		var cards = deck.getElementsByClassName('card');
		var currentCard;
		/* Flip all the cards */
		for(i=0;i<cards.length;i++){
			/* Get value of the card */
			currentCard=cards[i].getAttribute('data-card');
			/* Check if the card has been matched so that we don't flip it */
			if(!deckMatched.includes(currentCard)) cards[i].src='img/'+back+'.png';
		}
	}

		/****** Exit Message ******/
		$(window).bind('beforeunload', function(){
			return 'Are you sure you want to leave?';
		});




	/* Flip the cards after 500 milliseconds */
			// setTimeout(function(){
			// 	/* Flip the card that haven't been matched */
			// 	$('.card-start').toggleClass("card-end");
			// },250);