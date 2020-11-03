@extends('layout')

@section('title', 'Portfolio')

@section('content')
<h1>Projects con Controlador: Normal</h1>

<ul>
		@forelse ($projects as $project)
	  		<li><a href="{{ route('projects2.show', $project)}}">{{$project->title}}</a></li>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
		{{$projects->links()}}
</ul>


{{-- <ul>
		@forelse ($projects as $project)
	  		<li>{{$project->title}}<br><small>{{$project->description}}</small><br>{{$project->created_at->format('Y-m-d')}}<br>{{$project->updated_at}}</li><br>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
		{{$projects->links()}}
</ul> --}}


@endsection