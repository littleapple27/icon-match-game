<?php 
$getUserIP = getUserIP();
function getUserIP() {
if(isset($_SERVER['HTTP_CLIENT_IP'])) return $_SERVER['HTTP_CLIENT_IP'];
if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])) return $_SERVER['HTTP_X_FORWARDED_FOR'];
if(isset($_SERVER['HTTP_X_FORWARDED'])) return $_SERVER['HTTP_X_FORWARDED'];
if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP'])) return $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
if(isset($_SERVER['HTTP_FORWARDED_FOR'])) return $_SERVER['HTTP_FORWARDED_FOR'];
if(isset($_SERVER['HTTP_FORWARDED'])) return $_SERVER['HTTP_FORWARDED'];
if(isset($_SERVER['REMOTE_ADDR'])) return $_SERVER['REMOTE_ADDR'];
return null;
}

?>



<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="cleartype" content="on">
	<meta name="apple-mobile-web-app-title" content="Icon &#8594; Word Match Game">
	<meta name="robots" content="NOYDIR,NOODP" />
	<meta name="description" content="Icon &#8594; Word Match Game" />
	<meta name="keywords" content="icon ambiguity, UI icons, font awesome, icon research" />
	<meta property="og:site_name" content="Icon &#8594; Word Match Game" />
	<meta property="og:title" content="Icon &#8594; Word Match Game" />
	<meta property="og:description" content="A Graduate Research Project at FHSU" />
	<meta property="og:type" content="game" />
	<meta property="og:image" content="https://littleapple27.dev/icon-match-game/img/teaser-img.jpg" />
	<meta property="og:image:type" content="img/teaser-img.jpg" />
	<meta property="og:image:alt" content="Icon &#8594; Word Match Game" />
	<meta property="og:image:width" content="1156" />
	<meta property="og:image:height" content="618" />
	<meta property="og:url" content="https://littleapple27.dev/icon-match-game">
	<link rel='icon' href='img/favicon.ico?' type="image/x-icon" />

	<script src="https://kit.fontawesome.com/bf44c917aa.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/custom.min.css">
	<title>The Unambiguous Icon Project: A Case for Universal Icon Meanings</title>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-164973594-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-164973594-1');
	</script>


</head>

<body class="bg-light">

	<!----Demographic Form Pop-Up Modal on Page Load---->
	<section id="demoModal" class="modal fade" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog">
			<div class="modal-content bg-light text">
				<div class="modal-header">
					<h5 class="modal-title bigfont text-color-1">Please fill out the following information</h5>
				</div>
				<div class="modal-body">
					<form id="demoForm" method="POST">
						<div class="">
							<p>I am an awesome&nbsp;
								<select class="form-control" id="gender" name="gender" required>
									<option value="" disabled selected hidden>Please choose gender
									</option>
									<option value="f">Female</option>
									<option value="m">Male</option>
									<option value="o">Other</option>
								</select>

							</p>
						</div>


						<div class="">
							<p>And on my last birthday, I turned &nbsp;
								<select class="form-control" id="age" name="age" required>
									<option value="" disabled selected hidden>Please select age
									</option>
									<option value="under18">Under 18</option>
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

						<div class="">
							<p>&nbsp;I am a citizen of &nbsp;
								<select class="form-control" id="country" name="country">
									<option value="" disabled selected hidden>Please choose country</option>
									<optgroup label="Most Selected">
										<option value="USA-top">United States of America</option>
									</optgroup>
									<optgroup label="All Countries">
									<option value="Afganistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antigua & Barbuda">Antigua & Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Australia">Australia</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bonaire">Bonaire</option>
									<option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burundi">Burundi</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Canary Islands">Canary Islands</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Channel Islands">Channel Islands</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos Island">Cocos Island</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote DIvoire">Cote DIvoire</option>
									<option value="Croatia">Croatia</option>
									<option value="Cuba">Cuba</option>
									<option value="Curaco">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="East Timor">East Timor</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands">Falkland Islands</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Ter">French Southern Ter</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Great Britain">Great Britain</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guinea">Guinea</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Hawaii">Hawaii</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="Iceland">Iceland</option>
									<option value="Indonesia">Indonesia</option>
									<option value="India">India</option>
									<option value="Iran">Iran</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Isle of Man">Isle of Man</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea North">Korea North</option>
									<option value="Korea Sout">Korea South</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Laos">Laos</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libya">Libya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macau">Macau</option>
									<option value="Macedonia">Macedonia</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Malawi">Malawi</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Midway Islands">Midway Islands</option>
									<option value="Moldova">Moldova</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Nambia">Nambia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherland Antilles">Netherland Antilles</option>
									<option value="Netherlands">Netherlands (Holland, Europe)</option>
									<option value="Nevis">Nevis</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau Island">Palau Island</option>
									<option value="Palestine">Palestine</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Phillipines">Philippines</option>
									<option value="Pitcairn Island">Pitcairn Island</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Republic of Montenegro">Republic of Montenegro</option>
									<option value="Republic of Serbia">Republic of Serbia</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russia">Russia</option>
									<option value="Rwanda">Rwanda</option>
									<option value="St Barthelemy">St Barthelemy</option>
									<option value="St Eustatius">St Eustatius</option>
									<option value="St Helena">St Helena</option>
									<option value="St Kitts-Nevis">St Kitts-Nevis</option>
									<option value="St Lucia">St Lucia</option>
									<option value="St Maarten">St Maarten</option>
									<option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
									<option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
									<option value="Saipan">Saipan</option>
									<option value="Samoa">Samoa</option>
									<option value="Samoa American">Samoa American</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome & Principe">Sao Tome & Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Slovakia">Slovakia</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syria">Syria</option>
									<option value="Tahiti">Tahiti</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania">Tanzania</option>
									<option value="Thailand">Thailand</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad & Tobago">Trinidad & Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks & Caicos Is">Turks & Caicos Is</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="Uganda">Uganda</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Erimates">United Arab Emirates</option>
									<option value="USA">United States of America</option>
									<option value="Uraguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican City State">Vatican City State</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
									<option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
									<option value="Wake Island">Wake Island</option>
									<option value="Wallis & Futana Is">Wallis & Futana Is</option>
									<option value="Yemen">Yemen</option>
									<option value="Zaire">Zaire</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
									</optgroup>
								</select>
							</p>
						</div>

						<div class="">
							<p>&nbsp;My race or ethinicity is&nbsp;
								<select class="form-control" id="ethnicity" name="ethnicity" required>
									<option value="" selected="selected" disabled="disabled">Please select race or ethnicity</option>
									<option value="White">White</option>
									<option value="Hispanic-Latino-Spanish">Hispanic, Latino, Spanish</option>
									<option value="black-african-american">Black or African American</option>
									<option value="Asian-Indian">Asian or Asian Indian</option>
									<option value="American-Indian-Alaska-Native">American Indian or Alaska Native</option>
									<option value="Middle-East-North-African">Middle Eastern or North African</option>
									<option value="Hawaiian-Pacific-Islander">Native Hawaiian or Other Pacific Islander</option>
									<option value="other">Other race or ethnicity</option>									
								</select>

							</p>
						</div>


						<div class="">
							<p>&nbsp;Every day, I use my smart phone, tablet and/or
								desktop for&nbsp;
								<select class="form-control" id="webUse" name="webUse" required>
									<option value="" disabled selected hidden>Please choose hours
										per day</option>
									<option value="less-1">Less than 1 hour</option>
									<option value="1-3">1-3 hours</option>
									<option value="4-8">4-8 hours</option>
									<option value="more-8">More than 8 hours</option>
									
								</select>

							</p>
						</div>

						<div class="">
							<p>&nbsp;and my highest level of education is&nbsp;
								<select class="form-control" id="education" name="education" required>
									<option value="" disabled selected hidden>Please choose
										education level</option>
									<option value="less-than-hs">Less than high school diploma or
										equivalent (e.g. GED)</option>
									<option value="hs-ged">High school diploma or equivalent (e.g.
										GED)</option>
									<option value="associate">Associate Degree</option>
									<option value="bachelor">Bachelor Degree</option>
									<option value="graduate">Graduate Degree</option>
									<option value="doctoral">Doctoral Degree</option>
									<option value="other-edu">Other</option>
								</select>
							</p>
						</div>
						<div class="text-right">
							<button type="submit" class="btn btn-lg bg-color-1 btn-info-submit text-uppercase"
								id="lets-play-btn">Let's
								Play!&nbsp;&nbsp;<i class="fas fa-angle-double-right"></i></button>
						</div>
						<input type="hidden" id="playerIP" name="playerIP" value="<?php echo $getUserIP ?>">
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
					<i class="fas fa-stopwatch mr-2"></i><span class="timer text-color-1">00:00.0</span></p>
			</div>
		</div>


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
	<div class="modal fade" id="endGameModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true" data-backdrop="static" data-keyboard="false">
		<div class="modal-dialog" role="document">
			<div class="modal-content bg-light">
				<div class="text-center pt-3">
					<h2 class="modal-title text-color-1" id="exampleModalLabel">Congratulations <i
							class="fa fa-arrow-right"></i> You Win!</h2>
					<p class="lead">You matched all of the icons.</p>
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
						<!-- <button class="btn btn-md bg-color-1 btn-info-submit text-uppercase">Leaderboard&nbsp;&nbsp;<i
								class="fas fa-trophy"></i></button> -->
						<button class="btn btn-lg bg-color-1 btn-info-submit text-uppercase playAgain-btn">Play
							Again&nbsp;&nbsp;<i class="fas fa-gamepad"></i></button>
						<button class="btn btn-lg bg-color-1 btn-info-submit text-uppercase newPlayer-btn">New
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

		<div class="mt-2">&copy; 2020 <a href="mailto:amlegleiter@mail.fhsu.edu" class="text-color-1">
				amlegleiter@mail.fhsu.edu<i class="ml-2 fas fa-envelope"></i></a><a class="text-color-1"
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
	<script src="js/game-data.js"></script>
	<script src="js/game.js"></script>
</body>

</html>