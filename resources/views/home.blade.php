@extends('master')

@section('content')
<section>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				@foreach ($posts as $post)
				<div class="article" style="margin:20px 0">
					<h3><a href="{{ route('post.show', $post->id) }}">{{ $post->title }}</a></h3>
					<p>{{ $post->desc }}</p>
				</div>
				<hr>
				@endforeach
			</div>
		</div>
	</div>
</section>
@stop

@section('submenu')
<a href="{{ route('post.create') }}" class="btn btn-primary">New Article</a>
@stop