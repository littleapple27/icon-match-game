
	/* This is the array that contains the icon deck (32 icons) */
	var deck=[
	'fas fa-bolt','fas fa-bookmark','fa-bullhorn','fa-cloud-upload-alt','fa-compress','fa-concierge-bell','fa-credit-card','fa-directions','fa-donate','fa-exchange-alt','fa-expand','fa-external-link-alt','fa-eye','fa-grip-lines','fa-life-ring','fa-location-arrow','fa-lock','fa-moon','fa-street-view','fa-th','fa-address-book','fa-address-card','fa-archive','fa-award','fa-bus','fa-calendar-alt','fa-clipboard','fa-clone','fa-download','fa-laptop','fa-money-bill','fa-paste','fa-power-off', 'fa-trash-alt','fa-wifi', 'fa-video'];
	/* This is the array that contains the target meanings  */
	var deckChoice = [ 'address book','address card','archive','flash','bookmark','announcement','calendar','clipboard','cloud download','cloud upload','compress','request service','credit card','directions','donate','exchange','expand','external link','invisible','visible','grip lines','help & support','location arrow','locked','microphone','sleep mode','send','sign out','street view','table view','delete','movie'
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
	function startGame(){
		/* Get the difficulty of the game */
		//var element=document.getElementById('difficulty');  REMOVE
		//var value=element.options[element.selectedIndex].value; REMOVE
		console.log(value);
		/* Set value to 20 cards */
		var value = 20; 
		/* Initialize the board*/
		initializeBoard();
		/* Shuffle the deck with 52 cards */
		deck=shuffle(deck);
		/* Populate the 2 decks with X cards based on 20 cards level */
		for(i=0;i<value;i++){
			deck1.push(deck[i]);
			deck2.push(deckChoice[i]);
		}
		console.log(deck1);
		console.log(deck2);
		/* Shuffle the second deck */
		shuffle(deck2);
		/* Add the cards to the webpage */
		for(i=0;i<value;i++){
			/* Create the image elements*/
			card1='<div class="col-3 mb-2"><div class="p-2 border" data-card=""><img class="card" data-card="' +deck1[i] +'" src="img/card-back-teal.png" style="width:100%" /></div></div>';
			card2='<div class="col-3 mb-2 "><div class="border py-1 w-100" style="font-size: .85rem;"><img class="card" data-card="' +deck2[i] +'" src="img/card-back-teal.png" style="width:100%" /></div></div>';
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
		flipUnmatchedCards('deck1','card-back-teal');
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
		flipUnmatchedCards('deck2','card-back-teal');
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
				flipUnmatchedCards('deck1',back='card-back-teal');
				flipUnmatchedCards('deck2',back='card-back-teal');
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