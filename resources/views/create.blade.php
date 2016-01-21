@extends('master')

@section('content')
<section style="margin:25px 0">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				{!! Form::open(['route'=>'post.store']) !!}
					<div class="form-group">
						<label for="title">Title</label>
						<input type="text" class="form-control" placeholder="Title" name="title">
					</div>
					<div class="form-group">
						<label for="desc">Description</label>
						<input type="text" class="form-control" placeholder="Description" name="desc">
					</div>
					<div class="form-group">
						<label for="content">Content</label>
						<textarea class="form-control" name="content" id="content"></textarea>
					</div>
					<input type="submit" class="btn btn-default">
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</section>
@stop

@section('submenu')
<a href="{{ route('post.index') }}" class="btn btn-primary">Return to Main Menu</a>
@stop