<html lang="ja">
<head>
        <meta charset="utf-8">
	<title>Home work</title>
        <link href="{{ url('css/style.css') }}" rel="stylesheet">
</head>
<body>
	<header>
            <div class="container">
                <h1><a href="{{ url('home') }}">LARAVEL</a></h1>
		<ul class="auth-list">
                    
			<li><a href="{{ url('auth/login') }}">login</a></li>
			<li><a href="{{ url('auth/register') }}">regist</a></li>
                        
			<li><a href="{{ url('admin/home') }}">admin</a></li>
			<li><a href="{{ url('auth/logout') }}">logout</a></li>
                        
		</ul>
            </div>
	</header>
    <div class="container" id="contents">
	@yield('content')
    </div>
</body>
</html>