@extends('app')

@section('meta')
	<title>BYOkids | Your Family Travel Gurus</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container padding-top-20">
		<div class="row">
			<div class="col-xs-12 padding-top-10">
				@foreach($cruises as $cruise)
	                <div class="row post-content">
						<div class="col-lg-2 col-md-3 col-xs-12">
					        <a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $cruise['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-md-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}" class="post-title">{!! $cruise['name'] !!}</a></strong></p>
							<p>{!! $cruise['destination'] !!}</p>
							<p>{!! $cruise['provider'] !!}, {!! $cruise['ship'] !!}</p>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}" class="dealPrice">
									${!! number_format($cruise['price']) !!}*<br />
									<span class="priceSubtext">per person</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('http://www.byokids.com.au/cruise-deal?id=','http://byokids.dev/cruise-deal/', $cruise['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
				@foreach($resorts as $resort)
	                <div class="row post-content">
						<div class="col-lg-2 col-md-3 col-xs-12">
					        <a href="{!! str_replace('?id=','/', $resort['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $resort['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-md-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('?id=','/', $resort['url']) !!}" class="post-title">{!! $resort['deal_name'] !!}*<br />per {!! $resort['per'] !!}</a></strong></p>
							<p>{!! $resort['destination'] !!}</p>			
							<p>{!! $resort['Property'] !!}</p>				
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('?id=','/', $resort['url']) !!}" class="dealPrice">
									${!! number_format($resort['price']) !!}*<br />
									<span class="priceSubtext">{!! $resort['per'] !!}</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('?id=','/', $resort['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
				@foreach($tours as $tour)
	                <div class="row post-content">
						<div class="col-lg-2 col-md-3 col-xs-12">
					        <a href="{!! str_replace('?id=','/', $tour['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $tour['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-md-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('?id=','/', $tour['url']) !!}" class="post-title">{!! $tour['deal_name'] !!}</a></strong></p>
							<p>{!! $tour['region'] !!}</p>
							<p>{!! $tour['provider'] !!}</p>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('?id=','/', $tour['url']) !!}" class="dealPrice">
									${!! number_format($tour['price']) !!}*<br />
									<span class="priceSubtext">per person</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('?id=','/', $tour['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
				@foreach($packages as $package)
	                <div class="row post-content">
						<div class="col-lg-2 col-md-3 col-xs-12">
					        <a href="{!! str_replace('?id=','/', $package['url']) !!}">
					        	<div class="ratio-1-1" style="background-image:url({!! $package['image'] !!})"></div>
					        </a>
					    </div>
						<div class="col-lg-6 col-md-5 col-xs-12">
							<p class="blog-header"><strong><a href="{!! str_replace('?id=','/', $package['url']) !!}" class="post-title">{!! $package['deal_name'] !!}*<br />per {!! $package['per'] !!}</a></strong></p>
							<p>{!! $package['destination'] !!}</p>							
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p style="margin-top: 40px;text-align: center;">
								<a href="{!! str_replace('?id=','/', $package['url']) !!}" class="dealPrice">
									${!! number_format($package['price']) !!}*<br />
									<span class="priceSubtext">per {!! $package['per'] !!}</span>
								</a>
							</p>
						</div>
						<div class="col-lg-2 col-md-2 col-xs-12">
							<p class="readmoreIndex"><a href="{!! str_replace('?id=','/', $package['url']) !!}" class="btn btn-read-more">Read More</a></p>
						</div>
					</div>
					<hr />
				@endforeach
			</div>
		</div>


	</div>
	
@endsection

@section('scripts')
	<script>
		$("#home").addClass("active");
	</script>
@endsection