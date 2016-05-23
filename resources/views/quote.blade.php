@extends('app')

@section('meta')
	<title>BYOkids | Request a quote</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container padding-top-20 text-center">
		<p>Here at BYOkids we have dedicated travel and cruise teams that can arrange your family holiday anywhere within Australia or the world. The packages we promote on our website and Facebook page are just a small selection on what we have on offer so complete your enquiry form with your travel wish list and as much detail as possible so our consultants can find you the very best deal available.</p>
		<p class="hidden-xs">Once submitted one of our team will reply within 1 business days.&nbsp;&nbsp; We will call you on the number provided. Our call may display as a No Caller ID number so look out for our call and please pick up as we'd love to chat to you!</p>
		
		<a href="http://www.byokids.com.au/{!! $params['type'] !!}/{!! $params['slug'] !!}">http://www.byokids.com.au/{!! $params['type'] !!}/{!! $params['slug'] !!}</a>
		<br /><br />
		<iframe src="http://www.callback.ourvacationcentre.com.au/?company=byokids&amp;width=&amp;options=true&amp;timeoption=true&amp;showname=true&amp;description=true&amp;contactoptions=true&amp;nls=true" style="width:100%; height:500px; border: 0px"></iframe>
		<!--
			<form action="/request-quote" method="POST">
	    		<input type="hidden" name="_token" value="{{ csrf_token() }}">
	    		<input type="hidden" name="deal" value="http://www.byokids.com.au/{!! $params['type'] !!}/{!! $params['slug'] !!}">
	    		
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="text" class="form-control" name="fname" placeholder="First Name" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="text" class="form-control" name="lname" placeholder="Surname" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="email" class="form-control" name="email" placeholder="Email" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="text" class="form-control" name="suburb" placeholder="Suburb" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="text" class="form-control" name="phone" placeholder="Daytime Phone Number" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12" style="font-size: 14px;line-height: 35px;text-align: left;">
					<input type="radio" name="department" value="cruise" checked> Cruise <input type="radio" name="department" value="travel"> Travel
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="number" class="form-control" name="adults" min="1" max="5" placeholder="Number of Adults" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				   	<input type="number" class="form-control" name="children" min="1" max="5" placeholder="Number of Children" required>
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				    <input type="text" class="form-control" name="ages" placeholder="Children's Ages">
				</div>
				<div class="form-group col-sm-4 col-xs-12">
				  	<div class='input-group'>
	                    <input type="text" autocomplete="off" name="departure" data-date-format="dd-mm-yyyy" class="form-control datepicker" placeholder="Departure Date" required>
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                </div>
	  			</div>
	  			<div class="form-group col-sm-4 col-xs-12">
				  	<div class='input-group'>
	                    <input type="text" autocomplete="off" name="return" data-date-format="dd-mm-yyyy" class="form-control datepicker" placeholder="Return Date" required>
	                    <span class="input-group-addon">
	                        <span class="glyphicon glyphicon-calendar"></span>
	                    </span>
	                </div>
	  			</div>
	  			<div class="form-group col-sm-4 col-xs-12">
				    <input type="text" class="form-control" name="city" placeholder="Departure city">
				</div>
				<div class="form-group col-xs-12">
				    <textarea name="comments" class="form-control" placeholder="Comments" rows="10"></textarea>
				</div>
				<button type="submit" class="btn btn-success btn-block text-uppercase">Enquire Now</button>
			</form>
		-->
	</div>
@endsection

@section('scripts')
	<script>$("#quote").addClass("active");</script>
	<script>
		$('.datepicker').datepicker({
			todayHighlight: true
		});
	</script>
@endsection