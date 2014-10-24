@extends('site.layouts.default')

{{-- Content --}}
@section('content')

<div class="page-header">
	<div class="row">
		<div class="col-md-9">
			<h5>{{{ Lang::get('site.webservice_status') }}}</h5>
		</div>
	</div>
</div>

<div class="media-block">
	<ul class="list-group">

	  			<li class="list-group-item">
					<div class="media">
						@foreach($vars as $name)
							@if($vars[$name] == 'OK)
								<span type="submit" class="btn btn-success pull-right" role="button">{{$vars[$name]}}</span>
							@else
								<span type="submit" class="btn btn-danger pull-right" role="button">{{$vars[$name]}}</span>
							endif
							<div class="media-body">
								<h4 class="media-heading">{{$name}}
							</h4>
						</div>
						@endforeach
					</div>
				</li>
	</ul>
</div>

<div>
</div>

@stop
