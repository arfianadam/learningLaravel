@extends('master')

@section('content')
<section style="margin:25px 0">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				{!! Form::model($post,['route'=>['post.update',$post->id]]) !!}
					<div class="form-group">
						<label for="title">Title</label>
						{!! Form::text('title',null,['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						<label for="desc">Description</label>
						{!! Form::text('desc',null,['class'=>'form-control']) !!}
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						{!! Form::textarea('content',null,['class'=>'form-control', 'id'=>'content']) !!}
					</div>
					<input type="submit" class="btn btn-default">
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@stop

@section('submenu')
<a href="{{ route('post.show', $post->id) }}" class="btn btn-primary">Return to Post</a>
@stop