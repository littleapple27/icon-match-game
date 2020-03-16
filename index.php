<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="cleartype" content="on">
	<meta name="apple-mobile-web-app-title" content="The Unambiguous Icon Project: A Case for Universal Icon Meanings">
	<meta name="robots" content="NOYDIR,NOODP" />
	<meta name="description" content="The Unambiguous Icon Project: A Case for Universal Icon Meanings" />
	<meta name="keywords" content="icon ambiguity, UI icons, font awesome, icon research" />
	<meta property="og:site_name" content="The Unambiguous Icon Project: A Case for Universal Icon Meanings" />
	<meta property="og:title" content="The Unambiguous Icon Project: A Case for Universal Icon Meanings" />
	<meta property="og:description" content="An experiment at Fort Hays State University" />
	<script src="https://kit.fontawesome.com/bf44c917aa.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.min.css">
	<title>The Unambiguous Icon Project: A Case for Universal Icon Meanings</title>

</head>

<body class="bg-light">

	<!----Demographic Form Pop-Up Modal on Page Load---->
	<section id="demoModal" class="modal fade" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content bg-light text">
				<div class="modal-header">
					<h5 class="modal-title bigfont text-color-1">Please fill out the following information</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="demoForm" method="POST" action="index.php">
						<div class="">
							<p>I am an awesome&nbsp;
								<select class="form-control" id="gender" name="gender" required>
									<option value="" disabled selected hidden>Please choose gender
									</option>
									<option value="female">Female</option>
									<option value="male">Male</option>
									<option value="other-gender">Other</option>
								</select>

							</p>
						</div>


						<div class="">
							<p>An my last birthday, I turned &nbsp;
								<select class="form-control" id="age" name="age" required>
									<option value="" disabled selected hidden>Please select age
									</option>
									<option value="">Select</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
									<option value="32">32</option>
									<option value="33">33</option>
									<option value="34">34</option>
									<option value="35">35</option>
									<option value="36">36</option>
									<option value="37">37</option>
									<option value="38">38</option>
									<option value="39">39</option>
									<option value="40">40</option>
									<option value="41">41</option>
									<option value="42">42</option>
									<option value="43">43</option>
									<option value="44">44</option>
									<option value="45">45</option>
									<option value="46">46</option>
									<option value="47">47</option>
									<option value="48">48</option>
									<option value="49">49</option>
									<option value="50">50</option>
									<option value="51">51</option>
									<option value="52">52</option>
									<option value="53">53</option>
									<option value="54">54</option>
									<option value="55">55</option>
									<option value="56">56</option>
									<option value="57">57</option>
									<option value="58">58</option>
									<option value="59">59</option>
									<option value="60">60</option>
									<option value="61">61</option>
									<option value="62">62</option>
									<option value="63">63</option>
									<option value="64">64</option>
									<option value="65">65</option>
									<option value="66">66</option>
									<option value="67">67</option>
									<option value="68">68</option>
									<option value="69">69</option>
									<option value="70">70</option>
									<option value="71">71</option>
									<option value="72">72</option>
									<option value="73">73</option>
									<option value="74">74</option>
									<option value="75">75</option>
									<option value="76">76</option>
									<option value="77">77</option>
									<option value="78">78</option>
									<option value="79">79</option>
									<option value="80">80</option>
									<option value="81">81</option>
									<option value="82">82</option>
									<option value="83">83</option>
									<option value="84">84</option>
									<option value="85">85</option>
									<option value="86">86</option>
									<option value="87">87</option>
									<option value="88">88</option>
									<option value="89">89</option>
									<option value="90">90</option>
									<option value="N">Prefer not to say</option>
								</select>
							</p>
						</div>

						<!-- 	<div class="form-inline">
							<p>My race/ethinicity is&nbsp;
								<select class="form-control" id="ethnicity" name="ethnicity" required />
								<option value="">Select</option>
								<option value="indian-alaskan">American Idian or Alaskan Native
								</option>
								<option value="asian-pacfic">Asian / Pacific Islander</option>
								<option value="black-african">Black or African American</option>
								<option value="hispanic">Hispanic</option>
								<option value="white">White / Caucasian</option>
								<option value="other-race">Other</option>
								<option value="not-say">Prefer not to say</option>
								</select>
							</p>
						</div> -->

						<div class="form-inline">
							<p>&nbsp;Every day, I use my smart phone, tablet and/or
								desktop for&nbsp;
								<select class="form-control" id="webUse" name="webUse" required>
									<option value="" disabled selected hidden>Please choose hours
										per day</option>
									<option value="less-one-hour">Less than 1 hour</option>
									<option value="one-three-hour">1-3 hours</option>
									<option value="four-eight-hour">4-8 hours</option>
									<option value="more-than-eight">More than 8 hours</option>
								</select>

							</p>
						</div>

						<div class="form-inline">
							<p>&nbsp;and my highest level of education is&nbsp;
								<select class="form-control" id="education" name="education" required>
									<option value="" disabled selected hidden>Please choose
										education level</option>
									<option value="no-ed">Less than high school diploma or
										equivalent (e.g. GED)</option>
									<option value="high">High school diploma or equivalent (e.g.
										GED)</option>
									<option value="associate">Associate Degree</option>
									<option value="bachelor">Bachelor Degree</option>
									<option value="graduate">Graduate Degree</option>
									<option value="doctoral">Doctoral Degree</option>
									<option value="other-ed">Other</option>
								</select>
							</p>
						</div>
						<div class="text-right">
							<button
								type="submit" class="btn btn-lg bg-color-1 btn-info-submit text-uppercase" id="lets-play-btn">Let's
								Play!&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


	<section class="container-fluid py-4 mb-0 bg-color-1 text-white">

		<h1 class="display-4 text-shadow text-center text-color-2">Icon <i class="fas fa-arrow-right"></i> Word Match
			Game</h1>
		<p class="text-white lead text-center">
			Click on an icon and then on a word that matches the meaning or function of the icon.</p>
		<p class="text-white text-center">+1,000 points for every correct match, -250 points for incorrect matches. The
			game ends when all of the cards are matched!</p>

	</section>

	<!---Start button, score, clicks and timer section-->
	<section class="container mb-2 pt-5 score-section rounded">
		<div
			class="rounded-top py-2 text-center d-flex flex-column-reverse flex-sm-row align-content-sm-stretch justify-content-around">


			<div class="m-1 align-content-sm-stretch flex-fill">
				<button class="btn btn-md btn-color-1 start-btn btn-block bigfont text-color-2">Start
					Game<i class="ml-3 fa fa-play"></i></button>
			</div>




			<div
				class="outline-teal m-1 p-1  align-content-sm-stretch flex-fill d-flex align-items-center justify-content-center bigfont">
				<p class="text-color-2 mb-0 bigfont">
					<i class="fa fa-star mr-2"></i><span class="score text-color-1">00000</span></p>
			</div>
			<div
				class="outline-teal flex-fill align-content-sm-stretch m-1 p-1 d-flex align-items-center justify-content-center bigfont">
				<p class="text-color-2 mb-0 bigfont"><i class="fas fa-chess mr-2"></i>&nbsp;
					<span class="moves text-color-1">0</span></p>
			</div>
			<div
				class="outline-teal flex-fill align-content-sm-stretch m-1 p-1 d-flex align-items-center justify-content-center bigfont">
				<p class="mb-0 bigfont text-color-2">
					<i class="fas fa-stopwatch mr-2"></i><span class="timer text-color-1">00:00:00</span></p>
			</div>





		</div>

		<!-- <form id="msform" method="post" action=""> ***removed: ask NC question about form****
			<fieldset class="fieldset px-2"> -->

		<div class="row rounded-bottom p-1">
			<!---Inner Row--->
			<div class="col-6 mb-1 rounded-left" id="icon-bank">
				<!---Outer Column--->
				<div class="row p-1" id="deck1">
					<!-- This <div>  is in JS code -->
				</div>

				<!---Inner Deck Row--->
			</div>
			<!---Inner Column--->

			<div class="col-6 mb-1 rounded-right" id="word-bank">
				<!---Outer Column--->
				<div class="row p-1" id="deck2">
					<!-- This <div>  is in JS code -->
				</div>
			</div>

		</div>

		<!---end of outer row--->


	</section>

	<!-- End of Game Modal -->
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#endGameModal">
  Launch demo modal
</button>
	<div class="modal fade" id="endGameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content bg-light">
				<div class="text-center pt-3">
					<h2 class="modal-title text-color-1" id="exampleModalLabel">Congratulations <i
							class="fa fa-arrow-right"></i> You Win!</h2>
					<p class="lead">You matched all of the icons!</p>
					<!--- Remove button on final --->
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">


					<div class="bg-white text-color-1 border mx-5 py-3">
						<div class="modal-element text-center bigfont mb-2">
							<span class="text-color-2"><i class="mr-2 fas fa-stopwatch"></i></span><span>Time :</span>
						</div>
						<div class="modal-element text-center bigfont mb-2">
							<span class="text-color-2"><i class="mr-2 fas fa-chess"></i></span><span>Moves :</span>
						</div>
						<div class="modal-element text-center bigfont mb-2">
							<span class="text-color-2"><i class="mr-2 fas fa-star"></i></span><span> Score :</span>
						</div>
					</div>

				</div>
				<div class="bg-light">
					<div class="py-4 d-flex flex-row justify-content-around">
						<button class="btn btn-md bg-color-1 btn-info-submit text-uppercase">Leaderboard&nbsp;&nbsp;<i
								class="fas fa-trophy"></i></button>
						<button class="btn btn-md bg-color-1 btn-info-submit text-uppercase playAgain-btn">Play
							Again&nbsp;&nbsp;<i class="fas fa-gamepad"></i></button>
						<button class="btn btn-md bg-color-1 btn-info-submit text-uppercase newPlayer-btn">New
							Player&nbsp;&nbsp;<i class="fas fa-user"></i></button>
					</div>
					<!--End of button flex group-->
					<div class="py-2 text-center bg-color-1 text-white text-uppercase">Thank you for playing!</div>
				</div>
			</div>
		</div>
	</div>

	<footer class="col-lg-8 col-md-10 col-12 mx-auto p-4 text-center text-shade-dark text-small">
		<div>Disclaimer: The data collected by the page could be published in aggregate form to help understand the use
			of icons to improve end-user comprehension and usability in web-based UI development.</div>

		<div class="mt-2">&copy; 2019 <a href="mailto:amlegleiter@mail.fhsu.edu" class="text-color-1"> amlegleiter@mail.fhsu.edu<i
					class="ml-2 fas fa-envelope"></i></a><a class="text-color-1"
				href="https://github.com/littleapple27/case-for-universal-meanings" target="_blank"><i
					class="fab fa-github ml-2"></i></a><a class="text-color-1"
				href="https://www.researchgate.net/publication/339004734_Flat-Design_Icon_Sets_a_Case_for_Universal_Meanings"><i
					class="fab fa-researchgate ml-2"></i></a></div>
	</footer>
	<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/js-cookie@2/src/js.cookie.min.js"></script>	
	<script src="js/shuffle.js"></script>
	<script src="js/game.js"></script>
	<script src="js/game-data.js"></script>




</body>

</html>