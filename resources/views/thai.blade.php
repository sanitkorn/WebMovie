<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>MoviesKH | Home :: w3layouts</title>
<!-- for-mobile-apps -->
@include('header.link')
</head>
	
<body>
<!-- nav -->
@include('header.navba')		
<!-- //nav -->
<!-- ganeral -->
<script src="{{asset('js/jquery.slidey.js')}}"></script>
    <script src="{{asset('js/jquery.dotdotdot.min.js')}}"></script>
	   <script type="text/javascript">
			$("#slidey").slidey({
				interval: 8000,
				listCount: 5,
				autoplay: false,
				showList: true
			});
			$(".slidey-list-description").dotdotdot();
		</script>
<div class="general">
		<h4 class="latest-text w3_latest_text">Thai</h4>
		<div class="container">
			<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
	
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
						<div class="w3_agile_featured_movies">
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html" class="hvr-shutter-out-horizontal')}}"><img src="{{asset('images/download (6).jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">Frien Zone</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/london.jpg')}}" title="album-name" class="img-responsive" alt=" "  />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">London</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/images (3).jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="single.html">Love You</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/images (2).jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">Chakiri</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/loverun.jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">Love and Run</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/c5.jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">KEANU</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/64c664afc074ac0a36d7abe658356b6e761e212cr1-300-422v2_uhq.jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">Fallen leaf</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/m2.jpg')}}" title="album-name" class="img-responsive" alt=" "  />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">The Other Side</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/f2c3a71a96559e49b9593dd14d540a76.jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">In chinema 12 warch</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/cac5de0711c566ac2b1488f4e4956d57 (1).jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">Pathakan Rak</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/m21.jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">The Jungle Book</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
							<div class="col-md-2 w3l-movie-gride-agile">
								<a href="{{asset('single.html')}}" class="hvr-shutter-out-horizontal"><img src="{{asset('images/bro.jpg')}}" title="album-name" class="img-responsive" alt=" " />
									<div class="w3l-action-icon"><i class="fa fa-play-circle" aria-hidden="true"></i></div>
								</a>
								<div class="mid-1 agileits_w3layouts_mid_1_home">
									<div class="w3l-movie-text">
										<h6><a href="{{asset('single.html')}}">Brother of the year</a></h6>							
									</div>
									<div class="mid-2 agile_mid_2_home">
										<p>2019</p>
										<div class="block-stars">
											<ul class="w3l-ratings">
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-half-o" aria-hidden="true"></i></a></li>
												<li><a href="#"><i class="fa fa-star-o" aria-hidden="true"></i></a></li>
											</ul>
										</div>
										<div class="clearfix"></div>
									</div>
								</div>
								<div class="ribben">
									<p>HD</p>
								</div>
							</div>
						</div>		
					</div>
			</div>
		</div>
	</div>
<!--//graneral  -->
<!-- footer -->
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
					<p>2019 <a title="http://www.onemovie.com" href="/">MovieKH.com</a>. All rights reserved.</p>
					<p style="font-size: 11px; line-height: 14px;">OneMovie.com does not host any content on it own server and just linking to or embedding content that was uploaded to popular Online Video hosting sites like dailymotion.com, Google Drive, other cloudy, blog and such sites. All trademarks, Videos, trade names, service marks, copyrighted work, logos referenced herein belong to their respective owners/companies.
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
