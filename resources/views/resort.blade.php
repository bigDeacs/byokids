@extends('app')

@section('meta')
	<title>BYOkids | Resorts</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container">
        <div class="row">
        	<div class="col-xs-12">
				@if(isset($params))
					<iframe class="cruise" frameborder="0" height="6800" src="http://www.ovsresort.com/resorts/resortdefault8.jsp?cobrand=1129766&checkin={!! $params['checkin'] !!}&localegroupnamerecno=4&destination={!! $params['destination'] !!}&minunitsize=H&location={!! $params['location'] !!}&searchtype=1&pricefiltermode=0&searched=true&pricefilter=0.0&webpagerecno=1140" width="100%"></iframe>
				@else
					<iframe class="cruise" frameborder="0" height="6800" src="http://www.ovsresort.com/resorts/resorts.jsp?cobrand=1129766" width="100%"></iframe>
				@endif
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>$("#holiday-deals").addClass("active");$("#resort").addClass("active");</script>
@endsection