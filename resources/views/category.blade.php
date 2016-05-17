@extends('app')

@section('meta')
	<title>BYOkids | {!! $parent !!}</title>
@endsection

@section('head')
@endsection

@section('content')
	<div class="container padding-top-20">
		@if($content)
			<div class="row">
				@foreach($content as $entry)
					<div class="col-xs-12 padding-top-10">
	                    <div class="row post-content">
							<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
						        <a href="/{!! str_slug($parent) !!}/{!! $entry->post_name !!}">
									<div class="ratio-1-1" style="background-image:url({!! wp_get_attachment_image_src(get_post_thumbnail_id($entry->ID), 'homepage-thumb-retina')[0] !!})"></div>
						        </a>
						    </div>
							<div class="col-lg-10 col-md-9 col-sm-8 col-xs-12">
								<p class="blog-header"><strong><a href="/{!! str_slug($parent) !!}/{!! $entry->post_name !!}" class="post-title">{!! $entry->post_title !!}</a></strong></p>
								<p>{!! str_limit(strip_tags($entry->post_content), $limit = 450, $end = '...') !!}</p>
								<p class="text-right"><a href="/{!! str_slug($parent) !!}/{!! $entry->post_name !!}" class="btn btn-read-more">Read More</a></p>
							</div>
						</div>
					</div>
				@endforeach

				<nav>
					<ul class="pager">
				    	@if($current_page > 1)
					    	<li class="previous"><a href="/{!! str_slug($parent) !!}/page/{!! $current_page -1 !!}"><strong><span aria-hidden="true">&larr;</span> Previous</strong></a></li>
					    @else
				    		<li class="previous disabled"><a href="#"><strong><span aria-hidden="true">&larr;</span> Previous</strong></a></li>
					    @endif
						@if($max_pages > $current_page)
				    		<li class="next"><a href="/{!! str_slug($parent) !!}/page/{!! $current_page +1 !!}"><strong>Next <span aria-hidden="true">&rarr;</span></strong></a></li>
				    	@else
				    		<li class="next disabled"><a href="#"><strong>Next <span aria-hidden="true">&rarr;</span></strong></a></li>
				    	@endif
					</ul>
				</nav>

			</div>
			<hr />
		@else
			<div class="row">
				<div class="col-xs-12 padding-top-10">
                    Nothing found!
				</div>
			</div>
			<hr />
		@endif
	</div>
@endsection

@section('scripts')
	<script>$("#{!! str_slug($parent) !!}").addClass("active");</script>
@endsection