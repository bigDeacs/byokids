@extends('app')

@section('meta')
	<title>BYOkids | join our Free E-Newsletter</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container padding-top-20 text-center">
		<p>Enter your details below to recieve a free subscription to our BYOkids monthly e-newsletter plus access to our free brochure service. 
			We'll keep you up to date with whats happening in family travel including the latest deals, great destinations, reviews, tips, competitions and holiday packages and plenty more... 
			Don't trust your family holiday to just anyone! BYOkids know what families need!</p>
		<br />
		<!-- Begin MailChimp Signup Form -->
		<style type="text/css">
			#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
			/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
			   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */

		   input[type=checkbox] {
				visibility: hidden;
			}
		</style>
		<div id="mc_embed_signup">
		<form action="//byokids.us3.list-manage.com/subscribe/post?u=18ee35d9dc929b596da79109f&amp;id=bcec1e113c" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
		    <div id="mc_embed_signup_scroll">
				<h2>Subscribe to our mailing list</h2>
				<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>		
				<div class="row form-group">
					<div class="mc-field-group col-xs-12 col-sm-6" style="padding-bottom: 0;">
						<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span></label>
						<input type="email" value="" name="EMAIL" class="required email form-control" id="mce-EMAIL">
					</div>
					<div class="mc-field-group col-xs-12 col-sm-6" style="padding-bottom: 0;">
						<label for="mce-FNAME">First Name  <span class="asterisk">*</span></label>
						<input type="text" value="" name="FNAME" class="required form-control" id="mce-FNAME">
					</div>
				</div>
				<div class="row">
					<div class="mc-field-group checkbox col-xs-12" style="padding-bottom: 0;">
				    	<div class="squaredOne" style="float: left;margin: 0 15px;">
							<input type="checkbox" value="None" name="CONFIRM" class="required" id="mce-CONFIRM" style="width: auto;" />
							<label for="mce-CONFIRM" style="display: inline-block;"></label>
						</div>
				    	<p>I have read and understand the <a href="/legal" target="_blank">Privacy Policy</a></p>
				  	</div>
				</div>
				<div class="row">
				  	<div class="col-xs-12">
				  		<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="btn btn-primary" style="width: 90%;font-weight:bold;">
				  	</div>
				</div>

				<div id="mce-responses" class="clear">
					<div class="response" id="mce-error-response" style="display:none"></div>
					<div class="response" id="mce-success-response" style="display:none"></div>
				</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_18ee35d9dc929b596da79109f_bcec1e113c" tabindex="-1" value=""></div>
		    </div>
		</form>
		</div>
		<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
		<script type='text/javascript'>
			(function($) {
				window.fnames = new Array(); 
				window.ftypes = new Array();
				fnames[1]='FNAME';
				ftypes[1]='text';
				fnames[0]='EMAIL';
				ftypes[0]='email';
				fnames[3]='CONFIRM';
				ftypes[3]='text';
			}
			(jQuery));
			var $mcj = jQuery.noConflict(true);
		</script>
		<!--End mc_embed_signup-->
	</div>
@endsection

@section('scripts')
	<script>$("#newsletter").addClass("active");</script>
@endsection