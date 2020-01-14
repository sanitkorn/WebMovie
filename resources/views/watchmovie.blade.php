<html>
<head>
@include('header.link')
    
</head>
<body>
    <!-- nav -->
    @include('header.navba')
    <!-- //nav -->
    <!-- <div class="container-header">
        <img src="images/MovieKH.png" class="logo">
        <a href="#" class="header-btn"><i class="fa fa-search"></i> Search</a>
    </div> -->
    <div class="container movie-details">
    <div class="row">
    <div class="col-md-6 left-box">
        <h1>Spider-Man Into the Spider-Verse (2018)</h1>
        <p>Miles Morales is juggling his life between being a high school student and being a spider-man.
        When Wilson "Kingpin" Fisk uses a super collider, 
        others from across the Spider-Verse are transported to this dimension.</p>
        <a href="/website/spider/watching"><i class="fa fa-play"></i> Watch Now</a>
    </div>
    <div class="col-md-6 text-center">
        <a href="#">
        <img src="{{asset('images/spiderinto.jpg')}}" class="movie-image">
        </a>
    </div>
    </div>
    </div>
    <div class="container series">
    <h2>SIMILAR MOVIES</h2>
    <div class="row">
    <div class="col-md-4">
        <div class="row">
            <a href="#" class="col-6"><img src="{{asset('images/spider1.jpg')}}"></a>
            <a href="#" class="col-6"><img src="{{asset('images/spider2.jpg')}}"></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <a href="#" class="col-6"><img src="{{asset('images/spider3.jpg')}}"></a>
            <a href="#" class="col-6"><img src="{{asset('images/spider4.jpg')}}"></a>
        </div>
    </div>
    <div class="col-md-4">
        <div class="row">
            <a href="#" class="col-6"><img src="{{asset('images/spider5.jpg')}}"></a>
            <a href="#" class="col-6"><img src="{{asset('images/m6.jpg')}}"></a>
        </div>
    </div>
    </div>
    </div>
    <!-- footer -->
    <br><br>
	<hr>
<footer>
	<div id="footer">
		<div class="container">
			<div class="row">
				<div class="col-sm-1 footer-block1"></div>
					<div class="col-sm-2 footer-block footer-block2">
						<p><a title="Action" href="/website/action">Action</a></p>
						<p><a title="Adult" href="/genres/47">Adult</a></p>
						<p><a title="Adventure" href="/website/adventure">Adventure</a></p>
						<p><a title="Animation" href="/genres/24">Animation</a></p>
						<p><a title="Asian" href="/genres/46">Asian</a></p>
					</div>
				<div class="col-sm-2 footer-block footer-block3">
					<p><a title="Biograpy" href="/website/biograpy">Biograpy</a></p>
					<p><a title="Comedy" href="/website/comedy">Comdy</a></p>
					<p><a title="Crime" href="/genres/27">Crime</a></p>
					<p><a title="Documentary" href="/genres/28">Documentary</a></p>
					<p><a title="Drama" href="/genres/29">Drama</a></p>
				</div>
				<div class="col-sm-2 footer-block footer-block4">
					<p><a title="Family" href="/genres/30">Family</a></p>
					<p><a title="Fantasy" href="/genres/31">Fantasy</a></p>
					<p><a title="Film-Noir" href="/genres/32">Film-Noir</a></p>
					<p><a title="History" href="/genres/33">History</a></p>
					<p><a title="Horror" href="/genres/34">Horror</a></p>
				</div>
				<div class="col-sm-2 footer-block footer-block5">
					<p><a title="Khmer Dubbed" href="/genres/48">Khmer Dubbed</a></p>
					<p><a title="Music" href="/genres/35">Music</a></p>
					<p><a title="Musical" href="/genres/36">Musical</a></p>
					<p><a title="Mystery" href="/genres/37">Mystery</a></p>
					<p><a title="Romance" href="/genres/39">Romance</a></p>
				</div>
				<div class="col-sm-2 footer-block footer-block6">
					<p><a title="Sci-Fi" href="/genres/40">Sci-Fi</a></p>
					<p><a title="Sport" href="/genres/41">Sport</a></p>
					<p><a title="Thriller" href="/genres/42">Thriller</a></p>
					<p><a title="War" href="/genres/43">War</a></p>
					<p><a title="Western" href="/genres/44">Western</a></p>
				</div>
				<div class="col-sm-1 footer-block7"></div>
					<div class="clearfix"></div>
				</div>
				<br>
				<div class="copyright">
					<p>2019 <a title="http://www.onemovie.com" href="/">MovieKh.com</a>. All rights reserved.</p>
					<p style="font-size: 11px; line-height: 14px;">MovieKH.com does not host any content on it own server and just linking to or embedding content that was uploaded to popular Online Video hosting sites like dailymotion.com, Google Drive, other cloudy, blog and such sites. All trademarks, Videos, trade names, service marks, copyrighted work, logos referenced herein belong to their respective owners/companies.
						MovieKH.com is not responsible for what other people upload to 3rd party sites. We urge all copyright owners, to recognize that the links contained within this site are located somewhere else on the web or video embedded are from other various site like included above!. If you have any legal issues please contact appropriate media file owners / hosters. If you have any legal issues please contact the appropriate media file owners or host sites.</p>
				</div>
			</div>
        </div>
	</footer>
<!-- //footer -->
<!-- Bootstrap Core JavaScript -->
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!-- //Bootstrap Core JavaScript -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>