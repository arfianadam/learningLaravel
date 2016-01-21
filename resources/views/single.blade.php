@extends('master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h3 style="margin-bottom:25px">{{ $post->title }}</h3>
				{!! $post->content !!}
			</div>
		</div>
	</div>
</section>
@stop

@section('submenu')
<a href="{{ route('post.index') }}" class="btn btn-primary">Return to Main Menu</a>
<a href="{{ route('post.edit', $post->id) }}" class="btn btn-default">Edit</a>
<a href="{{ route('post.delete', $post->id) }}" class="btn btn-danger">Delete</a>
@stop