<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	@yield('meta')

	<link href="{{ asset('/css/app.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/datepicker.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link rel="icon" href="/img/favicon.ico?v=2">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="//v2.zopim.com/?33fS6b431EzU8mJEjCVvNyblec2917VA";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	@yield('head')
</head>
<body>
	<!-- Image backgrounds are set within the full-width-pics.css file. -->    
    @if(Request::url() === 'http://byokids.ourvacationcentre.com.au')
    	<header class="image-bg-home-height" id="hero">
    @else
    	<header class="image-bg-fixed-height" id="hero">
	@endif
		<div class="container">
	    	<div class="row no-gutter">
				<!-- Logo -->
	            <div class="col-md-2 col-sm-3 col-xs-12">
	                <a href="/">
	                	<img class="img-responsive center-block" src="/img/logo.png" alt="">
	                </a>
	            </div>
	            <!-- Nav & Phone -->
	            <div class="col-md-10 col-sm-9 col-xs-12">
					<div class="row">
	            		<div class="col-xs-12 hidden-xs">
	            			<div class="row">
								<div class="col-lg-9 col-md-8 col-sm-7 text-right">
									<div class="row">
										<a href="https://www.facebook.com/BYOkids" target="_blank" class="social-btn facebook-small">Facebook</a>
										<a href="https://twitter.com/byokids" target="_blank" class="social-btn twitter-small">Twitter</a>
										<a href="https://www.youtube.com/user/BYOkids" target="_blank" class="social-btn youtube-small">Youtube</a>
										<a href="https://www.instagram.com/byokids/" target="_blank" class="social-btn instagram-small">Instagram</a>
									</div>
								</div>
								<div class="col-lg-3 col-md-4 col-sm-5 phone">1300 296 543</div>
							</div>
						</div>
					</div>
					<div class="row">
	            		<div class="col-xs-12">
			            	<nav class="navbar navbar-default no-gutter">
							  <div class="container-fluid">
							    <!-- Brand and toggle get grouped for better mobile display -->
							    <div class="navbar-header">
							      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							        <span class="sr-only">Toggle navigation</span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							        <span class="icon-bar"></span>
							      </button>
							      <a href="tel:1300 296 543" style="margin-top: 8px;" class="btn btn-success col-xs-8 col-xs-offset-1 hidden-lg hidden-md hidden-sm">
							      	<span class="glyphicon glyphicon-earphone"></span> <strong>1300 296 543</strong>
							      </a>
							    </div>
							    <!-- Collect the nav links, forms, and other content for toggling -->
							    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							      <ul class="nav navbar-nav">
							        <li id="home"><a href="/">Home <span class="sr-only">(current)</span></a></li>
							        <li class="dropdown" id="holiday-deals">
							            <a href="/deals" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Find a Holiday <span class="caret hidden-xs"></span></a>
							            <ul class="dropdown-menu hidden-xs">
							                <li id="cruise"><a href="/cruise">Find a Cruise</a></li>
									        <li id="tour"><a href="/tour">Find a Tour</a></li>
									        <li id="hotel"><a href="/hotel">Find a Hotel</a></li>
									        <li id="resort"><a href="/resort">Find a Resort</a></li>
							            </ul>
							        </li>							        
							        <li id="brochures"><a href="/free-brochures">Free Brochures</a></li>
							        <li id="holiday-parks" class="hidden-sm"><a href="/holiday-parks">Holiday Parks</a></li>
							        <li id="theme-parks" class="hidden-sm"><a href="/theme-parks">Theme Parks</a></li>
							        <li id="accommodation" class="hidden-md hidden-sm"><a href="/accommodation">Accommodation</a></li>
							        <li id="destinations" class="hidden-md hidden-sm"><a href="/destinations">Destinations</a></li>
							        <li id="quote"><a href="/request-quote">Quote</a></li>
							      </ul>
							    </div><!-- /.navbar-collapse -->
							  </div><!-- /.container-fluid -->
							</nav>
						</div>
					</div>
				</div>
	        </div>

	        @yield('header')

	    </div>
    </header>
	@yield('content')
	<section class="footer">
	    <div class="container">
	        <div class="row">
	        	<div class="col-lg-4 col-md-4 col-sm-4">
	            	<div class="footer_dv">
	                	<h4>Your next holiday</h4>
	                	<ul>
	                    	<li class="line_rv"><a href="/holiday-deals">Find a Holiday</a></li>
	                        <li><a href="/cruise">Find a Cruise</a></li>
	                        <li><a href="/tour">Find a Tour</a></li>
	                        <li><a href="/hotel">Find a Hotel</a></li>
	                        <li><a href="/resort">Find a Resort</a></li>
	                        <li><a href="/request-quote">Request a quote</a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-lg-4 col-md-4 col-sm-4">
	            	<div class="footer_dv">
	                	<h4>Find out more</h4>
	                	<ul>
	                    	<li><a href="/holiday-parks">Holiday Parks</a></li>
	                        <li><a href="/theme-parks">Theme Parks</a></li>
	                        <li><a href="/accomodation">Accomodation</a></li>
	                        <li><a href="/destinations">Destinations</a></li>
	                        <li><a href="/free-brochures">Free Brochures</a></li>
	                        <li><a href="/blog">Blog</a></li>
	                    </ul>
	                </div>
	            </div>
	            <div class="col-lg-offset-1 col-lg-3 col-md-offset-1 col-md-3 col-sm-4">
	            	<div class="footer_dv">
						<div class="row hidden-sm hidden-md hidden-lg">
							<div class="col-xs-12">
								<a href="tel:1300 296 543" style="margin-top: 8px;" class="btn btn-success col-xs-12">
						      		<span class="glyphicon glyphicon-earphone"></span> <strong>1300 296 543</strong>
						    	</a>
						    </div>
						</div>
						<div class="row padding-top-10">
							<div class="col-xs-12 phone hidden-xs">1300 296 543</div>
						</div>
						<div class="row padding-top-10 text-right">
							<div class="col-xs-12">
								<a href="https://www.facebook.com/BYOkids" target="_blank" class="social-btn facebook-small">Facebook</a>
								<a href="https://twitter.com/byokids" target="_blank" class="social-btn twitter-small">Twitter</a>
								<a href="https://www.youtube.com/user/BYOkids" target="_blank" class="social-btn youtube-small">Youtube</a>
								<a href="https://www.instagram.com/byokids/" target="_blank" class="social-btn instagram-small">Instagram</a>
							</div>
						</div>
						<p class="text-right padding-top-10"><a href="/contact-us">Contact Us</a></p>
	      			</div>
	            </div>
	        </div>
	    </div>
	</section>

	<span id="top-link-block" class="hidden">
	    <a href="#top" class="btn-read-more"  onclick="$('html,body').animate({scrollTop:0},'slow');return false;">
	        <i class="glyphicon glyphicon-chevron-up"></i> Back to Top
	    </a>
	</span>

	<div id="slideout" class="hidden-xs">
	  <img src="/img/stayintouch.png" alt="Feedback" />
	  <div class="text-center" id="mailBlock">
	  	<span class="glyphicon glyphicon-envelope" style="color: #fff;font-size: 16px;" aria-hidden="true"></span>
	  </div>
	  <div id="slideout_inner">
    	<h4 class="text-center text-uppercase" style="margin-top: 5px;"><strong>Subscribe to our <br />e-newsletter!</strong></h4>
    	<p class="text-center">Join our newsletter for exciting news and updates.</p>
    	<p class="text-center"><a href="/join-our-free-e-newsletter" class="btn btn-success"><strong>Subscribe Now!</strong></a></p>
	  </div>
	</div>

	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
	<script src="/js/bootstrap-datepicker.js"></script>
	<script src="/js/instafeed.min.js"></script>
	@yield('scripts')
	<script src="/js/jquery.backstretch.min.js"></script>
	<script src="/js/main.js"></script>
</body>
</html>
