@extends('app')

@section('meta')
	<title>BYOkids | Hotels</title>
@endsection

@section('head')
@endsection

@section('content')
	@if(isset($params['destination']))
		<iframe class="frame-hotel" frameborder="0" height="1200" src="http://hotels.byokids.com.au/en/search/?checkInDate={!! $params['checkin'] !!}&checkOutDate={!! $params['checkout'] !!}&searchCategory=1&product=Hotel&action=Init&cityid={!! $params['destination'] !!}" width="100%"></iframe>
		<!-- date format yyyy-mm-dd -->
	@else
		<iframe class="frame-hotel" frameborder="0" height="1200" src="http://hotels.byokids.com.au" width="100%"></iframe>
	@endif

@endsection

@section('scripts')
	<script>$("#holiday-deals").addClass("active");$("#hotel").addClass("active");</script>
@endsection