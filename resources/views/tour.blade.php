@extends('app')

@section('meta')
	<title>BYOkids | Tours</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container">
        <div class="row">
        	<div class="col-xs-12">
				@if(isset($params))
					<iframe class="cruise" frameborder="0" height="2500" src="http://ourvacationcentre.net/cms/iframes/byokids/?Provider={!! $params['provider'] !!}&Region={!! $params['destination'] !!}&dur={!! $params['duration'] !!}" width="100%"></iframe>
				@else
					<iframe class="cruise" frameborder="0" height="2500" src="http://ourvacationcentre.net/cms/iframes/byokids/?Provider=&Region=1" width="100%"></iframe>
				@endif
			</div>
		</div>
	</div>
@endsection

@section('scripts')
	<script>$("#holiday-deals").addClass("active");$("#tour").addClass("active");</script>
@endsection