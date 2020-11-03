@extends('layout')

@section('title', 'Portfolio 3')

@section('content')
<h1>Portfolio 3 con Controlador: API</h1>

<ul>
	<?php foreach ($portfolio3 as $portfolio3Item) {
		echo "<li>". $portfolio3Item['tile']."</li>";
	}
	?>
</ul>

<ul>
	<?php foreach ($portfolio3 as $portfolio3Item): ?>
	<li>{{$portfolio3Item['tile']}}</li>
	<?php endforeach ?>
</ul>

<ul>
	@foreach ($portfolio3 as $portfolio3Item)
	<li>{{$portfolio3Item['tile']}}</li>
	@endforeach
</ul>


<ul>
	@if($portfolio3)
			@foreach ($portfolio3 as $portfolio3Item)
			<li>{{$portfolio3Item['tile']}}</li>
			@endforeach
	@else
			<li>No hay proyectos para mostrar</li>
	@endif
</ul>

<ul>
	@isset($portfolio3)
			@foreach ($portfolio3 as $portfolio3Item)
		  	<li>{{$portfolio3Item['tile']}}</li>
			@endforeach
	@else
			<li>No hay proyectos para mostrar</li>
	@endisset
</ul>

<ul>
		@forelse ($portfolio3 as $portfolio3Item)
	  		<li>{{$portfolio3Item['tile']}}</li>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
</ul>

<ul>
		@forelse ($portfolio3 as $portfolio3Item)
	  		<li>{{$portfolio3Item['tile']}} <pre>{{ var_dump($loop) }}</pre></li>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
</ul>

<ul>
		@forelse ($portfolio3 as $portfolio3Item)
	  		<li>{{$portfolio3Item['tile']}} <pre>{{ $loop->last ? 'Es el último elemento' : '' }}</pre></li>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
</ul>

<ul>
		@forelse ($portfolio3 as $portfolio3Item)
	  		<li>{{$portfolio3Item['tile']}} <small>{{ $loop->first ? 'Es el primer elemento' : '' }}</small></li>
	  	@empty
		  	<li>No hay proyectos para mostrar</li>
		@endforelse
</ul>


@endsection