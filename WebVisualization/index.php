<!DOCTYPE HTML>
<html>

<head>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Big Data Project</title>

<!-- Behavioral Meta Data -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="icon" type="image/png" href="img/small-logo-01.png">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,900,900italic,700italic,700,500italic,400italic,500,300italic,300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<style>


/*-------------------------*/
/* SOCIAM FONT ICON */
/*-------------------------*/

@font-face {
    font-family: 'socialicoregular';
    src: url('font/socialico-webfont.eot');
    src: url('font/socialico-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/socialico-webfont.woff2') format('woff2'),
         url('font/socialico-webfont.woff') format('woff'),
         url('font/socialico-webfont.ttf') format('truetype'),
         url('font/socialico-webfont.svg#socialicoregular') format('svg');
}

@font-face {
    font-family: 'socialico_plusregular';
    src: url('font/socialico_plus-webfont.eot');
    src: url('font/socialico_plus-webfont.eot?#iefix') format('embedded-opentype'),
         url('font/socialico_plus-webfont.woff2') format('woff2'),
         url('font/socialico_plus-webfont.woff') format('woff'),
         url('font/socialico_plus-webfont.ttf') format('truetype'),
         url('font/socialico_plus-webfont.svg#socialico_plusregular') format('svg');
}

/*-------------------------*/
/* DON'T TOUCH  */
/*-------------------------*/

.disable-hover {
	pointer-events: none;
}

img{vertical-align:bottom;}

a {
	text-decoration:none;
}

ul { 
	list-style-type: none; 
	margin:0;
	padding:0;
}

/*-------------------------*/
/* MAIN CLASS TRANSITION FOR EFFECT HOVER*/
/*-------------------------*/

.object {
    transition: all 0.25s ease-in-out;
    -webkit-transition: all 0.25s ease-in-out; /** Chrome & Safari **/
    -moz-transition: all 0.25s ease-in-out; /** Firefox **/
    -o-transition: all 0.25s ease-in-out; /** Opera **/
}

/*----------------------------*/
/* BODY SETTINGS */
/*----------------------------*/

body,html{
	padding:0;margin:0;
	background-color:#F4F4F4;
}

.cache{
	width:100%;
	height:100%;
	position:absolute;
	background-color:#FFF;
	z-index:1000;
}

/*----------------------------*/
/* CUSTOM SCROLLBAR  */
/*----------------------------*/

::-webkit-scrollbar {
    width: 9px;
}
 
::-webkit-scrollbar-track {
    background:#eee;
    border: thin solid lightgray;
    box-shadow: 0px 0px 3px rgba(0, 0, 0, 0.1) inset;
}
 
::-webkit-scrollbar-thumb {
    background:#999;
    border: thin solid gray;
}

/*----------------------------*/
/* HEADER BLACK TOP WITH LOGO */
/*----------------------------*/

#wrapper-header{
	float:left;
	width:105%;
	height:65px;
	background-color:#2E2D30;
	opacity:0;
}

#main-header{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:auto;
}

.logo{
	position:absolute;
    margin-top:13.5px;
	left:15px;
}

#stripes{
	background: url(img/stripes.svg) no-repeat;
	position:absolute;
	width:27px;
	height:20px;
	right:15px;
	top:22.5px;
	cursor:pointer;
	display:none;
}

.logo img{height:100%;width:100%;}

/*----------------------------*/
/* SUB WHITE NAV BAR */
/*----------------------------*/

#wrapper-navbar{
	float:left;
	width:100%;
	height:0px;
	background-color:#FFF;
	border-bottom:solid #EDEDED 1px;
	opacity:0;
}

.navbar{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:100%;
	top:0;
}

.top-rated,.recent,.oldies{
	float:left;
	text-align:left;
	font-family: 'Roboto',sans-serif;
    font-size: 13px;
	height:40px;
	line-height:40px;
    margin-top:10px;
	cursor:pointer;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	text-transform: uppercase;
	letter-spacing:1.5px;
}

.top-rated{color:#666;margin-left:15px;font-weight:500;}
.recent,.oldies{color: #CCC;margin-left:80px;font-weight:500;margin-left:40px;}

.top-rated:hover,.recent:hover,.oldies:hover{color:#666;opacity:1;}

#fleche-nav-1,#fleche-nav-2,#fleche-nav-3{
	float:left;
	margin-top:26px;
	background: url(img/fleche-nav.svg) no-repeat ;
	width:5px;
	height:10px;
	margin-left:5px;
}

#fleche-nav-2,#fleche-nav-3{opacity:0.5;}

#wrapper-bouton-icon{display:block;}
#bouton-ai,#bouton-psd,#bouton-photo,#bouton-font,#bouton-theme,#bouton-premium{
	float:right;
	width:28px;
	height:28px;
	margin-top:16px;
	margin-right:15px;
	cursor:pointer;
	opacity:1;
	 transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out;
    -moz-transition: all 0.2s ease-in-out;
    -o-transition: all 0.2s ease-in-out;
    -ms-transition: all 0.2s ease-in-out;
}

#bouton-ai:hover,#bouton-psd:hover,#bouton-photo:hover,#bouton-font:hover,#bouton-theme:hover,#bouton-premium:hover{opacity:0.5;transform: scale(1.2);}

#bouton-ai img,#bouton-psd img,#bouton-photo img,#bouton-font img,#bouton-theme img,#bouton-premium img{width:100%;height:100%;}

/*----------------------------*/
/* MAIN DIV */
/*----------------------------*/

#wrapper-container{
	float:left;
	width:100%;
	height:auto;
}

.container,.container-footer {
    position:relative;
    width: 1200px;
    margin-left:-600px;
    left:50%;
}

/*----------------------------*/
/* RESPONSIVE MENU */
/*----------------------------*/

#main-container-menu{
	position:fixed;
    width:100%;
    height:100%;
	background-color:rgba(34, 34, 34, 0.95);
	left:-100%;
	z-index:10000; !important
}

.container-menu{
	position:relative;
	height:100%;
	width:100%;
}

/*----------------------------*/
/* CROSS/CLOSE FOR THE RESPONSIVE MENU */
/*----------------------------*/

#main-cross{
	float:left;
	min-height:53px;
	width:100%;
	margin-bottom:50px;
}

#cross-menu{
	position:absolute;
	width:18px;
	height:18px;
	right:25px;
	margin-top:25px;
	background: url(img/cross-menu.svg) no-repeat;
	cursor:pointer;
}

/*----------------------------*/
/* SMALL LOGO RESPONSIVE MENU */
/*----------------------------*/

#main-small-logo{
	float:left;
	min-height:53px;
	width:100%;
	margin-bottom:25px;
}

.small-logo{
	position:absolute;
	width:131px;
	height:53px;
	left:50%;
	margin-left:-65.5px;
	background: url(img/small-logo.svg) no-repeat;
}

/*----------------------------*/
/* MAIN DIV WITH IMAGE */
/*----------------------------*/

#main-container-image {
    float:left;
    width:100%;
    height:auto;
	background-color:#F4F4F4;
	margin-top:25px;
	opacity:0;
}

.work figure {
    float:left;
	width:calc(100% / 4 - 30px);
    height:auto;
    line-height:auto;
    position: relative;
    padding: 0 !important;
    margin: 15px;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
	-webkit-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	-moz-box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	box-shadow: 1px 1px 2px 0px rgba(0,0,0,0.2);
	background-color:#FFF;
}

.work figure.white dl{
    background: #FFF;
}


.work figure a img {
    height: 90%;
    width: 90%;
	margin-left:5%;
	margin-top:5%;
}

.work figure dl {
    opacity: 0;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    top: 0;
    padding: 10px;
    margin: 0;
    line-height: 2.5; 
    color: white;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out;
    -moz-transition: all 0.3s ease-in-out;
    -o-transition: all 0.3s ease-in-out;
    -ms-transition: all 0.3s ease-in-out;
}

.work figure:hover dl {
    opacity: 1;
}

.work figure dl dt {
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 13px;
    margin-bottom:0;
	font-weight:600;
	width:80%;
	margin-left:10%;
	color:#666;
	text-align:left;
	height:20px;
	line-height:100%;
	margin-top:40px;

}

.work figure dl dd {
    margin-left: 0;
	font-family: Helvetica, sans-serif;
    font-size: 12px;
	font-weight:400;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	line-height:150%;
	color:#999;
	width:80%;
	margin-left:10%;
	text-align:left;
	
}

#wrapper-part-info{
	position:relative;
	width:100%;
	height:44px;
	background-color:#FFFFFF;
}

#part-info{
	float:left;
	width:calc(100% - 53px);
	text-align:left;
	line-height:44px;
	font-family: Helvetica, sans-serif;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    font-size: 15px;
	font-weight:400;
	color:#666;
	margin-left:10px;
	height:44px;
}

.part-info-image{
	float:left;
	margin-left:15px;
	margin-top:8px;
}

.part-info-image img{width:100%;height:100%;}

/*----------------------------*/
/* RESPONSIVE MENU LIST  */
/*----------------------------*/

#main-premium-ressource,#main-themes,#main-psd,#main-ai,#main-font,#main-photo{
	float:left;
	width:100%;
	min-height:36px;
}

.premium-ressource,.themes,.psd,.ai,.font,.photo{
	position:relative;
	text-align:center;
	font-family: Helvetica, sans-serif;
    font-size: 16px;
	font-weight:400;
	height:36px;
	line-height:36px;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}

.premium-ressource a,.themes a,.psd a,.ai a,.font a,.photo a{
	transition: all 0.2s ease-in-out;
    -webkit-transition: all 0.2s ease-in-out; 
    -moz-transition: all 0.2s ease-in-out; 
    -o-transition: all 0.2s ease-in-out;
}

.premium-ressource a,.themes a,.psd a,.photo a,.font a,.ai a{color:#999;}

.premium-ressource a:hover{color:#CCC;}
.themes a:hover{color:#66CC7A;}
.psd a:hover{color:#2B9ED8;}
.photo a:hover{color:#56514C;}
.font a:hover{color:#B88DFF;}
.ai a:hover{color:#FF9000;}

/*----------------------------*/
/* UNDERNEATH THE MAIN IMAGE PART    */
/*----------------------------*/

#wrapper-thank{
	float:left;
	width:100%;
	height:190px;
	background-color:#F2F2F2;
	margin-top:40px;
}

#wrapper-oldnew{
	float:left;
	width:100%;
	height:80px;
	background-color:#F4F4F4;
	margin-top:50px;
}

.thank,.oldnew{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:100%;
	top:0;
}

.thank-text{
	float:left;
	text-align:center;
	font-family: 'Pacifico', cursive;
    font-size: 70px;
	height:190px;
	line-height:190px;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#B3B3B3;
	font-weight:400;
	width:100%;
}

.wrapper-oldnew-prev,.wrapper-oldnew-next{
	float:left;
	width:50%;
}

#oldnew-prev,#oldnew-next{
	width:43px;
	height:43px;
	opacity:0.5;
	cursor:pointer;
}

#oldnew-next{background: url(img/next.svg) no-repeat;margin-left:25px;float:left;}
#oldnew-prev{background: url(img/prev.svg) no-repeat;margin-right:25px;float:right;}

/*----------------------------*/
/* FOOTER */
/*----------------------------*/

#main-container-footer{
	float:left;
	width:100%;
	height:auto;
	background-color:#F9F9F9;
	border-top:solid #F1F1F1 1px;
	-webkit-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);
	-moz-box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);
	box-shadow: 0px 0px 2px 0px rgba(0,0,0,0.1);

}

#row-1f,#row-2f,#row-3f,#row-4f{
	float:left;
	width:calc(100% / 4);
	height:auto;
}

.text-row-1f,.text-row-2f,.text-row-3f,.text-row-4f{
	float:left;
	text-align:left;
	height:140%;
	line-height:140%;
	margin-left:20px;
	width:80%;
	text-align:left;
	font-family: Helvetica, sans-serif;
    font-size: 14px;
	font-weight:400;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#A1A1A1;
	margin-top:80px;
}
.text-row-1f,.text-row-2f,.text-row-3f{
	margin-bottom:100px;
}

/*----------------------------*/
/* NEWSLETTER BOX */
/*----------------------------*/

#main_tip_newsletter{
	float:left;
	width:100%;
	height:auto;
	margin-top:20px;
}

#tip_newsletter_input
{
    font: 15px/1.6 Helvetica, sans-serif;
	color: #CCC;
	padding: 5px 5px 5px 46px;
	width: 170px;
	border:solid 2px #CCC;
	border-radius: 5px;
	-moz-appearance: none;
	-webkit-appearance: none;
    box-shadow: none; 
	outline: 0;
	background: url() no-repeat 10px 9px;
	margin-left:20px;
	vertical-align:center;
	font-weight:400;
}

/*----------------------------*/
/* SEARCH BOX */
/*----------------------------*/

#main_tip_search{
	float:right;
	width:170px;
	margin-top:13px;
	height:auto;
	margin-right:25px;
	display:block;
}

#tip_search_input{
    font: 16px/1.6 Helvetica, sans-serif;
	color: #686868;
	padding: 4px 4px 4px 46px;
	width: 170px;
	border:solid 1px #FFF;
	border-radius: 5px;
	-moz-appearance: none;
	-webkit-appearance: none;
    box-shadow: none; 
	outline: 0;
	margin: 0;
	background: url(img/icon-search.svg) no-repeat 12px 7px;
	vertical-align:center;
	margin-left:-40px;
	background-color:#FFF;
}

#loupe{
	position:absolute;
	background: url(img/loupe.svg) no-repeat;
	width:28px;
	height:30px;
	right:20px;
	top:94px;
	cursor:pointer;
	opacity:1;
}

/*----------------------------*/
/* COPYRIGHT PART */
/*----------------------------*/

#wrapper-copyright{
	float:left;
	width:100%;
	height:70px;
	background-color:#2E2D30;
}

.copyright{
	position:relative;
	width:1200px;
	left:50%;
	margin-left:-600px;
	height:100%;
	top:0;
}

.copy-text{
	float:left;
	text-align:left;
	font-family: Helvetica, sans-serif;
    font-size: 15px;
	height:70px;
	line-height:70px;
	cursor:pointer;
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	color:#666;
	margin-left:15px;
	font-weight:500;
}

.wrapper-navbouton{
	position:absolute;
	height:100%;
	right:0;
}

.google,.facebook,.dribbble,.linkin{
	-webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
	text-align:right;
	font-family:'socialicoregular';
    font-size: 44px;
	height:70px;
	line-height:70px;
	float:right;
	opacity:0.5;
	cursor:pointer;
	float:right;
	color:#666;
	opacity:1;
}

.dribbble,.facebook,.linkin,.google{padding-right:20px;}
.dribbble,.facebook,.linkin{padding-right:12px;}

.linkin:hover,.google:hover,.facebook:hover,.dribbble:hover{color:#CCC;transform: scale(1.2);}

/*----------------------------*/
/* RWD !important */
/*----------------------------*/

/* Others wide screen -2 */
 
@media only screen and (max-width: 2000px) {
#main-container-menu {
	display:none;
}
}

/* Others wide screen */
 
@media only screen and (max-width: 1200px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:940px;
	margin-left:-465px;
}
#main-container-menu {
	display:none;
}

.work figure {
	width:calc(100% / 3 - 30px);
}
}

/* Small viewports — Old monitors, netbooks, tablets (landscape), etc. */
 
@media only screen and (max-width: 965px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:835px;
	margin-left:-417.5px;
}
#main-container-menu {
	display:none;
}
#row-1f,#row-2f,#row-3f,#row-4f{
	width:100%;
}
.text-row-1f,.text-row-2f,.text-row-3f,.text-row-4f{
	text-align:center;
	width:70%;
	margin-left:15%;
}
.text-row-1f{
	margin-top:75px;
	margin-bottom:35px;
}
.text-row-4f{
	margin-top:0;
	margin-bottom:0;
}
.text-row-2f,.text-row-3f{
	margin-bottom:35px;
	margin-top:0;
}
#tip_newsletter_input{
	position:relative;
	left:50%;
	margin-left:-112.5px;
	margin-bottom:75px;
}
}

/* Smaller viewports — more tablets, old monitors */
 
@media only screen and (max-width: 860px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:715px;
	margin-left:-357.5px;
}
#main-container-menu {
	display:none;
}
}

/* Even smaller viewports — more tablets, etc. */
 
@media only screen and (max-width: 740px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:585px;
	margin-left:-292.5px;
}   
#wrapper-bouton-icon,#main_tip_search{
	display:none;
}
#stripes {
	display:block;
}
#main-container-menu {
	display:block;
}
.work figure {
	width:calc(100% / 2 - 30px);
}
}

/* Mobile phones (Landscape) and Tablets (Portrait) */
 
@media only screen and (max-width: 610px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:455px;
	margin-left:-227.5px;
} 
#wrapper-sorting{
	position:relative;
	width:300px;
	left:50%;
	margin-left:-165px;
}
.top-rated,.recent,.oldies{
	text-align:center;
	font-family: 'Roboto',sans-serif;
    font-size: 13px;
	height:40px;
	line-height:40px;
	margin-left:25px;
}
}

/* Mobile phones (Landscape) and Tablets (Portrait) */
 
@media only screen and (max-width: 480px) {
#main-header,.navbar,.container,.container-footer,.thank,.oldnew,.copyright {
	width:295px;
	margin-left:-147.5px;
}
.work figure {
	width:calc(100% - 30px);
}
.wrapper-navbouton{
	display:none;
}
.copy-text{
	text-align:center;
	width:100%;
}
.thank-text{
    font-size: 50px;
}
}
/* Mobile phones (iphone4/5)*/
 
@media only screen and (max-width: 320px) {

}



</style>

</head>

<body>

<a name="ancre"></a>

<!-- CACHE -->
<div class="cache"></div>

<!-- HEADER -->

<div id="wrapper-header">
	<div id="main-header" class="object">
		<div class="logo" style="
    font-size: larger;
    color: white;">Big Data Project</div>
        
        <div id="stripes"></div>
    </div>
</div>

<!-- NAVBAR -->

<div id="wrapper-navbar">
		<div class="navbar object">
    		<div id="wrapper-sorting">
           
            
          
            </div>
            <div id="wrapper-bouton-icon">
            
			</div>
    	</div>
    </div>

<!-- FILTER -->	

	<div id="main-container-menu" class="object">
    	<div class="container-menu">
        	
            <div id="main-cross">
            	<div id="cross-menu"></div>
            </div>
            
            <div id="main-small-logo">
            	<div class="small-logo"></div>
            </div>
            
            <div id="main-premium-ressource">
                <div class="premium-ressource"><a href="#">Premium resources</a></div>
            </div>
            
            <div id="main-themes">
                <div class="themes"><a href="#">Latest themes</a></div>
            </div>
            
           <div id="main-psd">
                <div class="psd"><a href="#"></a></div>
            </div>
                
            <div id="main-ai">
                <div class="ai"><a href="#">Illustrator freebies</a></div>
            </div>
            
            <div id="main-font">
                <div class="font"><a href="#">Free fonts</a></div>
            </div>
            
            <div id="main-photo">
                <div class="photo"><a href="#">Free stock photos</a></div>
            </div>
            
        </div>
    </div>



<!-- PORTFOLIO -->

	<div id="wrapper-container">
    
		<div class="container object">

			<div id="main-container-image">
                       
					<section class="work">
<figure class="white">
							<a href="details.php?id=Ye&amp;src=Yearly_bike_yellow_users&amp;name=Yearly_bike_yellow_users&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Ye/Yearly_bike_yellow_users/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Yearly bike & Taxi users</dt>
									<dd></dd>	
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Yearly bike & Taxi users</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Ye&amp;src=Yearly_count_bike_yellow&amp;name=Yearly_count_bike_yellow&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Ye/Yearly_count_bike_yellow/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Yearly Bike User Count</dt>
									<dd>TheSide-By-Side Bar Graph depicts the total number of users for Yellow taxi and Citi Bike Usersfor various Temperature Ranges. The X-axis denotes the temperature scalewith a range span of 5 Fahrenheit and the Y-axis denotes the number of users for Yellow taxi and Citi bike within that particular temperature range.</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Yearly Bike user count</div>
							</div>
						</figure>
						
						<figure class="white">
							<a href="details.php?id=Ye&amp;src=Yearly_Users_Bike_Green_Yellow&amp;name=Yearly_Users_Bike_Green_Yellow&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Ye/Yearly_Users_Bike_Green_Yellow/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Yearly Users</dt>
									<dd>This Bar graph depicts the total number of citi bike, Yellow Taxi and Green Taxi users.</dd>	
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Yearly Users</div>
							</div>
						</figure>	
						<figure class="white">
							<a href="details.php?id=Mo&amp;src=Monthly_Users_Bikes_Green_Yellow&amp;name=Monthly_Users_Bikes_Green_Yellow&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Mo/Monthly_Users_Bikes_Green_Yellow/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Monthly Users </dt>
									<dd>This graph depicts the total number of users on monthly basis for Yellow taxi, and Citi Bike. The X-axis denotes the number of users and the Y-axis denotes the month.</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Monthly Users</div>
							</div>
						</figure>							
						<figure class="white">
							<a href="details.php?id=Ye&amp;src=Yellow_Taxi_Users_Per_Day_Analysis&amp;name=Yellow Taxi_Users_Per_Day_Analysis&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Ye/Yellow_Taxi_Users_Per_Day_Analysis/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Yellow Taxi Users/Day Analysis</dt>
									<dd>description</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Yellow Taxi Analysis</div>
							</div>
                        </figure>	

						<figure class="white">
							<a href="details.php?id=Bi&amp;src=Bike_User_Per_Day_Analysis&amp;name=Bike_User_Per_Day_Analysis&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Bi/Bike_User_Per_Day_Analysis/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Bike_User/Day_Analysis</dt>
									<dd>The AreaGraph depicts the number of Citi Bike Users per day. The Line Graph represents various weather attributes such as Temperature (in F), Rainfall (in inches), Snowfall Depth (in inches), and Wind Speed (in mph). From the graph, we can observe that the number of Citi Bike Users decrease tremendously whenever there was Snowfall. Also, the number of Citi Bike Users decreased with the decrease in the temperature (in F). Although, there was no such observation for Wind Speed and Rainfall. The number of Citi Bike Users were not affected by Rainfall and Wind Speed.</dd>
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Bike User Analysis</div>
							</div>
						</figure>	

		

						<figure class="white">
							<a href="details.php?id=Ye&amp;src=Yearly_temp_users_bike_green_yellow&amp;name=Yearly_temp_users_bike_green_yellow&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Ye/Yearly_temp_users_bike_green_yellow/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Users vs Temperature</dt>
									<dd>Symphony is a responsive one page website template designed with sketches and coded with html5 and php. Freebie released by Lacoste Xavier.</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Users Vs Temperature</div>
							</div>
						</figure>	


							

						<figure class="white">
							<a href="details.php?id=ye&amp;src=Yellow_Taxi_Users_Per_Day_Analysis&amp;name=Yellow_Taxi_Users_Per_Day_Analysis&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Vi/Visibility_vs_Citi_Bike_Per_Week/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Visibility vs Citi Bike</dt>
									<dd>This graph depicts the effects of Visibility on the Citi Bike Users. As we can see that as the Visibility (in miles) increases the Citi Bike Users also increases. The range for the above graph is from May 1 to November 1, since the number of Citi Bike Users depends on various other weather factors during other months. </dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Visibility vs Citi Bike</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Us&amp;src=Users_Bike_Yellow_Per_Hour&amp;name=Users_Bike_Yellow_Per_Hour&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Us/Users_Bike_Yellow_Per_Hour/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Time vs Citi Bike/ Yellow Taxi users</dt>
									<dd>The Bar graph depicts the number of Citi bike Users and Yellow Taxi users for a particular time slot. The time range taken is 1 hour.
From the above graph, we can observe that most Citi Bike users are most likely to ride a bicycle during evening, around 5pm to 7pm. The reason is most likely that people get done with their jobs and ride bicycle when they get free. Whereas, for Yellow Taxi Users, the peak time is noted between 6pm to 7pm. This clearly indicates that the office time gets over and people leave for their homes via Yellow Taxi.
 </dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Time vs Citi Bike/ Yellow Taxi users</div>
							</div>
						</figure>
                        
                       <figure class="white">
							<a href="details.php?id=Co&amp;src=Count_Gender_day_night_Bike&amp;name=Count_Gender_day_night_Bike&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Co/Count_Gender_day_night_Bike/Sheet2/4_3.png" alt="" />
								<dl>
									<dt>Count Bike User By Gender</dt>
									<dd>This graph depicts the citi bike users vs the average visibility graph. As we can see as the visibility increases the citi bike users also increase. We have taken the range from May 1 to November 1 as the observation was getting captured in that range only. </dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Count Bike User By Gender</div>
							</div>
						</figure>

						<figure class="white">
							<a href="details.php?id=Co&amp;src=Count_Gender_Bike&amp;name=Count_Gender_Bike&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Co/Count_Gender_Bike/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Gender Bike count</dt>
									<dd>The Pie-Chart graph depicts the number of Citi Bike Users on the basis of Gender. From the graph, it is very clear that the males are more likely to use a Citi Bike than Female. New York City’s population is 53% female and 47% male. Even with more number of females in the NYC, the number of male users for Citi Bike are more..</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Gender Bike count</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Co&amp;src=Count_Age_Wise_Bike&amp;name=Count_Age_Wise_Bike&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Co/Count_Age_Wise_Bike/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>User count by age</dt>
									<dd>The Pie-Chart Graph depicts the number of Citi bike users on the basis of age. From the above graph, we can observe that the people between the age group of 20-40 years are most athletic. Surprisingly, the next followed age group is 40-60 years old. New York is full of cyclists. Irrespective of the age, everyone loves to cycle around in New York.</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">User count by age</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Co&amp;src=Payment_Type_Count_Yellow_Taxi&amp;name=Payment_Type_Count_Yellow_Taxi&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Pa/Payment_Type_Count_Yellow_Taxi/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Payment mode for Yellow Taxi</dt>
									<dd>This graph depicts the type of payment mode for Yellow Taxi users..</dd>	
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Payment mode for Yellow Taxi</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Bu&amp;src=Busiest_drop_off_Citi_bike_stations&amp;name=Busiest_drop_off_Citi_bike_stations&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Bu/Busiest_drop_off_Citi_bike_stations/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Busiest drop-off stations in NYC</dt>
									<dd>This graph depicts the type of payment mode for Yellow Taxi users..</dd>	
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Busiest drop-off stations in NYC</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Bu&amp;src=Busiest_pick_up_citi_bike_stations&amp;name=Busiest_pick_up_citi_bike_stations&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Bu/Busiest_pick_up_citi_bike_stations/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Busiest Pick up Locations in NYC</dt>
									<dd>This graph depicts the top 20 busiest Pick up locations/stations for the number of citi bike users in New York City.</dd>	
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Busiest Pick up Locations in NYC</div>
							</div>
						</figure>		

						<figure class="white">
							<a href="details.php?id=Pe&amp;src=Percentage_Users_Bike_Yellow_Temp_Per_Day&amp;name=Percentage_Users_Bike_Yellow_Temp_Per_Day&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Pe/Percentage_Users_Bike_Yellow_Temp_Per_Day/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>User Percentage vs Day graph</dt>
									<dd>The Area Graph depicts the Percentage of total number Yellow taxi, and Citi Bike users against Temperature (in F) for each day in 2015. The X-axis denotes each day of year 2015 and the Y-axis denotes the temperature and the Percentage of total users.

From the graph, we can observe that at low temperatures, New Yorkers prefer Yellow Taxi over Citi Bike. We all know how cold it gets during winters. Hence, it’s almost impossible to ride a bicycle during winters which explains why New Yorkers prefer Yellow Taxi over Citi Bike during cold.
</dd>	
								</dl>
							</a>	
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">User Percentage vs Day graph</div>
							</div>
						</figure>	

						<figure class="white">
							<a href="details.php?id=Pi&amp;src=Distance_Total_Amount_Relation_Yellow_Taxi&amp;name=Distance_Total_Amount_Relation_Yellow_Taxi&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Di/Distance_Total_Amount_Relation_Yellow_Taxi/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>Distance vs Average Total Fare Amount for yellow taxi</dt>
									<dd>The Line Graph depicts the Average Total Fare and the distance covered in Yellow Taxi. The X-axis shows the distance range, and Y-axis shows the Average Total Fare Amount in Dollars.</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">Distance vs Average Total Fare Amount for yellow taxi</div>
							</div>
						</figure>	
                        <figure class="white">
							<a href="details.php?id=Di&amp;src=Distance_Yellow_Taxi_Users&amp;name=Distance_Yellow_Taxi_Users&amp;desp=text">
								<img src="https://public.tableau.com/static/images/Di/Distance_Yellow_Taxi_Users/Sheet1/4_3.png" alt="" />
								<dl>
									<dt>16.	Distance Vs Total Yellow Taxi Users</dt>
									<dd>The Line Graph shows the Total Yellow Taxi users for various distance range. The graph shows that maximum Yellow Taxi Users travel in the Yellow Taxi for short distances only. In the graph, we can observe that between 1-2 Miles, maximum number of Yellow Taxi are hired.</dd>	
								</dl>
							</a>
                            <div id="wrapper-part-info">
                            	<div class="part-info-image"><img src="" alt="" width="28" height="28"/></div>
                            	<div id="part-info">16.	Distance Vs Total Yellow Taxi Users</div>
							</div>
						</figure>	
					</section>
                    
				</div>	
            	    
			</div>
         
    <div id="wrapper-oldnew">
    	<div class="oldnew">
        	<div class="wrapper-oldnew-prev">
            	<div id="oldnew-prev"></div>
        	</div>
            <div class="wrapper-oldnew-next">
            	<div id="oldnew-next"></div>
    		</div>
        </div>
	</div>     
            
	<div id="wrapper-thank">
    	<div class="thank">
        	
    	</div>
	</div>
	    
	<div id="main-container-footer">
		<div class="container-footer">
 
            
		</div>
	</div>
    
    
    <div id="wrapper-copyright">
		<div class="copyright">
    		</div>
    		
			<div class="wrapper-navbouton">
    			
    		</div>
    	</div>
    </div>

</div>



<!-- SCRIPT -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.scrollTo.min.js"></script>
    <script type="text/javascript" src="js/jquery.localScroll.min.js"></script>
    <script type="text/javascript" src="js/jquery-animate-css-rotate-scale.js"></script>
	<script type="text/javascript" src="js/fastclick.min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" src="js/jquery.animate-shadow-min.js"></script>
	<script type='text/javascript' src='https://public.tableau.com/javascripts/api/viz_v1.js'></script>   
	
	<script>
	

	
$(document).ready(function() {
		$.localScroll();
		$(".cache").delay(1000).fadeOut(500);
		$("#wrapper-header").delay(1500).animate({opacity:'1',width:'100%'},500);
		$("#wrapper-navbar").delay(2000).animate({opacity:'1',height:'60px'},500);
		$("#main-container-image").delay(2500).animate({opacity:'1'},500);
		
	});

/*TRANSITION PAGE*/

var speed = 'slow';

$('html, body').hide();

$(document).ready(function() {
    $('html, body').fadeIn(speed, function() {
        $('a[href], button[href]').click(function(event) {
            var url = $(this).attr('href');
            if (url.indexOf('#') == 0 || url.indexOf('javascript:') == 0) return;
            event.preventDefault();
            $('html, body').fadeOut(speed, function() {
                window.location = url;
            });
        });
    });
});

/* DISABLE HOVER EFFECT WHILE YOU SCROLL FOR A SMOOTHY NAVIGATION */

var body = document.body,
	timer;

window.addEventListener('scroll', function() {

	clearTimeout(timer);

	if(!body.classList.contains('disable-hover'))
		body.classList.add('disable-hover')

	timer = setTimeout(function(){
		body.classList.remove('disable-hover')
	}, 200);

}, false);
 
  /* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE OPEN */

var MENUSIDEOPEN = document.getElementById('stripes');

MENUSIDEOPEN.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({left:'0'},300);	
}); 

/* BOUTON CROSS */

$(document).on('touchstart mouseover', '#cross-menu', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#cross-menu").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#cross-menu', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#cross-menu").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* MENU SIDE CLOSE */

var MENUSIDECLOSE = document.getElementById('cross-menu');

MENUSIDECLOSE.addEventListener('click', function() {
			   $("#main-container-menu").stop().animate({'left':'-100%'},300);	
}); 

/* BOUTON MENU ARROW-2 */

$(document).on('touchstart mouseover', '#wrapper-title-2', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-2").stop().animate({rotate: '90deg',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-2', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-2").stop().animate({rotate: '0deg',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU ARROW-3 */

$(document).on('touchstart mouseover', '#wrapper-title-3', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-3").stop().animate({rotate: '90deg',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#wrapper-title-3', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#fleche-nav-3").stop().animate({rotate: '0deg',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON MENU */

$(document).on('touchstart mouseover', '#stripes', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#stripes', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#stripes").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON NEXT */

$(document).on('touchstart mouseover', '#oldnew-next', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-next").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-next', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-next").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

/* BOUTON PREV */

$(document).on('touchstart mouseover', '#oldnew-prev', function(event){

        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-prev").stop().animate({scale:'1.2',opacity:'0.5'},300);	

            event.handled = true;
        } else {
            return false;
        }
});

$(document).on('touchend mouseout', '#oldnew-prev', function(event){
	
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
			
			   $("#oldnew-prev").stop().animate({scale:'1',opacity:'1'},300);	

            event.handled = true;
        } else {
            return false;
        }
});


/*FORMULAIRE NEWSLETTER*/
	
$("form").on("submit", function(event) {
  event.preventDefault();
  $.post("/burstfly/form-burstfly-modified.asp",$("form").serialize(), function(data) {//alert(data);
	});
});

/* PRELOADER */

function preloader() {
	if (document.images) {
		var img1 = new Image();
		var img2 = new Image();
		var img3 = new Image();
		var img4 = new Image();
		var img5 = new Image();
		var img6 = new Image();
		var img7 = new Image();
		var img8 = new Image();
		var img9 = new Image();
		var img10 = new Image();
		var img11 = new Image();
		var img12 = new Image();
		var img13 = new Image();
		var img14 = new Image();
		var img15 = new Image();
		var img16 = new Image();
		var img17 = new Image();
		var img18 = new Image();
		var img19 = new Image();
		var img20 = new Image();

		img1.src = "img/psd-4.jpg";
		img2.src = "img/font-1.jpg";
		img3.src = "img/psd-1.jpg";
		img4.src = "img/psd-2.jpg";
		img5.src = "img/ai-1.jpg";
		img6.src = "img/theme-2.jpg";
		img7.src = "img/psd-3.jpg";
		img8.src = "img/font-2.jpg";
		img9.src = "img/font-3.jpg";
		img10.src = "img/ai-2.jpg";
		img11.src = "img/icons-1.jpg";
		img12.src = "img/ui-1.jpg";
		img13.src = "img/font-5.jpg";
		img14.src = "img/theme-2.jpg";
		img15.src = "img/psd-5.jpg";
		img16.src = "img/icons-3.jpg";
		img17.src = "img/font-4.jpg";
		img18.src = "img/theme-3.jpg";
		img19.src = "img/font-6.jpg";
		img20.src = "img/theme-4.jpg";
	}
}
function addLoadEvent(func) {
	var oldonload = window.onload;
	if (typeof window.onload != 'function') {
		window.onload = func;
	} else {
		window.onload = function() {
			if (oldonload) {
				oldonload();
			}
			func();
		}
	}
}
addLoadEvent(preloader);

</script>


</body>


</html>
