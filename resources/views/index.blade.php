@extends('layouts/layout')

@section('title', 'List of Tasks')

@section('main')
<div class="flash-message">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
      @if(Session::has('alert-' . $msg))

      <p class="alert alert-{{ $msg }}">{{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a></p>
      @endif
    @endforeach
  </div> <!-- end .flash-message -->
	<div class="task-list">
		@foreach($tasks as $task)
		<div class="card">
			<div class="card-content">
				<div class="content">
					<h3>{{ $task->title }}</h3>
				</div>
			</div>
			<div class="card-footer">
			<div class="col-lg-3">
				<a href="/task/{{ $task->id }}" class="">Show task ></a>
				</div>
				<div class="col-lg-6"></div>
				<div class="col-lg-3">
				<div class="" style="float: right;">
				<a  href="/task/delete/{{ $task->id }}" class="btn btn-danger"><i class="fa fa-trash"></i> Delete</a>
				</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
@endsection