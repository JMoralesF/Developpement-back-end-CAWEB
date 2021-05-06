@extends('layouts/layout')

@section('title', 'Detail of Task')

@section('main')
	<div class="task-list">
		<div class="card">
		<div class="card-header">
			<h3>{{ $task->title }}</h3>
		</div>
			<div class="card-content">
				<div class="content">
					
					<p>{{ $task->description }}</p>
					<br>
					
				</div>
			</div>
			<div class="card-footer">
				<p><?=date("M d Y",strtotime($task->created_at))?></p>
			</div>
		</div>
	</div>
@endsection