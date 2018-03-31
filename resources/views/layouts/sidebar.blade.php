@section('sidebar')
<body class="navbar-top">
	<div class="navbar navbar-inverse navbar-fixed-top bg-primary-800">
		<div class="navbar-header">
			<a class="navbar-brand" href="{{ route('home') }}"><img src="{{ asset('assets/images/logo_light.png') }}" alt=""></a>
			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>
		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
			<div class="navbar-right">
				@foreach ($clubs as $club)
	         @endforeach
				<p class="navbar-text"<span class="label bg-primary-400">{{$club->nombre_club}}</span></p>
				<p class="navbar-text"><span class="label bg-success-400">Online</span></p>
				<ul class="nav navbar-nav">
					<li class="dropdown dropdown-user">
						<a class="dropdown-toggle" data-toggle="dropdown">
							@if (Auth::user()->foto_user)
								<img src="{{ Auth::user()->foto_user }}" alt="">
							@else
								<img src="{{ asset('assets/images/avatar/avatar_user.png') }}" alt="">
							@endif
							<span>{{ Auth::user()->nombre_user }}  {{ Auth::user()->apellidos_user }}</span>
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu dropdown-menu-right">
							<li><a href="{{ route('logout') }}" class="dropdown-item"
							  onclick="event.preventDefault();
										document.getElementById('logout-form').submit();"><i class="fa fa-power-off"></i> Salir</a>
							</li></a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
							  {{ csrf_field() }}
							</form>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="page-container">
		<div class="page-content">
			<div class="sidebar sidebar-main sidebar-fixed bg-slate-600">
	{{-- <div class="sidebar sidebar-main sidebar-fixed"> --}}
				<div class="sidebar-content">
					<div class="sidebar bg-indigo-300">
						<div class="category-content">
							<div class="sidebar-user-material-content">
								@if (Auth::user()->foto_user)
									<a href="{{ route('home') }}"><img src="{{ Auth::user()->foto_user }}" class="img-circle img-responsive" alt=""></a>
								@else
									<a href="{{ route('home') }}"><img src="{{ asset('assets/images/avatar/avatar_user.png') }}" class="img-circle img-responsive" alt=""></a>
								@endif
								<h6>{{ Auth::user()->nombre_user }}</h6>
								<span class="text-size-small">{{ Auth::user()->rol_user }}</span>
							</div>
						</div>
					</div>
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">
									<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
									<li><a href="{{ route('home') }}"><i class="icon-home4"></i><span>&nbsp;&nbsp;Inicio</span></a></li>
								@if (Auth::user()->rol_user == 'administrador')
								<li class="navigation-header"><span>Administración general</span> <i class="icon-menu" title="Forms"></i></li>
								<li><a href="{{ route('users.index') }}"><i class="icon-user-tie"></i><span>&nbsp;&nbsp;Entrenadores</span></a></li>
								<li><a href="{{ route('jugadores.index') }}"><i class="icon-users4"></i><span>Jugadores</span></a></li>
								<li><a href="{{ route('equipos.index') }}"><i class="icon-server"></i><span>&nbsp;&nbsp;Equipos</span></a></li>

								<li class="navigation-header"><span>Entrenador</span> <i class="icon-menu" title="Forms"></i></li>
								<li><a href="{{ route('partidos.index') }}"><i class="fa fa-futbol-o"></i><span>&nbsp;&nbsp;&nbsp;Partidos</span></a></li>
								<li><a href="{{ route('graficos.index') }}"><i class="icon-stats-bars3"></i><span>&nbsp;&nbsp;Graficos</span></a></li>

								<li class="navigation-header"><span>Auxiliares</span> <i class="icon-menu" title="Forms"></i></li>
								<li><a href="{{ route('nombreequipos.index') }}"><i class="icon-grid5"></i><span>&nbsp;&nbsp;Nombre equipos</span></a></li>
								<li><a href="{{ route('ligas.index') }}"><i class="icon-list3"></i><span>&nbsp;&nbsp;Ligas</span></a></li>
								<li><a href="{{ route('rivales.index') }}"><i class="icon-alert"></i><span>&nbsp;&nbsp;Rivales</span></a></li>
								@endif
								<li class="navigation-header"><span>Entrenador</span> <i class="icon-menu" title="Forms"></i></li>
								<li><a href="{{ route('partidos.index') }}"><i class="fa fa-futbol-o"></i><span>&nbsp;&nbsp;&nbsp;Partidos</span></a></li>
								<li><a href="{{ route('graficos.index') }}"><i class="icon-stats-bars3"></i><span>&nbsp;&nbsp;Graficos</span></a></li>
								<li class="navigation-header"><span>----------------------------------------</span> <i class="icon-menu" title="Extensions"></i></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
         <div class="navbar navbar-default navbar-fixed-bottom bg-primary-800">
            <ul class="nav navbar-nav no-borde visible-xs-block">
               <li><a class="text-center collapsed" data-toggle="collapse" data-target="#navbar-second"><i class="icon-circle-up2"></i></a></li>
            </ul>
            <div class="navbar-collapse collapse" id="navbar-second">
               <div class="navbar-text">
                  &copy; 2018. <a href="#">webdesigna.es</a> por <a href="#" target="_blank">Luis Falagán</a>
               </div>
               <div class="navbar-right">
                  <ul class="nav navbar-nav">
                     <li><a href="#">Ayuda</a></li>
                     <li><a href="#">Términos y condiciones</a></li>
                     <li><a href="#" class="text-semibold">FCYLF</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                           <i class="icon-cog3"></i>
                           <span class="visible-xs-inline-block position-right">Settings</span>
                           <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right">
                           <li><a href="#"><i class="icon-dribbble3"></i> Ayuda</a></li>
                           <li><a href="#"><i class="icon-pinterest2"></i> Términos y condiciones</a></li>
                           <li><a href="#"><i class="icon-github"></i> FCYLF</a></li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div>
@endsection
