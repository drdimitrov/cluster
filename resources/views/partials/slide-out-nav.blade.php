<div class="nav-side">			
	<a href="#" class="nav-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>

	<ul>
		<li><a href="#top">Начало</a></li>
		<li><a href="#news">Новини</a></li>
		<li><a href="#work">За нас</a></li>
		<li><a href="#teachers">Преподаватели</a></li>
		<li><a href="/method">Метод</a></li>
		<li><a href="{{ url('/pictures') }}">Снимки</a></li>
		<li><a href="{{ url('/videos') }}">Видео</a></li>
		
		@if(Auth::guest())
			<li><a href="/register">Регистрация</a></li>
			<li><a href="/login">Вход</a></li>
			<li><a href="{{ url('/password/reset') }}">Смяна на парола</a></li>
		@else
			<li><a href="{{ url('/home') }}">Моят акаунт</a></li>
			<li>
				<a href="{{ url('/logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Изход
                </a>

                <form 
                    id="logout-form" 
                    action="{{ url('/logout') }}" 
                    method="POST" 
                    style="display: none;"
                >
                    {{ csrf_field() }}
                </form>
			</li>
		@endif
	</ul>
</div>