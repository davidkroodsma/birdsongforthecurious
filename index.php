<!doctype html>
<html class="no-js" lang="">
<head>
	<meta charset="utf-8">
	
	<title>Birdsong for the Curious Naturalist</title>
	
	<meta name="description" content="">
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" href="css/build.css?v=1.0.6">
	
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|EB+Garamond:400,400i,700,700i|Libre+Baskerville&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/d97b24d1b3.js"></script>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	
	<!-- jQuery Modal -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
	
	<!-- Tiny Slider -->
	<!-- only load on home page -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/tiny-slider.css">
	<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.helper.ie8.js"></script><![endif]-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.1/min/tiny-slider.js"></script>
	
	<script src="js/main.js"></script>
	<?php include("g-tracking.php"); ?>

	
</head>

    <script language="javascript">  

    var playing = "";

	function play_single_sound(sound) {
		    if(playing != ""){
		        document.getElementById(playing).pause();
		    }
		    if(playing==sound){
		    	playing = "";
		    }else{
    			document.getElementById(sound).play();
    			playing = sound;
    		}
	}

	</script>

<body class="front">

<style>
div#audio {
	display: none;
	overflow: hidden;
}
</style>

<!-- div id="audio"> 
	<audio id="bewicks" src="songs/581_Bewick's_Wren.mp3" autobuffer="autobuffer"></audio>
</div> -->

<?php include("index_audio.php"); ?>

	  <!--[if IE]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->
	
	  <header>
	  	<h1><a href="index.php">Birdsong <span class="script">for the</span> <br />Curious Naturalist</a></h1>
		<nav>
			<a id="toggle-menu" href="#"><i class="fas fa-bars"></i> Menu</a>
			<ul>               
				<?php include "header.php"; ?>

			</ul>
		</nav>
	</header>
	
	<section id="banner">
		<div class="cover"><img src="img/Curious-Naturalist-book-cover.jpg" alt="Curious Naturalist book cover" width="260px" /></div>
		<div class="title">
			<h1>Birdsong <span class="script gold">for the</span> <br />Curious Naturalist</h1>
			<h2>The companion website to the book by Donald Kroodsma.</h2>
		</div>
	</section>
	
	<section id="search">
		<div class="wrap tight">
			<h2 class="center">Listen &amp; Explore</h2>
			<p class="lead center">Here are four ways you can explore <i>Birdsong for the Curious Naturalist</i>.</p>

			<ul id="menu" class="front">
				<li>
					<h4><a href="search.php#chapter-list"><i class="fas fa-book-open"></i> Listen by Chapter</a></h4>
					<p>In this expanding series of chapter and subchapter titles, find the topic and then the species you’d like to learn more about.</p>
				</li>
	  			
	  			<li>
					<h4><a href="search.php#species-list"><i class="fas fa-dove"></i> Listen by Species</a></h4>
					<p>Find your species in this taxonomic listing and you’ll see all the sounds of that particular species in the book. </p>
				</li>
	  			
				<li>	
					<h4><a href="search.php#number-list"><i class="fas fa-hashtag"></i> Listen by Number</a></h4>
					<p>Using a particular sound number from the book’s text, you can easily find it here.</p>
				</li>
	  			
	  			<li>
					<h4><a href="search.php#explore-list"><i class="fas fa-search"></i> Explore</a></h4>
					<p>Explore the world of birdsong with these 77 suggestions; see the relevant book section for context.</p>
				</li>
			</ul><!--menu-->
		</div>
	</section>
	
	<section id="samples" class="dark">
		<h2 class="center">A sample of nine species from the book</h2>		
		<p class="small center">Click <i class="far fa-play-circle"></i> to hear a recording.
		Click <i class="fas fa-info-circle"></i> or the species name to see the species page.
		</p>
		
		<div id="slider">
			<ul class="samples-slider">
				<?php include("bird_carousel.php") ?>

<!-- 				<li>
				<img class="tns-lazy-img" src="img/samples/AmRe-LW-AMRE(m)_0234.jpg" data-src="img/samples/AmRe-LW-AMRE(m)_0234.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>American redstart</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/AmRo-MR-AmRobinCalling_1330_Read.jpg" data-src="img/samples/AmRo-MR-AmRobinCalling_1330_Read.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>American robin</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/AmWi-MR-AmWigeonMLanding_4289_Read.jpg" data-src="img/samples/AmWi-MR-AmWigeonMLanding_4289_Read.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>American wigeon</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/AnHu-BbJ-298a-anhu_AZ-15-11-16_0658.jpg" data-src="img/samples/AnHu-BbJ-298a-anhu_AZ-15-11-16_0658.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>Anna's hummingbird</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/BaSp-RR-BachmansSparrow.jpg" data-src="img/samples/BaSp-RR-BachmansSparrow.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>Bachman's sparrow</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/BaOr-MR-BaltOrioleMSing_9805R_Read.jpg" data-src="img/samples/BaOr-MR-BaltOrioleMSing_9805R_Read.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>Bachman's sparrow</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/BeWr-BS-1-Bewick's-Wren_D4_28996.jpg" data-src="img/samples/BeWr-BS-1-Bewick's-Wren_D4_28996.jpg" alt="" /><a href="javascript:play_single_sound('bewicks');"><i class="far fa-play-circle"></i></a><a href="#"><span>Bewick's wren</span></a><a href="#"><i class="fas fa-info-circle"></i></a></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/BrTh-WH-Brown_thrasher_WH_MG_1769.jpg" data-src="img/samples/BrTh-WH-Brown_thrasher_WH_MG_1769.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>Brown thrasher</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/CaGo-MR-CAGOAggression_8680_Read.jpg" data-src="img/samples/CaGo-MR-CAGOAggression_8680_Read.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>Canada goose</span></a><i class="fas fa-info-circle"></i></li>
				<li>
				<img class="tns-lazy-img" src="img/samples/CaSp-WH-20140531_Cassin's_Sparrow_WH__MG_4681.jpg" data-src="img/samples/CaSp-WH-20140531_Cassin's_Sparrow_WH__MG_4681.jpg" alt="" /><i class="far fa-play-circle"></i><a href="#"><span>Cassin's sparrow</span></a><i class="fas fa-info-circle"></i></li>
 -->			</ul>
		</div>
	</section>
	
	<footer class="dark">
		<div class="wrap">
			<p class="center">&copy;2020 Donald Kroodsma. Web design by <a href="http://www.ehwdesign.com" target="_blank">EHW Design.</a></p>
		</div>
	</footer>
	
	<!-- Modal HTML embedded directly into document -->
	<div id="buy-popup" class="modal">
		<div class="popup-container">
			<div>
				<img src="img/Curious-Naturalist-book-cover.jpg" alt="Curious Naturalist book cover" width="200px" />
			</div>
			<div>
				<p><em><b>Birdsong for the Curious Naturalist</b></em> is available from the following retailers:</p>
				
				<ul class="buy-links">
<?php include "buy-links.php"; ?>
 				</ul>
			</div>
		</div>
	</div>
	
	<!-- Call the slider and define settings -->
	<script type="module">
		var slider = tns({
		    container: '.samples-slider',
			controlsPosition: 'bottom',
			controls: true,
			controlsText: ['<i class="fas fa-chevron-left"></i>', '<i class="fas fa-chevron-right"></i>'],
			nav: false,
			mouseDrag: true,
			lazyload: true,
			items: 1,
			slideBy: 1,
			edgePadding: 0,
			speed: 400,
			responsive: {
			    480: {
			      items: 2,
				  slideBy: 1,
				  nav: true,
				  navPosition: 'bottom',
			    },
			    768: {
			      items: 3,
				  slideBy: 1,
				  edgePadding: 30,
				  
			    },
			    1024: {
			      items: 4,
				  slideBy: 2,
				  edgePadding: 50
			    }
			  },
			
		  });

	</script>

</body>
</html>
