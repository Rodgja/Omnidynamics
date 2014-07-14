<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/omnidynamics/css/style.css"
</head>
<body>
<header class="headerContainer">
    <div class="headerNav">
        <li class="shop"><a href="../omnidynamics/">Home</a></li>
        <li class="shop"><a href="/omnidynamics/shop">shop</a></li>
		@if (Auth::guest())
		<li class="login"><a href="/omnidynamics/register">register</a></li>
        <li class="login"><a href="/omnidynamics/login">login</a></li>
		@else
		<li>{{ link_to('/profile/'.Auth::user()->username,'Account')}}</li>
		<li class="logout"><a href="/omnidynamics/logout">logout</a></li>
		@endif
        <li class="cart"><a href="/omnidynamics/cart">cart</a></li>
    </div>
</header>
<div class="mainContent">
    @yield('content')
</div>
</body>
</html>
