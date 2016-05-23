@extends('app')

@section('meta')
	<title>BYOkids | Contact Us</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container padding-top-20 text-center">
		<p>Here at BYOkids we have dedicated travel and cruise teams that can arrange your family holiday anywhere within Australia or the world. The packages we promote on our website and Facebook page are just a small selection on what we have on offer so complete your enquiry form with your travel wish list and as much detail as possible so our consultants can find you the very best deal available.</p>
		<p class="hidden-xs">Once submitted one of our team will reply within 1 business days.&nbsp;&nbsp; We will call you on the number provided. Our call may display as a No Caller ID number so look out for our call and please pick up as we'd love to chat to you!</p>	
		<br /><br />
		<iframe src="http://www.callback.ourvacationcentre.com.au/?company=byokids&amp;width=&amp;options=true&amp;timeoption=true&amp;showname=true&amp;description=true&amp;contactoptions=true&amp;nls=true" style="width:100%; height:500px; border: 0px"></iframe>
	</div>
@endsection

@section('scripts')
	<script>$("#contact").addClass("active");</script>
@endsection