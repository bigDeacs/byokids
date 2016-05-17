@extends('app')

@section('meta')
	<title>BYOkids | {!! $deal['deal_name'] !!}</title>
	<meta property="og:title"              content="{!! $deal['deal_name'] !!}" />
    <meta property="og:description"        content="{!! strip_tags($deal['description']) !!}" />
    <meta property="og:image"              content="{!! $deal['image'] !!}" />
@endsection

@section('head')
	<link rel="stylesheet" href="{{ asset('/css/rrssb.css') }}" />
@endsection

@section('content')
	<div class="container padding-top-20">
		<div class="row">
			@if(isset($deal))
				<div class="col-md-3 col-md-push-9 col-sm-4 col-sm-push-8 col-xs-12">
			        <p><img src="{!! $deal['image'] !!}" alt="{!! $deal['deal_name'] !!}" class="img-responsive" /></p>
				    <hr />
				    @if($enquire)
				    	<h4>Request a Quote</h4>
						<p class="hidden-xs">Here at BYOkids we have dedicated travel and cruise teams that can arrange your family holiday anywhere within Australia or the world.</p>
				    	<a href="/request-quote/{!! $deal['deal_name'] !!}" style="margin-top: 8px;" class="btn btn-danger btn-block">
				    		<strong>Find Out More</strong>
				    	</a>
				    	<hr />
				    @endif
					<h4>Order FREE Travel Brochures</h4>
					<p class="hidden-xs">When you're planning your dream holiday, you want the help of the experts, don't you? Well, you're in luck. We've gathered together the pick of Australia's holiday specialists to help you plan and enjoy the holiday you deserve.</p>
				    <a href="http://byokids.travelbrochures.com.au/napp/show/Home.htm" target="_blank" style="margin-top: 8px;" class="btn btn-info btn-block">
			    		<strong>Find Out More</strong>
			    	</a>
			    	<hr />
			    	<h4>Share this page</h4>
					<p class="hidden-xs">Love this? Why not let your friends know. Share this page today!</p>
			    	<!-- Buttons start here. Copy this ul to your document. -->
					<ul class="rrssb-buttons clearfix">
					  <li class="rrssb-facebook">
					    <!--  Replace with your URL. For best results, make sure you page has the proper FB Open Graph tags in header: https://developers.facebook.com/docs/opengraph/howtos/maximizing-distribution-media-content/ -->
					    <a href="https://www.facebook.com/sharer/sharer.php?u={!! Request::url() !!}" class="popup">
					      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 29 29"><path d="M26.4 0H2.6C1.714 0 0 1.715 0 2.6v23.8c0 .884 1.715 2.6 2.6 2.6h12.393V17.988h-3.996v-3.98h3.997v-3.062c0-3.746 2.835-5.97 6.177-5.97 1.6 0 2.444.173 2.845.226v3.792H21.18c-1.817 0-2.156.9-2.156 2.168v2.847h5.045l-.66 3.978h-4.386V29H26.4c.884 0 2.6-1.716 2.6-2.6V2.6c0-.885-1.716-2.6-2.6-2.6z"/></svg></span>
					      <span class="rrssb-text">facebook</span>
					    </a>
					  </li>
					  <li class="rrssb-twitter">
					    <!-- Replace href with your Meta and URL information  -->
					    <a href="https://twitter.com/intent/tweet?text={!! Request::url() !!}"
					    class="popup">
					      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M24.253 8.756C24.69 17.08 18.297 24.182 9.97 24.62a15.093 15.093 0 0 1-8.86-2.32c2.702.18 5.375-.648 7.507-2.32a5.417 5.417 0 0 1-4.49-3.64c.802.13 1.62.077 2.4-.154a5.416 5.416 0 0 1-4.412-5.11 5.43 5.43 0 0 0 2.168.387A5.416 5.416 0 0 1 2.89 4.498a15.09 15.09 0 0 0 10.913 5.573 5.185 5.185 0 0 1 3.434-6.48 5.18 5.18 0 0 1 5.546 1.682 9.076 9.076 0 0 0 3.33-1.317 5.038 5.038 0 0 1-2.4 2.942 9.068 9.068 0 0 0 3.02-.85 5.05 5.05 0 0 1-2.48 2.71z"/></svg></span>
					      <span class="rrssb-text">twitter</span>
					    </a>
					  </li>
					  <li class="rrssb-googleplus">
				        <!-- Replace href with your meta and URL information.  -->
				        <a href="https://plus.google.com/share?url={!! Request::url() !!}" class="popup">
				          <span class="rrssb-icon">
				            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 8.29h-1.95v2.6h-2.6v1.82h2.6v2.6H21v-2.6h2.6v-1.885H21V8.29zM7.614 10.306v2.925h3.9c-.26 1.69-1.755 2.925-3.9 2.925-2.34 0-4.29-2.016-4.29-4.354s1.885-4.353 4.29-4.353c1.104 0 2.014.326 2.794 1.105l2.08-2.08c-1.3-1.17-2.924-1.883-4.874-1.883C3.65 4.586.4 7.835.4 11.8s3.25 7.212 7.214 7.212c4.224 0 6.953-2.988 6.953-7.082 0-.52-.065-1.104-.13-1.624H7.614z"/></svg>            </span>
				          <span class="rrssb-text">google+</span>
				        </a>
				      </li>
				      <li class="rrssb-email">
					    <!-- Replace subject with your message using URL Endocding: http://meyerweb.com/eric/tools/dencoder/ -->
					    <a href="mailto:?subject={!! $deal['deal_name'] !!}&body={!! Request::url() !!}">
					      <span class="rrssb-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 28 28"><path d="M20.11 26.147c-2.335 1.05-4.36 1.4-7.124 1.4C6.524 27.548.84 22.916.84 15.284.84 7.343 6.602.45 15.4.45c6.854 0 11.8 4.7 11.8 11.252 0 5.684-3.193 9.265-7.398 9.3-1.83 0-3.153-.934-3.347-2.997h-.077c-1.208 1.986-2.96 2.997-5.023 2.997-2.532 0-4.36-1.868-4.36-5.062 0-4.75 3.503-9.07 9.11-9.07 1.713 0 3.7.4 4.6.972l-1.17 7.203c-.387 2.298-.115 3.3 1 3.4 1.674 0 3.774-2.102 3.774-6.58 0-5.06-3.27-8.994-9.304-8.994C9.05 2.87 3.83 7.545 3.83 14.97c0 6.5 4.2 10.2 10 10.202 1.987 0 4.09-.43 5.647-1.245l.634 2.22zM16.647 10.1c-.31-.078-.7-.155-1.207-.155-2.572 0-4.596 2.53-4.596 5.53 0 1.5.7 2.4 1.9 2.4 1.44 0 2.96-1.83 3.31-4.088l.592-3.72z"/></svg></span>
					      <span class="rrssb-text">email</span>
					    </a>
					  </li>
					</ul>
					<!-- Buttons end here -->
				    <hr />
				</div>
				<div class="col-md-9 col-md-pull-3 col-sm-8 col-sm-pull-4 col-xs-12">
					<h1><strong>{!! $deal['deal_name'] !!}</strong></h1>
					@if($deal['promo_text'])<p><strong>"{!! $deal['promo_text'] !!}"</strong></p>@endif
					<p><strong>Description & Itinerary:</strong></p>
					<p>{!! $deal['description'] !!}</p>
					<p>{!! $deal['itinerary'] !!}</p>					
					<div class="row">
						<div class="col-sm-6">
							<p><strong>Cruise Line:</strong> {!! $deal['cruise_line'] !!}</p>
							<p><strong>Cruise Ship:</strong> {!! $deal['deal_ship'] !!}</p>
							<p><strong>Cabin Category:</strong> {!! $deal['category'] !!}</p>
							<p><strong>Cabin Type:</strong> {!! $deal['cabin_type'] !!}</p>
						</div>
						<div class="col-sm-6">
							<p><strong>Promo Code:</strong> {!! $deal['promo_code'] !!}</p>
							<p><strong>Duration:</strong> {!! $deal['duration'] !!}</p>
							<p><strong>Destination:</strong> {!! $deal['destination'] !!}</p>
							<p><strong>{!! $deal['ports'] !!}</strong></p>
						</div>
					</div>
					<p>*Conditions apply. Call for further details.</p>
					<hr />
					<p><strong>You might also like: </strong></p>
					<div class="row">
						<?php $count = 0; ?>
						@foreach($cruises as $cruise)
							@if($cruise['code'] !== $deal['promo_code'])
								<div class="col-sm-4 col-xs-12">
							        <a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}">
							        	<div class="ratio-1-1" style="background-image:url({!! $cruise['image'] !!})"></div>
							        </a>
									<div class="row">
										<div class="col-xs-12 text-center">
				                        	<p><strong><a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}" class="post-title" title="{!! $cruise['name'] !!}">
				                        		{!! str_limit($cruise['name'], $limit = 30, $end = '...') !!}
				                        	</a></strong></p>
				                    	</div>
				                    </div>
									<p>{!! $cruise['destination'] !!}</p>
									<p>{!! $cruise['provider'] !!}, {!! $cruise['ship'] !!}</p>
									<p class="text-right"><a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}" class="btn btn-read-more">Read More</a></p>
								</div>
							<?php $count ++; ?>
							@endif
							<?php if($count > 2) { break; } ?>
						@endforeach
					</div>
				</div>
			@else
				error
			@endif
		</div>
	</div>
@endsection

@section('scripts')
	<script>$("#cruise").addClass("active");</script>
	<script src="/js/rrssb.min.js"></script>
@endsection