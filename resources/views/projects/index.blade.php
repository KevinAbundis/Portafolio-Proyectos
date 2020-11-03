@extends('layout')

@section('title', 'Proyectos')

@section('content')
<div class="container">
<div class="d-flex justify-content-between align-items-center ">
	<h1 class="display-4 mb-0">@lang('Projects') </h1>
	@auth
		<a class="btn btn-primary" href="{{ route('projects.create') }}">
			Crear Proyecto
		</a>
	@endauth
</div>
<hr>

	<p class="lead text-secondary">Proyectos realizados por Kevin Leonel Abundis Morales.</p>

{{-- @include('partials.session-status') --}}

<ul class="list-group">
		@forelse ($projects as $project)
	  		<li class="list-group-item border-0 mb-3 shadow-sm">
	  			<a class="text-secondary d-flex justify-content-between align-item-center" href="{{ route('projects.show', $project)}}">
	  				<span class=" font-weight-bold">{{$project->title}}</span>
	  				<span class="text-black-50">{{$project->created_at->format('d/m/Y')}}</span>
	  			</a>
	  		</li>
	  	@empty
		  	<li class="list-group-item border-0 mb-3 shadow-sm">
		  		No hay proyectos para mostrar.
		  	</li>
		@endforelse
		{{$projects->links()}}
</ul>
</div>


{{-- <ul>
		@forelse ($projects as $project)
	  		<li>{{$project->title}}<br><small>{{$project->description}}</small><br>{{$project->created_at->format('Y-m-d')}}<br>{{$project->updated_at}}</li><br>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
		{{$projects->links()}}
</ul> --}}


@endsection