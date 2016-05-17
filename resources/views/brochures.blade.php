@extends('app')

@section('meta')
	<title>BYOkids | Free Brochures</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container padding-top-20 text-center">
		@if(isset($content))
			@foreach($content as $post)
				{!! $post->post_content !!}
			@endforeach
		@else
			error
		@endif
	</div>
@endsection

@section('scripts')
	<script>$("#brochures").addClass("active");</script>
@endsection