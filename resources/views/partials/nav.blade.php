<nav class="navbar navbar-light navbar-expand-lg bg-white shadow-sm">
	<div class="container">
	<a class="navbar-brand" href="{{ route('home')}}">
		{{ config('app.name')}}
	</a>

	<button class="navbar-toggler"
	type="button"
	data-toggle="collapse"
	data-target="#navbarSupportedContent"
	aria-controls="navbarSupportedContent"
	aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
    <span class="navbar-toggler-icon"></span>
    </button>

	{{-- {{ dump(request()->url()) }} --}}   {{-- Illuminate\Http\Request --}}
		{{-- {{ dump(request()->path()) }}
		{{ dump(request()->routeIs('home')) }} --}}
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="nav nav-pills">
			<li class="nav-item">
				<a class="nav-link {{ setActive('home') }}"
				href="{{route('home')}}">@lang('Home')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('about') }}"
				href="{{route('about')}}">@lang('About')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('projects.*') }}"
				href="{{route('projects.index')}}">@lang('Projects')
				</a>
			</li>
			<li class="nav-item">
				<a class="nav-link {{ setActive('contact') }}"
				href="{{route('contact')}}">@lang('Contact')
				</a>
			</li>
			@auth
				<li class="nav-item">
					<a class="nav-link" href="#"  onclick="event.preventDefault();
				document.getElementById('logout-form').submit();">Cerrar sesión
			</a>
		</li>
			@else
				<li class="nav-item">
					<a class="nav-link {{ setActive('login') }}"
					href="{{ route('login')}}">Login</a>
				</li>

			@endauth
			{{-- <li class="{{ setActive('portfolio3') }}"><a href="{{route('portfolio3')}}">@lang('Portfolio') 3</a></li>
			<li class="{{ setActive('portfolio') }}"><a href="{{route('portfolio')}}">@lang('Portfolio')</a></li>
			--}}


			{{-- <li class="{{ request()->routeIs('home') ? 'active' : ''}}"><a href="{{route('home')}}">@lang('Home')</a></li>
			<li class="{{ request()->routeIs('about') ? 'active' : ''}}"><a href="{{route('about')}}">@lang('About')</a></li>
			<li class="{{ request()->routeIs('portfolio') ? 'active' : ''}}"><a href="{{route('portfolio')}}">@lang('Portfolio')</a></li>
			<li class="{{ request()->routeIs('projects2.*') ? 'active' : ''}}"><a href="{{route('projects2.index')}}">@lang('Portfolio') 2</a></li>
			<li class="{{ request()->routeIs('portfolio3') ? 'active' : ''}}"><a href="{{route('portfolio3')}}">@lang('Portfolio') 3</a></li>
			<li class="{{ request()->routeIs('contact') ? 'active' : ''}}"><a href="{{route('contact')}}">@lang('Contact')</a></li> --}}
		</ul>
	</div>
</div>
	</nav>

	<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
		@csrf
	</form>