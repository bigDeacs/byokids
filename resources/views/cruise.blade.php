@extends('app')

@section('meta')
	<title>BYOkids | Cruises</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container">
        <div class="row">
        	<div class="col-xs-12">
				@if(isset($params))
					<iframe class="cruise" frameborder="0" height="3500" src="http://cruise.ovscruise.com/cruises/cruisedefault2.jsp?cobrand=36641&pid=35268&langrecno=1&pin=39&destination={!! $params['destination'] !!}&dur={!! $params['duration'] !!}&cruiseline={!! $params['cruiseline'] !!}&date={!! $params['date'] !!}&webpagerecno=5567" width="100%"></iframe>
				@else
					<iframe class="cruise" frameborder="0" height="3500" src="http://cruise.ovscruise.com/cruises/cruises.jsp?cobrand=36641&pin=39" width="100%"></iframe>
				@endif
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>$("#holiday-deals").addClass("active");$("#cruise").addClass("active");</script>
@endsection